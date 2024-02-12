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
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error_page';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'home/login_page';
$route['logout'] = 'home/logout';

// department routes
$route['add-department'] = 'department';
$route['insert-department'] = 'department/insert';
$route['manage-department'] = 'department/manage_department';
$route['edit-department/(:num)'] = 'department/edit/$1';
$route['update-department'] = 'department/update';
$route['delete-department/(:num)'] = 'department/delete/$1';

//employee routes
$route['add-employee'] = 'employee';
$route['manage-employee'] = 'employee/manage';
$route['insert-employee'] = 'employee/insert';
$route['delete-employee/(:num)'] = 'employee/delete/$1';
$route['edit-employee/(:num)'] = 'employee/edit/$1';
$route['update-employee'] = 'employee/update';
$route['view-employee'] = 'employee/view';

//salary routes
$route['add-salary'] = 'salary';
$route['manage-salary'] = 'salary/manage';
$route['view-salary'] = 'salary/view';
$route['salary-invoice/(:num)'] = 'salary/invoice/$1';
$route['print-invoice/(:num)'] = 'salary/invoice_print/$1';
$route['delete-salary/(:num)'] = 'salary/delete/$1';

//Leave routes
$route['apply-leave'] = 'leave';
$route['approve-leave'] = 'leave/approve';
$route['manage-leave'] = 'leave/manage';
$route['leave-approved/(:num)'] = 'leave/insert_approve/$1';
$route['leave-rejected/(:num)'] = 'leave/insert_reject/$1';
$route['view-leave'] = 'leave/view';
$route['salaryinvoice/(:num)'] = 'salary/invoiceemployee/$1';

//request routes
$route['view-request'] = 'request/index';
$route['request'] = 'request/approve';
$route['delete-request/(:num)'] = 'request/delete/$1';
$route['request/upload_pdf'] = 'request/upload_pdf';

//Attendance
$route['attendance'] = 'attendance';
$route['attendance_page'] = 'attendance/page';
$route['manage-attendance'] = 'attendance/view';
$route['add-attendance'] = 'attendance/add';
$route['edit-attendance'] = 'attendance/edit';
$route['delete-attendance'] = 'attendance/delete';

//Calendar routes
$route['calendar'] = 'calendar';
$route['view-events'] = 'calendar/view';

//Chat routes
$route['chat'] = 'chat';
$route['view-chat'] = 'chat/view';

//Performance routes
$route['performance'] = 'performance';
$route['view-performance'] = 'performance/view';

