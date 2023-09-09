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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//
$route['uploadDataPage'] = 'uploadData';
$route['regCustPage'] = 'regCustomer';
$route['viewOutstandPage'] = 'viewOutstand';
$route['delCustPage'] = 'delCustomer';
$route['CustPage'] = 'detCustomer';
$route['cleanCustPage'] = 'cleanCustomer';
$route['cleanOutstandPage'] = 'cleanOutstand';


//
$route['uploadHemasOut'] = 'uploadData/uploadHemasOut';
$route['uploadCiplaOut'] = 'uploadData/uploadCiplaOut';
$route['uploadGsOut'] = 'uploadData/uploadGsOut';
$route['uploadJlmOut'] = 'uploadData/uploadJlmOut';
$route['uploadSanOut'] = 'uploadData/uploadSanOut';
$route['uploadAbcOut'] = 'uploadData/uploadAbcOut';
$route['uploadNeoOut'] = 'uploadData/uploadNeoOut';
$route['uploadBaurOut'] = 'uploadData/uploadBaurOut';
$route['uploadEmOut'] = 'uploadData/uploadEmOut';
//

//
$route['cleanHemasCust'] = 'cleanCustomer/cleanHemasCust';
$route['cleanCiplaCust'] = 'cleanCustomer/cleanCiplaCust';
$route['cleanGsCust'] = 'cleanCustomer/cleanGsCust';
$route['cleanJlmCust'] = 'cleanCustomer/cleanJlmCust';
$route['cleanSanCust'] = 'cleanCustomer/cleanSanCust';
$route['cleanAbcCust'] = 'cleanCustomer/cleanAbcCust';
$route['cleanNeoCust'] = 'cleanCustomer/cleanNeoCust';
$route['cleanBaurCust'] = 'cleanCustomer/cleanBaurCust';
$route['cleanEmCust'] = 'cleanCustomer/cleanEmCust';
//

//
$route['cleanHemasOutstand'] = 'cleanOutstand/cleanHemasOutstand';
$route['cleanCiplaOutstand'] = 'cleanOutstand/cleanCiplaOutstand';
$route['cleanGsOutstand'] = 'cleanOutstand/cleanGSOutstand';
$route['cleanJlmOutstand'] = 'cleanOutstand/cleanJLMOutstand';
$route['cleanSanOutstand'] = 'cleanOutstand/cleanSanOutstand';
$route['cleanAbcOutstand'] = 'cleanOutstand/cleanABCOutstand';
$route['cleanNeoOutstand'] = 'cleanOutstand/cleanNEOOutstand';
$route['cleanBaurOutstand'] = 'cleanOutstand/cleanBAUROutstand';
$route['cleanEmOutstand'] = 'cleanOutstand/cleanEMEROutstand';
//
