<?php

use App\Package;
use App\Category;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// **********   TEST ROUTES *********//

Route::get('test', [
    'as' => 'test',
    'uses' => 'HomeController@test'
]);

// **********   HOME ROUTES *********//

$appData = include(config_path() . '/data.php');

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::post('/' , [
    'as' => 'getStarted',
    'uses' => 'HomeController@getStarted'
]);

Route::post('book_call',[
    'as' => 'book_call',
    'uses' => 'HomeController@call'
]);

// **********   WEBDESIGN ROUTES *********//
Route::get('website-design', ['as' => 'websiteDesign', function () {
    return view('website_design');
}]);

Route::get('see-more-websites', ['as' => 'see-more-websites', function () {
    return view('see-more-websites');
}]);

Route::group(['prefix' => 'case-study'], function () {
    Route::get('cosycoco', ['as' => 'cosycoco', function () {
    return view('case-studies.cosycoco');
}]);

Route::get('123-pasta-pizza-gelato', ['as' => '123-pasta-pizza-gelato', function () {
    return view('case-studies.123-pasta-pizza-gelato');
}]);

Route::get('sport-clamps', ['as' => 'sport-clamps', function () {
    return view('case-studies.sport-clamps');
}]);

Route::get('cs-wd-viva-financial', ['as' => 'cs-wd-viva-financial', function () {
    return view('case-studies.cs-wd-viva-financial');
}]);

Route::get('cs-wd-powersmart', ['as' => 'cs-wd-powersmart', function () {
    return view('case-studies.cs-wd-powersmart');
}]);

Route::get('cs-wd-virtual-manager', ['as' => 'cs-wd-virtual-manager', function () {
    return view('case-studies.cs-wd-virtual-manager');
}]);

Route::get('cs-wd-cil', ['as' => 'cs-wd-cil', function () {
    return view('case-studies.cs-wd-cil');
}]);

Route::get('cs-wd-skyprowireless', ['as' => 'cs-wd-skyprowireless', function () {
    return view('case-studies.cs-wd-skyprowireless');
}]);

Route::get('money-globe', ['as' => 'money-globe', function () {
    return view('case-studies.money-globe');
}]);

Route::get('host-stage', ['as' => 'host-stage', function () {
    return view('case-studies.host-stage');
}]);

Route::get('unlettered', ['as' => 'unlettered', function () {
    return view('case-studies.unlettered');
}]);

Route::get('amira-contracting', ['as' => 'amira-contracting', function () {
    return view('case-studies.amira-contracting');
}]);

Route::get('alexander-law', ['as' => 'alexander-law', function () {
    return view('case-studies.alexander-law');
}]);

Route::get('diamoreum', ['as' => 'diamoreum', function () {
    return view('case-studies.diamoreum');
}]);

Route::get('ips', ['as' => 'ips', function () {
    return view('case-studies.ips');
}]);

Route::get('mahalo-hr', ['as' => 'mahalo-hr', function () {
    return view('case-studies.mahalo-hr');
}]);

Route::get('ezlearnin', ['as' => 'ezlearnin', function () {
    return view('case-studies.ezlearnin');
}]);

Route::get('wardrobe', ['as' => 'wardrobe', function () {
    return view('case-studies.wardrobe');
}]);

Route::get('ring-lab', ['as' => 'ring-lab', function () {
    return view('case-studies.ring-lab');
}]);

Route::get('handmason', ['as' => 'handmason', function () {
    return view('case-studies.handmason');
}]);

Route::get('akhter-biryani', ['as' => 'akhter-biryani', function () {
    return view('case-studies.akhter-biryani');
}]);

Route::get('ghories', ['as' => 'ghories', function () {
    return view('case-studies.ghories');
}]);

Route::get('healthwerx', ['as' => 'healthwerx', function () {
    return view('case-studies.healthwerx');
}]);

Route::get('altitude', ['as' => 'altitude', function () {
    return view('case-studies.altitude');
}]);

Route::get('power-plant', ['as' => 'power-plant', function () {
    return view('case-studies.power-plant');
}]);

Route::get('on-point-for-business', ['as' => 'on-point-for-business', function () {
    return view('case-studies.on-point-for-business');
}]);

Route::get('stjohn', ['as' => 'stjohn', function () {
    return view('case-studies.stjohn');
}]);

Route::get('optimize-drilling', ['as' => 'optimize-drilling', function () {
    return view('case-studies.optimize-drilling');
}]);

Route::get('abn', ['as' => 'abn', function () {
    return view('case-studies.abn');
}]);

Route::get('cs-ld-bybella', ['as' => 'cs-ld-bybella', function () {
    return view('case-studies.cs-ld-bybella');
}]);

Route::get('cs-ld-contractors-escrow', ['as' => 'cs-ld-contractors-escrow', function () {
    return view('case-studies.cs-ld-contractors-escrow');
}]);

Route::get('cs-ld-full-moon-run', ['as' => 'cs-ld-full-moon-run', function () {
    return view('case-studies.cs-ld-full-moon-run');
}]);

Route::get('cs-ld-infinity-aqua-design', ['as' => 'cs-ld-infinity-aqua-design', function () {
    return view('case-studies.cs-ld-infinity-aqua-design');
}]);

Route::get('cs-ld-makeup-julia', ['as' => 'cs-ld-makeup-julia', function () {
    return view('case-studies.cs-ld-makeup-julia');
}]);

Route::get('cs-ld-paletera', ['as' => 'cs-ld-paletera', function () {
    return view('case-studies.cs-ld-paletera');
}]);

Route::get('cs-ld-bailee', ['as' => 'cs-ld-bailee', function () {
    return view('case-studies.cs-ld-bailee');
}]);

Route::get('cs-ld-river-elk', ['as' => 'cs-ld-river-elk', function () {
    return view('case-studies.cs-ld-river-elk');
}]);

Route::get('cs-ld-rxtro', ['as' => 'cs-ld-rxtro', function () {
    return view('case-studies.cs-ld-rxtro');
}]);

Route::get('cs-ld-pulsepixel', ['as' => 'cs-ld-pulsepixel', function () {
    return view('case-studies.cs-ld-pulsepixel');
}]);

Route::get('cs-ld-mareaqol', ['as' => 'cs-ld-mareaqol', function () {
    return view('case-studies.cs-ld-mareaqol');
}]);

Route::get('cs-ld-qna-coffee', ['as' => 'cs-ld-qna-coffee', function () {
    return view('case-studies.cs-ld-qna-coffee');
}]);
});


