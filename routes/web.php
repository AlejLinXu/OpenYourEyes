<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group([
    'prefix' => '{locale}',
    'where' => [
        'locale' => '[a-zA-Z]{2}'
    ],
    'middleware' => 'setlocale'
], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/database', function () {
        return view('database');
    });

    Route::get('/database/list', 'SurveyController@showPublicList');

    // Route::get('/database/list/{id}','SurveyController@showSurveyDetail');
    Route::post('/database/detail/{id}', 'SurveyController@showSurveyDetail');

    Route::post('/database/list', 'SurveyController@showPublicListFiltered');

    Route::get('/partners', function () {
        return view('partners');
    });
    Route::get('/partners/detail', function () {
        return view('partners-description');
    });
            

    Route::get('/handbook', function () {
        return view('resources');
    });
    
    Route::get('/tips', function () {
        return view('tips');
    });

    Route::get('/news', function () {
        return view('news');
    });

    Route::get('/news/{id}', function ($language,$id) {
        //var_dump($id);
        return view('news-detail', ['language'=>$language,
            'id' => $id
        ]);
    });

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/survey', function () {
        return view('survey');
    });

    Route::post('/survey', 'SurveyController@store');
});

Auth::routes([
    'register' => false
]);

/*
 * Route::get('/home', 'HomeController@index')->name('home')
 * ->middleware('auth','is_admin');
 */

Route::get('/admin/surveys', 'AdminSurveyController@index')->middleware('auth', 'is_admin')->name('survey.list');

Route::post('/admin/surveys/new/', 'AdminSurveyController@store')->middleware('auth', 'is_admin')->name('survey.store');

Route::get('/admin/surveys/new/', 'AdminSurveyController@create')->middleware('auth', 'is_admin')->name('survey.create');

Route::get('/admin/surveys/edit/{id}', 'AdminSurveyController@edit')->middleware('auth', 'is_admin')->name('survey.edit');
Route::get('/admin/surveys/translate/{id}', 'AdminSurveyController@translate')->middleware('auth', 'is_admin')->name('survey.translate');

Route::post('/admin/surveys/edit/{id}', 'AdminSurveyController@update')->middleware('auth', 'is_admin')->name('survey.update');

Route::post('/admin/surveys/translate/{id}/{description}', 'AdminSurveyController@translationUpdate')->middleware('auth', 'is_admin')->name('survey.translationUpdate');

Route::get('/admin/surveys/image/{id}', 'AdminSurveyController@image')->middleware('auth', 'is_admin')->name('survey.image');

Route::post('/admin/surveys/image/{id}', 'AdminSurveyController@imageStore')->middleware('auth', 'is_admin')->name('survey.imageStore');

Route::post('/admin/surveys/image/{id}/delete', 'AdminSurveyController@imageDestroy')->middleware('auth', 'is_admin')->name('image.destroy');

Route::post('/admin/surveys/{id}', 'AdminSurveyController@destroy')->middleware('auth', 'is_admin')->name('survey.destroy');

/**
 * NEWS *
 */

Route::get('/admin/news', 'NoticiaController@index')->middleware('auth', 'is_admin')->name('news.list');

Route::get('/admin/news/create', 'NoticiaController@create')->middleware('auth', 'is_admin')->name('news.create');

Route::post('/admin/news/create', 'NoticiaController@store')->middleware('auth', 'is_admin')->name('news.store');

Route::get('/admin/news/edit/{noticia}', 'NoticiaController@edit')->middleware('auth', 'is_admin')->name('news.edit');

Route::post('/admin/news/edit/{noticia}', 'NoticiaController@update')->middleware('auth', 'is_admin')->name('news.update');

Route::get('/admin/news/image/{noticia}', 'NoticiaController@image')->middleware('auth', 'is_admin')->name('news.image');

Route::post('/admin/news/image/{noticia}', 'NoticiaController@imageStore')->middleware('auth', 'is_admin')->name('news.imageStore');

Route::post('/admin/news/image/{noticia}/delete', 'NoticiaController@imageDestroy')->middleware('auth', 'is_admin')->name('news.image.destroy');

Route::post('/admin/news/destroy/{noticia}', 'NoticiaController@destroy')->middleware('auth', 'is_admin')->name('news.destroy');

/**
 * MEDIA *
 */

Route::get('/admin/media', 'MediaController@index')->middleware('auth', 'is_admin')->name('media.list');

Route::post('/admin/media', 'MediaController@store')->middleware('auth', 'is_admin')->name('media.upload');

Route::post('/admin/media', 'MediaController@store')->middleware('auth', 'is_admin')->name('media.delete');

