<?php

use Illuminate\Support\Facades\Route;

Route::get('/clear', function() {   
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('logs:clear');
    return 'View cache has been cleared';
});

Route::get('/',function(){return redirect()->route('admin.login');});
Route::get('admin',function(){return redirect()->route('admin.login');});
Route::get('login',function(){return redirect()->route('admin.login');});

Route::prefix('backend')->group(function () {
    route::namespace('App\Http\Controllers\backend')->group(function(){
        Route::prefix('login')->controller(AdminController::class)->group(function(){
            Route::match(['get', 'post'],'', 'login')->name('admin.login');
        });
        Route::middleware('admin')->group(function (){

            Route::prefix('menus')->controller(MenuController::class)->group(function(){
                Route::get('','index')->name('menus.index');
                Route::get('create','createOrEdit')->name('menus.create');
                Route::get('edit/{id?}/{addmenu?}','createOrEdit')->name('menus.edit');
                Route::post('store','store')->name('menus.store'); 
                Route::put('update/{id}','update')->name('menus.update');
                Route::delete('delete/{id}','destroy')->name('menus.destroy');
            });
            Route::prefix('frontend-menus')->controller(FrontendMenuController::class)->group(function(){
                Route::get('','index')->name('frontend-menus.index');
                Route::get('create','createOrEdit')->name('frontend-menus.create');
                Route::get('edit/{id?}/{addmenu?}','createOrEdit')->name('frontend-menus.edit');
                Route::post('store','store')->name('frontend-menus.store'); 
                Route::put('update/{id}','update')->name('frontend-menus.update');
                Route::delete('delete/{id}','destroy')->name('frontend-menus.destroy');
            });
            
            // Route::prefix('backend-menus')->controller(MenuController::class)->group(function(){
            //     Route::get('','index')->name('backend-menus.index');
            //     Route::get('create','createOrEdit')->name('backend-menus.create');
            //     Route::get('edit/{id?}/{addmenu?}','createOrEdit')->name('backend-menus.edit');
            //     Route::post('store','store')->name('backend-menus.store'); 
            //     Route::put('update/{id}','update')->name('backend-menus.update');
            //     Route::delete('delete/{id}','destroy')->name('backend-menus.destroy');
            // });


            Route::prefix('logout')->controller(AdminController::class)->group(function(){
                Route::post('', 'logout')->name('admin.logout');
            });
            Route::prefix('dashboard')->controller(DashboardController::class)->group(function(){
                Route::get('','index')->name('dashboard.index');
            });
            Route::prefix('basic-infos')->controller(BasicInfoController::class)->group(function(){
                Route::get('','index')->name('basic-infos.index');
                Route::put('update/{id}','update')->name('basic-infos.update');
                Route::get('edit/{id?}','edit')->name('basic-infos.edit');
            });
            Route::prefix('admin')->group(function(){
                Route::prefix('roles')->controller(RoleController::class)->group(function(){
                    Route::get('','index')->name('roles.index');
                    Route::get('create','createOrEdit')->name('roles.create');
                    Route::get('edit/{id?}','createOrEdit')->name('roles.edit');
                    Route::post('store','store')->name('roles.store');
                    Route::put('update/{id}','update')->name('roles.update');
                    Route::delete('delete/{id}','destroy')->name('roles.destroy');
                    Route::get('all-roles','allRoles')->name('roles.all-roles');
                });
                Route::prefix('admins')->controller(AdminController::class)->group(function(){
                    Route::get('','index')->name('admins.index');
                    Route::get('create','createOrEdit')->name('admins.create');
                    Route::get('edit/{id?}','createOrEdit')->name('admins.edit');
                    Route::post('store','store')->name('admins.store');
                    Route::put('update/{id}','update')->name('admins.update');
                    Route::delete('delete/{id}','destroy')->name('admins.destroy');
                    Route::get('all-admins','allAdmins')->name('admins.all-admins');
                });
            });

            Route::prefix('password')->controller(AdminController::class)->group(function(){
                Route::match(['get', 'post'],'update/{id?}','updatePassword')->name('admin.password.update');
                Route::post('check-password','checkPassword')->name('admin.password.check');
            });
            Route::prefix('profile')->controller(AdminController::class)->group(function(){
                Route::match(['get', 'post'],'update-details/{id?}','updateDetails')->name('profile.update-details');;
            });
            // Route::prefix('enews')->controller(ENewsController::class)->group(function(){
            //     Route::get('','indexAdd')->name('enews.index');
            //     Route::post('store','store')->name('enews.store');
            //     Route::delete('delete/{id}','destroy')->name('enews.destroy');
            //     Route::post('pages','pages')->name('enews.pages');
            //     Route::post('load-news-page','loadNewsPage')->name('enews.load-news-page');
            //     Route::post('setlink','setlink')->name('enews.setlink');
            // });
        });
    });
});

route::namespace('App\Http\Controllers\frontend')->group(function(){

    Route::prefix('weathers')->controller(WeatherController::class)->group(function(){
        Route::get('get/wather/data','index')->name('weathers.index');
    });

    Route::controller(HomeController::class)->group(function(){
        Route::get('{date?}/{pagenum?}','index')->name('home.index');
        // Route::get('article/{news_id?}/{rand?}','details')->name('home.details');
        // Route::get('print/article/{news_id}','print')->name('details.print');
    });

});


require __DIR__.'/auth.php';