Route::get('website-brief', [
    'as' => 'websiteBrief',
    'uses' => 'WebsiteBriefController@index'
]);

Route::post('website-brief/save-files', [
    'as' => 'saveFiles',
    'uses' => 'WebsiteBriefController@save_referenceDocs'
]);

Route::post('website-brief', [
    'as' => 'formSubmit',
    'uses' => 'WebsiteBriefController@formSubmit'
]);

// **********   CONTACT ROUTES *********//

Route::get('contact', ['as' => 'contact', function () {
    return view('contact');
}]);

Route::post('contact', [
    'as' => 'contact',
    'uses' => 'HomeController@contact'
]);

// **********   STATIC PAGES ROUTES *********//

Route::get('learn-more-advanced', ['as' => 'learnmoreAdvanced', function () {
    $packages = Package::get();
    return view('learnmoreAdvanced', ['packages' => $packages]);
}]);

Route::get('learn-more-standard', ['as' => 'learnmoreStandard', function () {
    $packages = Package::get();
    return view('learnmoreStandard', ['packages' => $packages]);
}]);

Route::get('learn-more-basic', ['as' => 'learnmoreBasic', function () {
    $packages = Package::get();
    return view('learnmoreBasic', ['packages' => $packages]);
}]);

Route::get('logo-design-process', ['as' => 'how_it_work_logo', function () {
    return view('how_it_work_logo');
}]);

Route::get('website-design-process', ['as' => 'how_it_work_website', function () {
    return view('how_it_work_website');
}]);

Route::get('custom-logo-design', [
    'as' => 'logodesign',
    'uses' => 'HomeController@logodesign'
]);

Route::get('sample-logos', [
    'as' => 'seemorelogos',
    'uses' => 'HomeController@seemorelogos'
]);

Route::get('about-fullstop', ['as' => 'about', function () {
    return view('about');
}]);

Route::get('logo-design-pricing', [
    'as' => 'order',
    'uses' => 'CreativeBriefController@showPackages'
]);

