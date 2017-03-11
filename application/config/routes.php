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
$route['default_controller'] = 'welcome';

$route['home'] = 'welcome/index';
$route['about'] = 'welcome/about';
$route['contact'] = 'welcome/contact';
$route['certification'] = 'welcome/certification';
$route['enquiry'] = 'welcome/enquiry';
$route['gallery'] = 'welcome/gallery';
//$route['ordernow'] = 'welcome/ordernow';
//$route['productdetail'] = 'welcome/productdetail';
//$route['coolequipment'] = 'welcome/coolequipment';



//admin routes
$route['admin']='admin';
$route['admin/login']='login';
$route['admin/process/login']='login/loginProcess';

$route['admin/category/(:any)']='admin/category/$1';
$route['admin/product/(:any)']='admin/product/$1';
$route['admin/certificate/(:any)']='admin/certificate/$1';
$route['admin/about/(:any)']='admin/about/$1';

$route['admin/(:any)']='admin/$1';


//website routes
$route['order/(:any)']='welcome/order/$1';
$route['products/(:any)']='welcome/products/$1';
$route['products/(:any)/(:any)']='welcome/products/$1/$2';
$route['product-detail/(:any)']='welcome/productdetail/$1';
$route['partnership/(:any)']='welcome/partnership/$1';

//$route['about/(:any)']='welcome/about/$1';
$route['(:any)']='welcome/$1';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

