<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeDashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\IpCheckerController;
use App\Http\Controllers\HomeipController;
use App\Http\Controllers\ActivityModuleController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AdminDocUploadController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\CompanySettingController;

use App\Http\Controllers\FrontBlogController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\HomeBaseController;




// use App\Http\Controllers\backend\orderManagement\Customer\CustomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    // Route::get('/', function () {return view('welcome');});

     Route::get('/', [HomeDashboardController::class, 'welcome']);
     Route::get('/advanced-text-analyzer', [HomeDashboardController::class, 'advancedtextanalyzer']);
     Route::get('/fancy-text-generator', [HomeDashboardController::class, 'fancytextgenerator']);


     
   


    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/verifyip/{id}', [HomeipController::class, 'index']);
    Route::post('/request-access-ip', [HomeipController::class, 'request']);
    
    Route::get('/export-users',[UserController::class,'exportUsers']);
    Route::group(['middleware' => 'prevent-back-history'],function(){
        Auth::routes();  
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/admin', [HomeController::class, 'index'])->name('admin');
        Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin/dashboard');
        Route::match(['get','post'],'/userPasswordRest',[HomeController::class, 'userPasswordRest']);
        // Route::get('pagenotfound', [HomeController::class, 'pagenotfound']);
        Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
                Route::get('/export-users',[UserController::class,'exportUsers']);
                Route::get('/verifyip/{id}', [HomeipController::class, 'index']);
                Route::resource('roles', RoleController::class);
                Route::resource('users', UserController::class);
                Route::resource('ordercategory', OrdercategoryController::class);
                Route::get('/trashed-user', [UserController::class, 'trashedUser'])->name('trashedUser');
                Route::get('/restore-user/{id}', [UserController::class, 'restoreUser'])->name('restoreUser');
                Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
                Route::match(['get','post'],'/userout',[UserController::class, 'userout']);
                Route::post('/user/change-password', [UserController::class, 'change_user_password'])->name('change-password');
                Route::post('/user-filter', [UserController::class, 'userFilter'])->name('user-filter');
                Route::post('/validate/user-email', [UserController::class, 'validateUseremail'])->name('validate-user-email');


                Route::match(['get','post'],'/homebase',[HomeBaseController::class, 'index']);
                Route::match(['get','post'],'/homebase/add',[HomeBaseController::class, 'add']);
                Route::match(['get','post'],'/homebase/list',[HomeBaseController::class, 'list']);
                Route::match(['get','post'],'/homebase/edit/{id}',[HomeBaseController::class, 'edit']);
                Route::match(['get','post'],'/homebase/view/{id}',[HomeBaseController::class, 'show']);
                Route::match(['get','post'],'/homebase/delete/{id}',[HomeBaseController::class, 'delete']);

                Route::match(['get','post'],'/blog',[BlogController::class, 'index']);
                Route::match(['get','post'],'/blog/add',[BlogController::class, 'add']);
                Route::match(['get','post'],'/blog/list',[BlogController::class, 'list']);
                Route::match(['get','post'],'/blog/edit/{id}',[BlogController::class, 'edit']);
                Route::match(['get','post'],'/blog/view/{id}',[BlogController::class, 'show']);
                Route::match(['get','post'],'/blog/delete/{id}',[BlogController::class, 'delete']);


                Route::match(['get','post'],'/post',[PostController::class, 'index']);
                Route::match(['get','post'],'/post/add',[PostController::class, 'add']);
                Route::match(['get','post'],'/post/list',[PostController::class, 'list']);
                Route::match(['get','post'],'/post/edit/{id}',[PostController::class, 'edit']);
                Route::match(['get','post'],'/post/view/{id}',[PostController::class, 'show']);
                Route::match(['get','post'],'/post/delete/{id}',[PostController::class, 'delete']);



                 Route::match(['get','post'],'/page',[PageController::class, 'index']);
                Route::match(['get','post'],'/page/add',[PageController::class, 'add']);
                Route::match(['get','post'],'/page/list',[PageController::class, 'list']);
                Route::match(['get','post'],'/page/edit/{id}',[PageController::class, 'edit']);
                Route::match(['get','post'],'/page/view/{id}',[PageController::class, 'show']);
                Route::match(['get','post'],'/page/delete/{id}',[PageController::class, 'delete']);




    
                // user multipal checkbox use for delete        
                    Route::match(['get','post','delete'],'/multipleusersdelete',[UserController::class, 'multipleusersdelete']);
                //clock in clock out 
                // Route::match(['get','post'],'/clockin',[UserController::class, 'clockin']);
                
                Route::get('/dat/organization_token', [ShipmentController::class, 'dat_organization_token'])->name('dat_organization_token');
                Route::match(['get','post'],'/changeuserStatus',[UserController::class, 'changeuserStatus']);
                Route::match(['get','post'],'/userprofiledata',[UserController::class, 'userprofiledata']);
                Route::match(['get','post'],'/userprofilesubmit',[UserController::class, 'userprofiledatasubmit']);
                
            
            
                Route::get('/profile',[UserController::class, 'view_profile'])->name('user_profile');
                Route::post('/save-profile',[UserController::class, 'update_profile'])->name('update_profile');
                
                 
                
                Route::get('/setting/company-details', [CompanySettingController::class, 'index']);
                Route::get('/setting/email', [CompanySettingController::class, 'emailSetting']);
                Route::post('/setting/SendTestEmail', [CompanySettingController::class, 'SendTestEmail']);
                Route::get('/setting/email-template', [CompanySettingController::class, 'emailtemplateSetting']);
                Route::get('/setting/api', [CompanySettingController::class, 'apiSetting']);
                Route::post('/setting/api-DatSave', [CompanySettingController::class, 'ApiDatSave']);
                Route::post('/setting/api-carrierpacket', [CompanySettingController::class, 'ApiCarrierPacket']);
                Route::post('/save-company-details', [CompanySettingController::class, 'addcdetails'])->name('save-company-details');
                Route::post('/email-setting-action', [CompanySettingController::class, 'addemaildetails'])->name('email-setting-action');
                Route::get('/setting/ip', [CompanySettingController::class, 'manageIP']);
                
                // for ip checker 
                // Route::get('ipchecker', [AccountsPayableController::class, 'index']);
                // Route::get('ipchecker/list', [AccountsPayableController::class, 'list']);
                Route::match(['get','post'],'/ipchecker/add',[IpCheckerController::class, 'add']);
                Route::match(['get','post'],'/ipchecker/edit/{id}',[IpCheckerController::class, 'edit']);
                Route::match(['get','post'],'/ipchecker/view/{id}',[IpCheckerController::class, 'show']);
                Route::match(['get','post'],'/ipchecker/delete/{id}',[IpCheckerController::class, 'delete']);
                    Route::match(['get','post'],'/ipcheckerstatus',[IpCheckerController::class, 'ipStatus']);
                // Route::match(['get','post'],'/ipchecker/notification/{nid}',[NotificationController::class, 'notification_assignuser']);
                
                // DAT Api User credential
                Route::match(['get','post'],'/setting/user/dat/api',[CompanySettingController::class, 'apiuserSetting']);
                Route::match(['get','post'],'/setting/user/dat/api/{id}',[CompanySettingController::class, 'apiDatSettingUpdate']);
                Route::match(['get','post'],'/setting/dat/user/api',[CompanySettingController::class, 'dataapiuserlist']);
                
                Route::match(['get','post'],'/setting/dat/user/status/api',[CompanySettingController::class, 'datuserstatus']);
                Route::match(['get','post'],'/setting/dat/show/admin',[CompanySettingController::class, 'showadminapi']);
                Route::match(['get','post'],'/setting/dat/show/self',[CompanySettingController::class, 'showselfapi']);
                Route::match(['get','post'],'/setting/dat/delete/{id}',[CompanySettingController::class, 'datdelete']);
                Route::match(['get','post'],'/setting/dat/rdelete/{id}',[CompanySettingController::class, 'rdatdelete']);

                //End  for api user dat credential
                 
                // Activity Module Start End


                // Document upload for admin only end
                //Dashboard Chart list For Admin
                Route::get('/chart', [HomeController::class, 'handleChart']);
                //report 
                Route::match(['get','post'],'/report',[ReportController::class, 'index']);
                Route::get('/load-report/{id}',[ReportController::class, 'loadReport']);
                //agency
                // Route::match(['get','post'],'/agency-report',[ReportController::class, 'agencyreport']);
                Route::get('/agency-report/{id}',[ReportController::class, 'agencyreport']);
                //shipment
                Route::get('/shipment-report',[ReportController::class, 'shipmentreport']);
                //shipper
                Route::get('/shipper-report',[ReportController::class, 'shipperreport']);
                
                Route::get('/file-import',[UserController::class,'importView']);
                Route::post('/import',[UserController::class,'import']);
                
                Route::get('/email-template', function () {
                    return view('emails/CarrierPacketInvite/invite_link');
                });
    
                Route::get('/search-intellivite', function () {
                    return view('');
                });
                
                
                Route::get('/setting', function () {
                    return redirect(url('/admin/setting/company-details'));
                });
              
                Route::get('/shipment-pdf', function () {
                    return view('backend/shipmentManagement/shipment/pdf');
                });
    
                // For internal cache remove only 
                Route::match(['get','post'],'/clear', function(){
                    Artisan::call('cache:clear');
                    Artisan::call('config:clear');
                    Artisan::call('config:cache');
                    Artisan::call('view:clear');
                    return redirect(url('https://coolsymbol.online/admin/dashboard'))->with('success', 'Clear Success Fully Cache, Config, Route, View');
                    // https://ambcrm.com/admin/dashboard
                    // return view('home')->with('success', 'Clear Success Fully Cache, Config, Route, View');
                    // return view('online-games.online-game.show', compact('onlinegame'));
                });
                
                Route::match(['get','post'],'/schedule',[CompanySettingController::class, 'schedule']);
    
        });
    });


  
        
    Route::match(['get','post'],'/clear', function() {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        return  "Clear Success Fully Cache, Config, Route, View";
        // return Redirect::back()->with('msg', 'The Message');
        // return Redirect::view('welcome')->withErrors(['message' => 'The Message']);
    });

    Route::match(['get','post'],'/migrate', function() {
        Artisan::call('migrate');
        return  "Migration Success Fully";  
        // return Redirect::back()->with('msg', 'The Message');
        // return Redirect::view('welcome')->withErrors(['message' => 'The Message']);
     });
     
    
    
    Route::match(['get','post'],'/blog',[FrontHomeController::class, 'allblogshowData']);
    Route::match(['get','post'],'/blog/{slug}',[FrontHomeController::class, 'blogshowData']);
    
    Route::match(['get','post'],'/{slug}',[FrontHomeController::class, 'showData']);
    Route::match(['get','post'],'/page/{slug}',[FrontHomeController::class, 'pageshowData']);
    
    
    // https://coolsymbol.online/cool-bracket-symbols


        Route::match(['get','post'],'/feed',[FrontHomeController::class, 'feed']);
        Route::match(['get','post'],'/rss',[FrontHomeController::class, 'feed']);
        Route::get('l/sitemap.xml', [FrontHomeController::class, 'sitemap']);
   
   
