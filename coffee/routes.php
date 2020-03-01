<?php 
$router->get('login', 'BrandControler@login');
$router->get('', 'PagesController@Menu');

$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('showAddBrand', 'BrandControler@add');
$router->get('login', 'BrandControler@login');
$router->post('addmenu', 'BrandControler@store');
// $router->post('addmenu', 'BrandControler@store');

$router->get('editmenus', 'BrandControler@edit');
$router->get('editmenu', 'BrandControler@update');
$router->post('editmenu', 'BrandControler@update');
$router->get('deletemenu', 'BrandControler@delete');
$router->get('loguot', 'PagesController@logout');
$router->get('Cutomers', 'PagesController@Cutomers');
$router->get('indexblog', 'PagesController@index');
// $router->post('home-blog', 'PagesController@index');
$router->get('customers', 'BrandControler@add1');





