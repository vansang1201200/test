<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Menu;
use App\Core\Customers;
class PagesController
{
    public function index()

    {
       return view('indexblog');
    }
    public function Menu()
    {
        $listmenus = App::get('database')->selectAll('menu');


        $listmenus = array_map(function ($menu) { 
            //$menu->water_photo = addslashes(file_get_contents($_FILES['water_photo']['tmp_name']));
            return new Menu($menu->ID_oder, $menu->Name_coffee,$menu->water_photo,$menu->price);
        }, $listmenus);

        return view('index', ['listmenus' => $listmenus]);
    }
    public function Cutomers()
    {
        $listCustomers = App::get('database')->selectAll('Customers');


        $listCustomers = array_map(function ($Customers) { 
           
            return new Customers($Customers->ID_customer, $Customers->Name_customer,$Customers->location,$Customers->ID_saff);
        }, $listCustomers);

        // die(var_dump($listCustomers));

        return view('index1', ['listCustomers' => $listCustomers]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {


        return view('contact');
    }


  public function logout()

  {
     return view('login');
  }

    
  
}