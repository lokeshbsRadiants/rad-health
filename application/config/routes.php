<?php

defined('BASEPATH') or exit('No direct script access allowed');

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
  | When you set this option to TRUE, it will replace ALL dashes with
  | underscores in the controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
$route['default_controller'] = 'Home';
$route['service'] = 'Home/service';
$route['careers'] = 'Home/careers';
$route['admin'] = 'adminlogin';
$route['solution/(:any)'] = 'solution/index';
$route['service/(:any)'] = 'service/index';
$route['service-detail/(:any)'] = 'servicedetail/index';
$route['detail-service/(:any)'] = 'servicedetail/detail_service';
$route['client/(:any)'] = 'client/index';
$route['contract-vehicles'] = 'contractvehicles/index';
$route['privacy-policy'] = 'privacypolicy/index';

// auth routes 
$route['register'] = "jobauth/register";
$route['signin'] = "jobauth/signin";
$route['logout'] = "jobauth/logout";
$route['jobauth/forgot-password'] = "jobauth/forgotpassword";


// job applicant 
$route['job-applications'] = "jobapplicant/index";
$route['profile'] = "jobapplicant/profile";
$route['update-profile'] = "jobapplicant/updateprofile";
$route['update-password'] = "jobapplicant/changepassword";
$route['upload-resume'] = "jobapplicant/uploadResume";



// job board
$route['job-board'] = "jobboard/index";
$route['job-board/quick-apply'] = "jobboard/quickApply";
$route['job-board/apply-now/(:any)'] = "jobboard/applynow";

$route['job-board/details'] = "jobboard/show";



// user register and signin 
$route['translate_uri_dashes'] = TRUE;




