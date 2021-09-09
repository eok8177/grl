<?php

use Illuminate\Support\Facades\Route;


Auth::routes();


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
//Image resize & crop on view:  http://image.intervention.io/
Route::get('/resize/{w}/{h}',[App\Http\Controllers\ImageController::class, 'index'])->name('resize');

// Admin
Route::group([
    'as' => 'admin.',
    'middleware' => 'roles',
    'roles' =>['admin'],
    'prefix' => 'admin',
    'namespace' => 'Admin'
  ], function() {

    App::setLocale('ua');

    Route::put('ajax/status', ['as' => 'ajax.status', 'uses' => 'AjaxController@status']);
    Route::put('ajax/reorder', ['as' => 'ajax.reorder', 'uses' => 'AjaxController@reorder']);

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('user', UserController::class);
    Route::resource('page-category', PageCategoryController::class);
    Route::resource('page', PageController::class);
    Route::resource('doctor', DoctorController::class);
    Route::resource('slide', SlideController::class);
});


Route::group([
    'as' => 'front.',
  ], function() {

    Route::get('/', 'FrontController@home')->name('home');
    Route::get('/about', 'FrontController@about')->name('about');
    Route::view('/contact', 'front.contact');

    Route::get('/pages/{slug}', 'FrontController@pages')->name('pages');
    Route::get('/page/{slug}', 'FrontController@page')->name('page');

    Route::view('/ginekologichne', 'front.vidd.ginekolog');
    Route::view('/dutyache', 'front.vidd.detskoe');
    Route::view('/endo', 'front.vidd.endo');

    Route::post('/email', 'FrontController@email')->name('email');
});