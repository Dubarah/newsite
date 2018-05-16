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

$route['default_controller']    = 'site/indexx';
$route['404_override'] = '';
$route['500_override'] = 'site/500_error';

$route['translate_uri_dashes']  = FALSE;
//public users 
$route['home'] 				 			= 'site/indexx';
$route['switch_lang'] 					= 'welcome/swich_lang/';
$route['logout'] 			    		= 'site/logout/';
$route['login'] 						= 'site/login/';
$route['signup'] 						= 'site/signup/';
$route['jobs/(:num)'] 					= 'site/categories_main/$1';
$route['jobs'] 							= 'site/categories_main';
$route['forgot_password'] 				= 'site/forgot_password';
$route['reset_pass/(:any)'] 			= 'site/reset_pass/$1';
$route['resend_code/(:any)'] 			= 'site/resend_code/$1';
$route['facebook'] 						= 'site/facebook';
$route['blog'] 							= 'site/blog';
$route['admin_view/(:any)'] 			= 'site/admin_view/$1';
$route['dubarah/(:any)'] 				= 'site/apply_job/$1';
$route['job/(:any)'] 					= 'site/apply_job/$1';

$route['verify_account/(:any)'] 		= 'site/verify_account/$1';
$route['complete_account'] 				= 'site/complete_account';
$route['send_activation'] 				= 'site/send_activation';
$route['aboutus'] 						= 'site/aboutus';
$route['team'] 							= 'site/team';
$route['vision'] 						= 'site/vision';
$route['checkcv'] 						= 'site/checkcv';
$route['terms'] 						= 'site/terms';
$route['privacy'] 						= 'site/privacy';
//Notifications
$route['read_notifications'] 			= 'panel/notifications/read_notifications';
$route['get_notifications'] 			= 'panel/notifications/get_notifications';


//logedin users 
$route['get_city/(:num)'] 		= 'site/get_city/$1';
$route['sub/(:num)'] 			= 'panel/user/sub/$1';
$route['newrole/(:num)']   		= 'panel/user/newrole/$1';
$route['add_dubarah'] 			= 'panel/user/add_dubarah';

$route['my_profile'] 			= 'panel/user/profile_settings';
$route['my_dubarah'] 			= 'panel/user/my_dubarah';
$route['dubarah'] 				= 'site/dubarah';
$route['my_dubarah/(:num)'] 	= 'panel/user/my_dubarah/$1';
$route['my_applicants/(:num)/(:num)'] 	= 'panel/user/my_applicants/$1/$2';
$route['my_applicants/(:num)'] 			= 'panel/user/my_applicants/$1';
$route['unpublish_dubarah/(:num)'] 		= 'panel/user/unpublish_dubarah/$1';
$route['edit_dubarah/(:num)'] 		    = 'panel/user/edit_dubarah/$1';
$route['delete_dubarah/(:num)'] 		= 'panel/user/delete_dubarah/$1';
$route['resume/(:any)'] 				= 'panel/user/resume/$1';
$route['download/(:num)'] 				= 'panel/user/download/$1';
$route['up_img'] 				= 'panel/user/up_img';
//$route['my_profile'] 				= 'site/my_profile';
$route['reregister'] 			= 'site/reregister';
$route['done'] 					= 'site/done';
$route['done_virfed'] 			= 'site/done_virfed';
$route['done_dubarah'] 			= 'site/done_dubarah';
$route['need_activ'] 			= 'site/need_activ';
/*--------------------------#PE$$ Hero Citizen Section Start ---------------------*/
$route['HeroCitizen']											= 'site/show_service/1';
$route['herocitizen']											= 'site/show_service/1';
$route['add-achi']												= 'HeroCitizenPub/herohome';
$route['addAchievement']									= 'HeroCitizen/addAchievement';
$route['process/(:num)']									= 'HeroCitizen/stepsHandler/$1';
$route['editAchievement/(:num)/(:num)']		= 'HeroCitizen/editAchievement/$1/$2';
$route['edit_process/(:num)/(:num)']			= 'HeroCitizen/editHandler/$1/$2';
$route['achievements']										= 'HeroCitizenPub';

