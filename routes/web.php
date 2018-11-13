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

Route::get('/', ['as'=>'home', 'uses'=>'IndexController@show']);

Route::get('/about', ['as'=>'about', 'uses'=>'AboutController@show']);


Route::post('/news/search', ['as'=>'search', 'uses'=>'NewsController@search']);

Route::get('/news/{category?}', ['as'=>'news', 'uses'=>'NewsController@show'])->where('category', '[A-Za-z]+');

Route::get('/news/{category}/{news_code}', ['as'=>'news.detail', 'uses'=>'NewsController@detail'])
        ->where(['category'=>'[A-Za-z-]+', 'news_code'=>'[A-Za-z-]+']);
Route::post('/comments', ['as'=>'comments', 'uses'=>'CommentController@sendComment']);

Route::get('/contacts', ['as'=>'contacts', 'uses'=>'ContactController@show']);
Route::post('/contacts', ['as'=>'send_contacts', 'uses'=>'ContactController@sendContact']);

Route::get('/portfolio', function (){
    return view('portfolio');
})->name('portfolio');



Route::group(['prefix'=>'admin', 'middleware'=>['web', 'auth', 'admin']], function() {

    Route::get('/', ['as'=>'admin.home', function(){
        return view('admin\admin_index');
    }]);

    Route::resource('/news', 'Admin\AdminNewsController');

    Route::resource('/comments', 'Admin\AdminCommentController');

    Route::resource('/mails', 'Admin\AdminMailController');

});

Auth::routes();

