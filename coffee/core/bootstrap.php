<?php 
use App\Core\App;


App::bind("config" , require 'config.php');

App::bind('database',new QueryBuilder(
    Connection::connect(App::get('config')['database'])
));

function view($Name,$data = [])
{
    extract($data);
     require "views/{$Name}.view.php";
}

function redirect($path = null)
{
    header("Location: /{$path}");
}