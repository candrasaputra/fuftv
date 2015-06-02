<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "mainpage_c";
$route['admin'] = "admin/main";
$route['requestfilm'] = "mainpage_c/requestfilm";
$route['post'] = "mainpage_c/post";
$route['tontonanpopuler'] = "mainpage_c/tontonanpopuler";
$route['daftarfilm'] = "mainpage_c/daftarfilm";
$route['disarankan'] = "mainpage_c/disarankan";
$route['genres'] = "mainpage_c/genres";
$route['updatetanterakhir'] = "mainpage_c/lastupdate";
$route['mainpage_c/post'] = "mainpage_c/post/9999999999999999999999999999999999999";
$route['404_override'] = 'error';
$route['film/(:any)'] = 'mainpage_c/detailfilm/$1';
$route['post/(:any)'] = 'mainpage_c/post/$1';
$route['kategori/(:any)'] = 'mainpage_c/kategori/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */