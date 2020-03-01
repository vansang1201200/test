<?php

namespace App\Core;
class Menu
{
    public $ID_oder;
    public $Name_coffee;
    public $water_photo;
    public $price;
    public function __construct($ID_oder, $Name_coffee, $water_photo, $price)
    {
        $this->ID_oder = $ID_oder;
        $this->Name_coffee = $Name_coffee;
        $this->water_photo = $water_photo;
        $this->price = $price;
    }
}
