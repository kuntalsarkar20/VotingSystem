<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['signup'] = 'signup_controller/index';
$route['signup/password-not-matched'] = 'signup_controller/index';
$route['login/wrong-credential'] = 'signup_controller/login_view';
$route['login'] = 'signup_controller/login_view';
$route['profile'] = 'profile_controller/index';
$route['profile/create-new-poll'] = 'profile_controller/create_new_poll';
$route['logout'] = 'profile_controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
