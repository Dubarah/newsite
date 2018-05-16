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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] 	= 'basics';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;



$route['login'] 				= 'basics/login';
$route['logout']                = 'basics/logout';
$route['switch_lang']           = 'basics/swich_lang';
$route['lock_screen']    		= 'basics/lock_screen_view';
$route['screen_lock']    		= 'basics/lock_screen_fun';


$route['roles']                 = 'panel/permissions/get_roles';
$route['add_role']              = 'panel/permissions/add_new_role';
$route['edit_emps/(:num)']      = 'panel/permissions/edit_role_emps/$1';
$route['edit_pers/(:num)']      = 'panel/permissions/edit_role_perts/$1';
$route['edit_desc/(:num)']      = 'panel/permissions/edit_role_data/$1';



$route['home'] 					 = 'panel/user/home';



$route['social_media'] 				= 'content_mng/social_media';
$route['categories'] 				= 'content_mng/categories';
$route['categories/(:num)'] 		= 'content_mng/categories/$1';
$route['edit_cat/(:num)'] 			= 'content_mng/edit_cat/$1';
$route['fire_cat/(:num)'] 			= 'content_mng/fire_cat/$1';
$route['add_cat'] 					= 'content_mng/add_cat';
$route['advertisments'] 			= 'content_mng/advertisments';
$route['business'] 					= 'content_mng/business';
$route['getskills/(:num)'] 			= 'content_mng/getskills/$1';
$route['delete_ad/(:num)'] 			= 'content_mng/delete_ad/$1';
$route['delete_bus/(:num)'] 		= 'content_mng/delete_bus/$1';
$route['verified_bus/(:num)'] 		= 'content_mng/verified_bus/$1';
$route['notverified_bus/(:num)'] 	= 'content_mng/notverified_bus/$1';
$route['delete_ad/(:num)/(:num)'] 	= 'content_mng/delete_ad/$1/$2';
$route['approve_ad/(:num)'] 		= 'content_mng/approve_ad/$1';
$route['approve_bus/(:num)'] 		= 'content_mng/approve_bus/$1';
$route['edit_dubarah/(:num)'] 		= 'content_mng/edit_dubarah/$1';
$route['show_applics/(:num)'] 		= 'content_mng/show_applics/$1';
$route['askus'] 					= 'content_mng/askus';
//add by #PE$$
$route['achievements']				= 'content_mng/achievements';
$route['achievements/(:num)']		= 'content_mng/achievements/$1';
$route['approve_ach/(:num)']		= 'content_mng/approve_ach/$1';
$route['delete_ach/(:num)'] 		= 'content_mng/delete_ach/$1';
$route['verified_ach/(:num)'] 		= 'content_mng/verified_ach/$1';
$route['notverified_ach/(:num)'] 	= 'content_mng/notverified_ach/$1';


$route['create_user']            = 'panel/user/create_new_emp';
$route['users/(:num)']           = 'panel/user/employees_list/$1';
$route['fire_emp/(:num)']        = 'panel/user/fire_employee/$1';
$route['edit_salary/(:num)']     = 'panel/user/edit_emp_salary/$1';
$route['edit_emp/(:num)']        = 'panel/user/edit_basic_emp_info/$1';
$route['payments_old']           = 'panel/user/payments_list';
$route['regions']                = 'panel/user/regions_list';
$route['edit_regname/(:num)']    = 'panel/user/edit_region_name/$1';
$route['edit_expname/(:num)']    = 'panel/user/edit_expenses_name/$1';
$route['countries']     		 = 'panel/user/countries';
$route['add_region']             = 'panel/user/add_new_region';
$route['del_region/(:num)']      = 'panel/user/delete_region/$1';
$route['del_country/(:num)']     = 'panel/user/delete_country/$1';
$route['del_city/(:num)'] 		 = 'panel/user/delete_city/$1';
$route['del_branch/(:num)']      = 'panel/user/delete_branch/$1';
$route['add_expenses']           = 'panel/user/add_new_expenses';
$route['edit_countname/(:num)']  = 'panel/user/edit_country_name/$1';
$route['add_country']     		 = 'panel/user/add_new_country';
$route['edit_country/(:num)']    = 'panel/user/edit_country_data/$1';
$route['edit_cityname/(:num)']   = 'panel/user/edit_city_name/$1';
$route['edit_city/(:num)']       = 'panel/user/edit_city_data/$1';
$route['add_city/(:num)']        = 'panel/user/add_new_city/$1';
$route['edit_branchname/(:num)'] = 'panel/user/edit_branch_name/$1';
$route['add_branch/(:num)']      = 'panel/user/add_new_branch/$1';
$route['emp_details/(:num)']     = 'panel/user/all_user_details/$1';
$route['get_countries/(:num)']   = 'panel/user/get_ajax_countries/$1';
$route['get_cities/(:num)']      = 'panel/user/get_ajax_cities/$1';
$route['get_branches/(:num)']    = 'panel/user/get_ajax_branches/$1';
$route['sus_emps']    			 = 'panel/user/suspended_employees';
$route['restore_emp/(:num)']	 = 'panel/user/restore_employee/$1';
$route['check_usrnm_emp/(:any)'] = 'panel/user/get_username_emp/$1';
$route['charts'] 				 = 'panel/user/charts';
$route['delete_user/(:num)'] 	 = 'panel/user/delete_user/$1';
$route['staff/(:num)'] 			 = 'panel/user/staff/$1';


