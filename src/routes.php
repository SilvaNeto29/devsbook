<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');
$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');

// $router->get('/pesquisa');
// $router->get('/perfil');
// $router->get('/sair');
// $router->get('/amigos');
// $router->get('/fotos');
// $router->get('/config');

$router->post('/post/new', 'PostController@new');