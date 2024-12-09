<?php

use Illuminate\Support\Facades\Route;

Route::get('/clear', function() {   
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('logs:clear');
    return 'View cache has been cleared';
});

// Route::get('/',function(){return redirect()->route('home.index');});
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

            Route::prefix('sliders')->controller(SliderController::class)->group(function(){
                Route::get('','index')->name('sliders.index');
                Route::get('create','createOrEdit')->name('sliders.create');
                Route::get('edit/{id?}','createOrEdit')->name('sliders.edit');
                Route::post('store','store')->name('sliders.store');
                Route::put('update/{id}','update')->name('sliders.update');
                Route::delete('delete/{id}','destroy')->name('sliders.destroy');
                Route::get('sliders','sliders')->name('sliders.sliders');
            });
            Route::prefix('galleries')->controller(GalleryController::class)->group(function(){
                Route::get('','index')->name('galleries.index');
                Route::get('create','createOrEdit')->name('galleries.create');
                Route::get('edit/{id?}','createOrEdit')->name('galleries.edit');
                Route::post('store','store')->name('galleries.store');
                Route::put('update/{id}','update')->name('galleries.update');
                Route::delete('delete/{id}','destroy')->name('galleries.destroy');
                Route::get('galleries','galleries')->name('galleries.galleries');
            });
            
            Route::prefix('blog-categories')->controller(BlogCategoryController::class)->group(function(){
                Route::get('','index')->name('blog-categories.index');
                Route::get('create','createOrEdit')->name('blog-categories.create');
                Route::get('edit/{id?}','createOrEdit')->name('blog-categories.edit');
                Route::post('store','store')->name('blog-categories.store');
                Route::put('update/{id}','update')->name('blog-categories.update');
                Route::delete('delete/{id}','destroy')->name('blog-categories.destroy');
                Route::get('blog-categories','blogCategories')->name('blog-categories.blogCategories');
            });
            
            Route::prefix('blogs')->controller(BlogController::class)->group(function(){
                Route::get('','index')->name('blogs.index');
                Route::get('create','createOrEdit')->name('blogs.create');
                Route::get('edit/{id?}','createOrEdit')->name('blogs.edit');
                Route::post('store','store')->name('blogs.store');
                Route::put('update/{id}','update')->name('blogs.update');
                Route::delete('delete/{id}','destroy')->name('blogs.destroy');
                Route::get('blogs','blogs')->name('blogs.blogs');
            });

            Route::prefix('service-types')->controller(ServiceTypeController::class)->group(function(){
                Route::get('','index')->name('service-types.index');
                Route::get('create','createOrEdit')->name('service-types.create');
                Route::get('edit/{id?}','createOrEdit')->name('service-types.edit');
                Route::post('store','store')->name('service-types.store');
                Route::put('update/{id}','update')->name('service-types.update');
                Route::delete('delete/{id}','destroy')->name('service-types.destroy');
                Route::get('service-types','serviceTypes')->name('service-types.serviceTypes');
            });

            Route::prefix('services')->controller(ServiceController::class)->group(function(){
                Route::get('','index')->name('services.index');
                Route::get('create','createOrEdit')->name('services.create');
                Route::get('edit/{id?}','createOrEdit')->name('services.edit');
                Route::post('store','store')->name('services.store');
                Route::put('update/{id}','update')->name('services.update');
                Route::delete('delete/{id}','destroy')->name('services.destroy');
                Route::get('services','services')->name('services.services');
            });

            Route::prefix('companies')->controller(CompanyController::class)->group(function(){
                Route::get('','index')->name('companies.index');
                Route::get('create','createOrEdit')->name('companies.create');
                Route::get('edit/{id?}','createOrEdit')->name('companies.edit');
                Route::post('store','store')->name('companies.store');
                Route::put('update/{id}','update')->name('companies.update');
                Route::delete('delete/{id}','destroy')->name('companies.destroy');
                Route::get('companies','companies')->name('companies.companies');
            });
            
            Route::prefix('products')->controller(ProductController::class)->group(function(){
                Route::get('','index')->name('products.index');
                Route::get('create','createOrEdit')->name('products.create');
                Route::get('edit/{id?}','createOrEdit')->name('products.edit');
                Route::post('store','store')->name('products.store');
                Route::put('update/{id}','update')->name('products.update');
                Route::delete('delete/{id}','destroy')->name('products.destroy');
                Route::get('products','products')->name('products.products');
            });

            Route::prefix('messages')->controller(MessageController::class)->group(function(){
                Route::get('','index')->name('messages.index');
                Route::post('store','store')->name('messages.store');
                Route::put('update/{id}','update')->name('messages.update');
                Route::delete('delete/{id}','destroy')->name('messages.destroy');
                Route::get('messages','message')->name('messages.message');
            });
            
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
        });
    });
});

route::namespace('App\Http\Controllers\frontend')->group(function(){
    Route::prefix('search')->controller(SearchFEController::class)->group(function(){
        Route::get('/{q?}','index')->name('search.index');
    });
    Route::controller(HomeController::class)->group(function(){
        Route::get('/{slug?}/{id?}','index')->name('home.index');
    });
    Route::prefix('messages')->controller(MessageFEController::class)->group(function(){
        Route::post('store','store')->name('messages.store');
    });

});


require __DIR__.'/auth.php';
