<?php

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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::post('/login', 'Auth\LoginController@login')->middleware('AdminLogin');

Route::prefix('admin')->middleware('AdminPanel')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');

    Route::prefix('slide')->group(function () {
        Route::get('add', 'SliderController@add')->name('addSlide');
        Route::post('create', 'SliderController@create')->name('createSlide');
        Route::get('edit/{id}', 'SliderController@index')->name('editSlide');
        Route::get('delete/{id}', 'SliderController@delete')->name('deleteSlide');
        Route::post('update/{id}', 'SliderController@update')->name('updateSlide');
    });

    Route::prefix('achievements')->group(function() {
        Route::get('/', 'AchievementController@index')->name('achievements');

        Route::get('add', 'AchievementController@add')->name('addAchievement');
        Route::post('create', 'AchievementController@create')->name('createAchievement');

        Route::get('edit/{id}', 'AchievementController@edit')->name('editAchievement');
        Route::post('update/{id}', 'AchievementController@update')->name('updateAchievement');

        Route::get('delete/{id}', 'AchievementController@delete')->name('deleteAchievement');
    });

    Route::prefix('mentors')->group(function() {
        Route::get('/', 'MentorController@index')->name('mentors');

        Route::get('add', 'MentorController@add')->name('addMentor');
        Route::post('create', 'MentorController@create')->name('createMentor');

        Route::get('edit/{id}', 'MentorController@edit')->name('editMentor');
        Route::post('update/{id}', 'MentorController@update')->name('updateMentor');

        Route::get('delete/{id}', 'MentorController@delete')->name('deleteMentor');
    });

    Route::prefix('news')->group(function() {
        Route::get('/', 'NewsController@index')->name('news');

        Route::get('add', 'NewsController@add')->name('addNews');
        Route::post('create', 'NewsController@create')->name('createNews');

        Route::get('edit/{id}', 'NewsController@edit')->name('editNews');
        Route::post('update/{id}', 'NewsController@update')->name('updateNews');

        Route::get('delete/{id}', 'NewsController@delete')->name('deleteNews');
    });

    Route::prefix('reviews')->group(function() {
       Route::get('/', 'ReviewController@index')->name('reviews');

       Route::get('block/{id}', 'ReviewController@block')->name('blockReview');
       Route::get('active/{id}', 'ReviewController@active')->name('activeReview');

       Route::get('delete/{id}', 'ReviewController@delete')->name('deleteReview');
    });

    Route::prefix('albums')->group(function() {
        Route::get('/', 'AlbumController@index')->name('albums');

        Route::get('add', 'AlbumController@add')->name('addAlbum');
        Route::post('create', 'AlbumController@create')->name('createAlbum');

        Route::get('edit/{id}', 'AlbumController@edit')->name('editAlbum');
        Route::post('update/{id}', 'AlbumController@update')->name('updateAlbum');

        Route::get('delete/{id}', 'AlbumController@delete')->name('deleteAlbum');
    });

    Route::prefix('photos')->group(function() {
       Route::get('{id}', 'PhotoController@index')->name('photosInAlbum');

       Route::post('update/{id}', 'PhotoController@update')->name('updatePhotosInAlbum');

       Route::get('delete/{id}', 'PhotoController@delete')->name('deletePhotoInAlbum');
    });

});

Route::post('callback', 'HomeController@callback')->name('callback');

Route::get('album/{id}', 'HomeController@getAlbum')->name('album');

Route::get('/logout', function () {
    Request::session()->forget('admin');

    return redirect()->route('home');
});
