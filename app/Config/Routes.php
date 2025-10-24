<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get("page2","Main::page2");
$routes->get("page3","Main::page3");
$routes->get("page4","Main::page4");
// / parametr jeto jenom base url
//šipka získavá informace z objektu
//Routa spměruje kam pujde to dal takže do controller
//Controller = Home
//controller procuje s  modelem a view (MVC - model, view, controller)
//controller jenom říká kdo co má dělat
//model vezme data z databaze a dává data controlleru
//controller to potom pošle view
//view to se vykreslí stránka a pošle to uživateli
//voláme tyto metody pomocí routes