Route::get('logo-web-faqs', ['as' => 'FAQs', function () {
    return view('FAQs');
}]);

Route::get('terms-conditions', ['as' => 'terms', function () {
    return view('terms');
}]);

Route::get('other-design-services', ['as' => 'services', function () {
    return view('services');
}]);


// LOGIN ROUTE
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// **********   PACKAGES ROUTES *********//


Route::get('package/{name}/{id}',[
    'as' => 'selectPackage',
    'uses' => 'PackageController@selectedPackage'
]);

Route::post('custom-package',[
    'as' => 'customPackage',
    'uses' => 'PackageController@customPackage'
]);

// ********** GUEST ROUTES *********//


Route::group(['middleware' => 'guest'], function () { 

    // ********** USER ROUTES *********//
    Route::get('auth/login',['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);

    Route::get('auth/password', 'Auth\PasswordController@getEmail');
    Route::post('auth/password', 'Auth\PasswordController@postEmail');

    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');

    Route::post('multistep-register', [
        'as' => 'register',
        'uses' => 'UserController@register'
    ]);

    Route::get('register', [
        'as' => 'register',
        'uses' => 'Auth\AuthController@getRegister',
    ]);

    // **********  GUEST-BRIEF and CALLING-REQUEST-BRIEF ROUTES *********//

    Route::get('creative-brief/{id?}',[
        'as' => 'guestCreative_brief',
        'uses' => 'CreativeBriefController@showGuestCreativeBrief'
    ]);

    Route::post('creative-brief/{id?}',[
        'as' => 'submitBrief',
        'uses' => 'CreativeBriefController@submitCreativeBrief'
    ]);

});


// ********** AUTHENTICATED USER ROUTES *********//

Route::group(['middleware' => 'auth'], function () { 

    // **********   DOWNLOAD ROUTES *********//

    Route::get('website-files/download/files/{id}', ['as' => 'downloadWebsiteFiles', 'uses' => 'WebsiteBriefController@downloadWebsiteFiles']);
    Route::get('website-brief/download/{id}', ['as' => 'downloadWebsiteBrief', 'uses' => 'WebsiteBriefController@downloadWebsiteBrief']);
    Route::get('brief/download/{id}', ['as' => 'download', 'uses' => 'CreativeBriefController@downloadBrief']);
    Route::get('brief/download/files/{id}', ['as' => 'downloadFiles', 'uses' => 'CreativeBriefController@downloadFiles']);
    Route::get('brief/download/invoice/{id}', ['as' => 'downloadInvoice', 'uses' => 'UserController@downloadInvoice']);

    // ********** CLIENT CENTER ROUTES *********//

    Route::group(['middleware' => 'client'], function () { 

        Route::get('client-center', [
            'as' => 'showOrders',
            'uses' => 'ClientCenterController@showOrders'
        ]);

        Route::get('client-center/receive/payment', [
            'as' => 'receivePayment',
            'uses' => 'ClientCenterController@paymentDetails'
        ]);

        Route::get('client-center/pay/{id}', [
            'as' => 'payToProceed',
            'uses' => 'ClientCenterController@payToProceed'
        ]);

        Route::get('client-center/update-profile', [
            'as' => 'showUpdate',
            'uses' => 'ClientCenterController@showUpdate'
        ]);

        Route::post('client-center/update-profile', [
            'as' => 'showUpdate',
            'uses' => 'ClientCenterController@actionUpdateProfile'
        ]);

        Route::get('client-center/addons', [
            'as' => 'showaddons',
            'uses' => 'ClientCenterController@showaddons'
        ]);
    });


    Route::get('logo-packages', [
        'as' => 'packageSelection',
        'uses' => 'CreativeBriefController@packageSelection'
    ]);

    Route::post('select-package', [
        'as' => 'packageSelected',
        'uses' => 'PackageController@packageSelected'
    ]);
//    Route::group(['middleware' => 'selectPackage'], function () {
    
        Route::get('creative_brief', [
            'as' => 'creative_brief',
            'uses' => 'CreativeBriefController@showCreativeBrief'
        ]);

        Route::get('save/order', [
            'as' => 'saveOrder',
            'uses' => 'CreativeBriefController@save_order'
        ]);

        Route::post('creative_brief', [
            'as' => 'creative_brief',
            'uses' => 'CreativeBriefController@submitCreativeBrief'
        ]);
//    });
    
    // ********** ADMIN ROUTES *********//

    Route::group(['middleware' => 'admin'], function () {

        Route::match(['get', 'post'], 'admin/manage-logos', [
            'as' => 'manageLogos',
            'uses' => 'AdminController@manageLogos'
        ]);

        Route::get('admin/upload-logo/{id?}', [
            'as' => 'uploadLogo',
            'uses' => 'AdminController@uploadLogo'
        ]);

        Route::post('admin/upload-logo/{id?}', [
            'as' => 'uploadLogoPost',
            'uses' => 'AdminController@uploadLogoPost'
        ]);

        Route::get('admin/delete-logo/{id}', [
            'as' => 'deleteLogo',
            'uses' => 'AdminController@deleteLogo'
        ]);

        Route::get('admin/create-category', ['as' => 'createCategory', function () {
            return view('admin.createCategory');
        }]);

        Route::post('admin/create-category', [
            'as' => 'createCategory',
            'uses' => 'AdminController@createCategoryPost'
        ]);

        Route::match(['get', 'post'], 'controlroom', [
            'as' => 'showAdminOrders',
            'uses' => 'AdminController@showAdminOrders'
        ]);

        Route::post('admin/order/status', [
            'as' => 'selectStatus',
            'uses' => 'AdminController@selectStatus'
        ]);

        Route::get('admin/order/delete/{id}', [
            'as' => 'deleteOrder',
            'uses' => 'AdminController@deleteOrder'
        ]);

        Route::match(['get', 'post'], 'admin/call', [
            'as' => 'showCallingRequests',
            'uses' => 'AdminController@showCallingRequests'
        ]);

        Route::get('admin/call/archive/{id}', [
            'as' => 'archiveCall',
            'uses' => 'AdminController@archiveCall'
        ]);

        Route::get('admin/call/unarchive/{id}', [
            'as' => 'unArchiveCall',
            'uses' => 'AdminController@unArchiveCall'
        ]);

        Route::get('admin/call/delete/{id}', [
            'as' => 'deleteCallRequest',
            'uses' => 'AdminController@deleteCallRequest'
        ]);

        Route::get('admin/custom/order', [
            'as' => 'showcustomOrder',
            'uses' => 'AdminController@showcustomOrder'
        ]);

        Route::post('admin/custom/order', [
            'as' => 'addCustomOrder',
            'uses' => 'AdminController@addCustomOrder'
        ]);

        Route::match(['get', 'post'], 'admin/users', [
            'as' => 'showUsers',
            'uses' => 'AdminController@showUsers'
        ]);

        Route::post('admin/user/change/password', [
            'as' => 'changeUserPass',
            'uses' => 'AdminController@changeUserPass'
        ]);

        Route::get('admin/user/delete/{id}', [
            'as' => 'deleteUser',
            'uses' => 'AdminController@deleteUser'
        ]);

        Route::post('admin/setting', [
            'as' => 'actionChangePassword',
            'uses' => 'AdminController@actionChangePassword'
        ]);

        Route::get('admin/setting', [
            'as' => 'showSettings',
            'uses' => 'AdminController@showSettings'
        ]);

        Route::get('admin/setting', ['as' => 'showSettings', function () {
            return view('admin.passwordSetting');
        }]);

        Route::match(['get', 'post'], 'admin/website', [
            'as' => 'showWebsiteBriefs',
            'uses' => 'AdminController@showWebsiteBriefs'
        ]);

        Route::get('admin/website/brief/delete/{id}', [
            'as' => 'deleteWebsiteBrief',
            'uses' => 'AdminController@deleteWebsiteBrief'
        ]);

        Route::match(['get', 'post'], 'admin/creative', [
            'as' => 'showBriefs',
            'uses' => 'AdminController@showBriefs'
        ]);

        Route::get('admin/brief/delete/{id}', [
            'as' => 'deleteBrief',
            'uses' => 'AdminController@deleteBrief'
        ]);

        Route::get('admin/creative/archive/{id}', [
            'as' => 'archiveBrief',
            'uses' => 'AdminController@archiveBrief'
        ]);

        Route::get('admin/creative/unarchive/{id}', [
            'as' => 'unArchiveBrief',
            'uses' => 'AdminController@unArchiveBrief'
        ]);

    });
});
 

