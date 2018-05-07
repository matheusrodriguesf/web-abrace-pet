<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | URI ROUTING
  | -------------------------------------------------------------------------
  | This file lets you re-map URI requests to specific controller functions.
  |
  | Typically there is a one-to-one relationship between a URL string
  | and its corresponding controller class/method. The segments in a
  | URL normally follow this pattern:
  |
  |	example.com/class/method/id/
  |
  | In some instances, however, you may want to remap this relationship
  | so that a different class/function is called than the one
  | corresponding to the URL.
  |
  | Please see the user guide for complete details:
  |
  |	https://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There are three reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router which controller/method to use if those
  | provided in the URL cannot be matched to a valid route.
  |
  |	$route['translate_uri_dashes'] = FALSE;
  |
  | This is not exactly a route, but allows you to automatically route
  | controller and method names that contain dashes. '-' isn't a valid
  | class or method name character, so it requires translation.
  | When you set this option to TRUE, it will replace ALL dashes in the
  | controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
// $route[sua/rota] = "Controller/funcao";
$route['default_controller'] = 'welcome';
$route['404_override'] = '';

$route['inicio'] = 'Home_Logged/index';

$route['gerenciamento/perfil'] = 'Gerenciamento/index';
$route['gerenciamento/salvar'] = 'Gerenciamento/create';

$route['cadastro/usuario'] = 'Cadastra_Usuario/index';
$route['cadastro/usuario/add'] = 'Cadastra_Usuario/salvar';

$route['login/usuario'] = 'Login_Usuario/index';
$route['login/usuario/logar'] = 'Login_Usuario/logar';
$route['login/usuario/deslogar'] = 'Login_Usuario/logout';

$route['pet/detalhe/(:any)'] = 'Detalhe_Animal/index/$1';
$route['pet/atualizar/(:any)'] = 'Atualiza_Animal/index/$1';
$route['pet/animais'] = 'Animais/index';

////// Rotas do cadastro do Pet //////
//Adoção
$route['pet/adocao'] = 'Pet_Adocao/index';
$route['pet/adocao/add'] = 'Pet_Adocao/salvar';
$route['pet/adocao/edit'] = 'Pet_Adocao/index';
$route['pet/adocao/list/(:num)'] = 'Pet_Adocao/index';
$route['pet/adocao/list-all'] = 'Pet_Adocao/listar';
$route['pet/adocao/delete/(:any)'] = 'Pet_Adocao/Excluir/$1';
$route['pet/adocao/atualizar/(:any)'] = 'Pet_Adocao/Atualizar/$1';
$route['pet/detalhe/(:any)'] = 'Detalhe_Animal/index/$1';
$route['pet/atualizar/(:any)'] = 'Atualiza_Animal/index/$1';
$route['pet/animais'] = 'Animais/index';
//Lar Temporário
$route['pet/lar-temporario'] = 'Pet_Lar_Temporario/index';
$route['pet/lar-temporario/add'] = 'Pet_Lar_Temporario/salvar';
$route['pet/lar-temporario/edit'] = 'Pet_Lar_Temporario/index';
$route['pet/lar-temporario/list-all'] = 'Pet_Lar_Temporario/listar';
$route['pet/lar-temporario/delete'] = 'Pet_Lar_Temporario/index';
////////////

$route['translate_uri_dashes'] = FALSE;
$route['upload'] = 'Upload';

$route['teste'] = 'Usuario_teste/index';
$route['somos'] = 'Quem_somos/index';

$route['principal'] = 'Tela_inicial/index';
$route['gerenciamento_pet'] = 'Gerenciamento_pet/index';