$route['add-achit']												= 'HeroCitizen';


$route['achievements/(:num)']							= 'HeroCitizenPub/index/$1';
$route['follow/(:num)']										= 'HeroCitizen/follow/$1';
$route['unfollow/(:num)']									= 'HeroCitizen/unfollow/$1';
$route['like/(:num)']											= 'HeroCitizen/like/$1';
$route['c_like/(:num)']										= 'HeroCitizen/c_like/$1';
$route['dislike/(:num)']									= 'HeroCitizen/dislike/$1';
$route['c_dislike/(:num)']								= 'HeroCitizen/c_dislike/$1';
$route['primary/(:num)/(:num)']						= 'HeroCitizen/make_primary/$1/$2';
/*--------------------------#PE$$ Hero Citizen Section End-----------------------*/
/*--------------------------#PE$$ General Section Start----------------------------*/
$route['profile']							= 'panel/user/profile';
$route['profile/(:num)']			= 'site/profile/$1';
$route['switch_lang/(:any)'] 		= 'welcome/swich_lang/$1'; //support the new design
$route['en'] 						= 'welcome/swich_lang/en'; //support the new design
$route['ar'] 						= 'welcome/swich_lang/ar'; //support the new design

$route['DuJobs']					= 'site/show_service/2';
$route['DuBusiness']				= 'site/show_service/3';
$route['dubusiness']				= 'site/show_service/3';
$route['Nocker']					= 'site/show_service/4';
$route['nocker']					= 'site/show_service/4';
$route['DuHub']						= 'site/show_service/5';
$route['duhub']						= 'site/show_service/5';
$route['DuInfoBlog']				= 'site/show_service/6';

$route['DuSolution']				= 'site/show_service/7';
$route['dusolution']				= 'site/show_service/7';
$route['Mshmosh']					= 'site/show_service/8';
$route['mshmosh']					= 'site/show_service/8';
$route['Donate']						= 'site/show_service/9';
$route['donate']						= 'site/show_service/9';

$route['DubarjiGame']						= 'site/show_service/10';
$route['dubarjigame']						= 'site/show_service/10';

$route['DuPlus']						= 'site/show_service/11';
$route['duplus']						= 'site/show_service/11';
$route['HelpRequest']				= 'site/help_request';
$route['DuHubForm']					= 'site/hub_form';
$route['about-dubarah']				= 'site/aboutdubarah';


/*--------------------------#PE$$ Genereal Section End-----------------------------*/
/*--------------------------#  Business Section Start # ----------------*/
$route['business-checkbyname/(:any)']	= 'business/business_checkbyname/$1' ; 
$route['get_busin_category/(:num)']	= 'business/business_get_categories/$1' ; 

$route['get_busin_cities']	= 'business/get_busin_cities' ; 
$route['get_busin_findedcategory']	= 'business/get_busin_findedcategory' ; 

$route['business-filter']			= 'business/businesses_filter' ;  
$route['business-filter/(:num)']	= 'business/businesses_search/$1' ; 
/// --------- Create & Edit -----------
$route['business-create']			= 'business/business_create' ;
$route['business-adding/(:num)']	= 'business/business_adding/$1' ;
$route['business-edit/(:num)']		= 'business/business_editing/$1' ;
// $route['business-store/(:num)']		= 'business/business_store' ;  
$route['business-profile/(:num)']			= 'business/business_page/$1' ; 


/*
$route['business-greeting']			= 'business/business_greeting' ;  
$route['business-list']				= 'business/businesses_list' ;  
$route['business-filter']			= 'business/businesses_filter' ;  
$route['business-create']			= 'business/business_create' ;
$route['business-adding/(:num)']	= 'business/business_adding/$1' ;
// $route['business-store/(:num)']		= 'business/business_store' ;  
$route['business-profile']			= 'business/business_profile' ;  
$route['business-submitted']		= 'business/business_submitted' ; 
$route['business-page/(:any)']		= 'business/business_page/$1' ; 
/*--------------------------#  Business Section End # -------------------*/
