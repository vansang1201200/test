<?php

namespace App\Controllers;

use App\Core\App;

class BrandControler
{
    public function store()
    {
        $image = $_FILES['water_photo']['tmp_name'];
        $image = base64_encode(file_get_contents(addslashes($image)));

        App::get('database')->insert('menu', [
            'Name_coffee' => $_POST['Name_coffee'],
            //'water_photo' =>$_POST['Water_photo'],
            'water_photo' => $image,
            'price' =>$_POST['price']
        ]);      
        return redirect();
    }

    public function add()
    {   
        return view('addmenu');
    }
    
    public function edit()
    {
        $menu = App::get('database')->search('menu', $_GET['id']);       
        return view('editmenu', ['menu' => $menu]);
    }

    public function update()
    {
        $image = $_FILES['water_photo']['tmp_name'];
        $image = base64_encode(file_get_contents(addslashes($image)));

        App::get('database')->update('menu', [
            'ID_oder' => $_POST['ID_oder'],
            'Name_coffee' => $_POST['Name_coffee'],         
            'water_photo' => $image,
            'price' => $_POST['price']                   
        ]);

        return redirect();
    }
    public function delete()
    {
        App::get('database')->delete('menu', $_GET['id']);

        return redirect();
    }
    public function login()
    {
        return view('login');
    }
    public function add1()
    {   
    return view('addcustomers');
    }

    


}