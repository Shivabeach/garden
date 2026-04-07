<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['forms/recieve'] = 'forms/recieve';
$route['forms/soil'] = 'forms/soil';
$route['forms/(:any)'] = 'forms/view/$1';
$route['forms'] = 'forms';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


