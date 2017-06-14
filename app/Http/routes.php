<?php

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
    var_dump($postId);
    var_dump($commentId);
});*/

/*Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function ()    {
        // 使用 `Auth` 中间件

        echo 111111;
    });

    Route::get('user/profile', function () {
        // 使用 `Auth` 中间件

        echo 222222;
    });
});*/

/*Route::group(['prefix' => 'home'], function () {
    Route::get(['/','HomeController@index'], function ()    {
        // 匹配包含 "/admin/users" 的 URL
        echo 1111111;
    });
});*/

//前台
Route::get('/','Home\HomeController@shows');
//后台
Route::get('/admin','Admin\AdminController@shows');