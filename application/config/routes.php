<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['pages/checkpage'] = 'pages/checkpage';
$route['pages/orderpage'] = 'pages/orderpage';
$route['pages/order'] = 'pages/order';
$route['pages/(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