if (!defined('PROJECT_NAME')) define('PROJECT_NAME','CoolSymbol');
if (!defined('COPYRIGHT_NAME')) define('COPYRIGHT_NAME','Copyright © 2025. All right reserved.');
if (!defined('BACKEND_COMMON_PATH')) define('BACKEND_COMMON_PATH',asset('public/backend/assets'));
if (!defined('BACKEND_COMMON_DOC')) define('BACKEND_COMMON_DOC',asset('public/shipment_doc'));
if (!defined('BACKEND_COMMON_DOC_New')) define('BACKEND_COMMON_DOC_New',asset('public/backend/download'));
if (!defined('BACKEND_INVOICE_DOC')) define('BACKEND_INVOICE_DOC',asset('public/invoice_generate'));
if (!defined('ADMIN_FACKIMG_PATH')) define('ADMIN_FACKIMG_PATH',asset('public/backend/profile/profile.png/'));
if (!defined('ADMIN_DOC_PATH')) define('ADMIN_DOC_PATH',asset('public/backend/default/document.png/'));
if (!defined('SYSTEM_IMG_PATH')) define('SYSTEM_IMG_PATH',asset('public/backend/assets/default/'));
if (!defined('BACKEND_IMG_PATH')) define('BACKEND_IMG_PATH',asset('public/backend/assets/images/'));
if (!defined('BACKEND_CSS_PATH')) define('BACKEND_CSS_PATH',asset('public/backend/assets/css/'));
if (!defined('BACKEND_JS_PATH')) define('BACKEND_JS_PATH',asset('public/backend/assets/js/'));
if (!defined('BACKEND_PLGIN_PATH')) define('BACKEND_PLGIN_PATH',asset('public/backend/assets/plugins/'));
if(!defined('DefaultImgPdf')) define('DefaultImgPdf', asset('public/backend/shipper/pdf.png'));
