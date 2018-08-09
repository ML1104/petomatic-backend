<?php

$router->get('app', 'PagesController@home');

$router->get('app/users', 'PagesController@listUsers');
$router->get('app/users/{userId}', 'PagesController@viewUser');
$router->post('app/users', 'PagesController@addUser');

$router->get('app/pets', 'PagesController@listPets');
$router->get('app/pets/{petId}', 'PagesController@viewPet');
$router->post('app/pets', 'PagesController@addPet');

$router->get('app/clients', 'PagesController@listClients');
$router->get('app/clients/{clientId}', 'PagesController@viewClient');
$router->post('app/clients', 'PagesController@addClient');

$router->get('app/login', "Authenticate@login");
$router->post('app/login', "Authenticate@validate");
$router->get('app/logout', "Authenticate@logout");
