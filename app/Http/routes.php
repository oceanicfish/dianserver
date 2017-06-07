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

Route::get('/', function () {
    return view('welcome');
});

/**
 * photo uploading and listing routes
 */
Route::get('/photos/all', 'PhotoController@all');
Route::get('/photos/{tags}', 'PhotoController@photoByTags');
Route::post('/photo/upload', 'PhotoController@upload');
Route::get('/photo/autothumb', 'PhotoController@autoThumb');



/**
 * photo download route
 */
Route::get('photo/{filename}', function ($filename)
{
    $path = public_path('uploads') . '/' . $filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('thumbnail/{filename}', function ($filename)
{
    $path = public_path('thumbnails') . '/' . $filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

/**
 * wechat apis
 */
Route::any('/wechat', 'WechatController@serve');

Route::get('/{filename}', function ($filename)
{
    $path = public_path('thumbnails') . '/' . $filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});