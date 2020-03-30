<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['signup'] = 'signup_controller/index';
$route['signup/password-not-matched'] = 'signup_controller/index';
$route['login/wrong-credential'] = 'signup_controller/login';
$route['login'] = 'signup_controller/login';
$route['profile'] = 'profile_controller/index';
$route['logout'] = 'profile_controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
