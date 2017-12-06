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

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function() {
    return View::make('contact');
});
Route::post('contact', 'EnquiryController@index');

Route::get('/foo', function () {
	$exitCode = Artisan::call('email:send', ['user'=>1, '--queue'=>'default']);
});

Route::get('profile', function () {
    // 只有认证过的用户可进入...
    return 'hello world';
})->middleware('auth.basic');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/axios', 'HomeController@axios');
Route::get('/home/orderShipped', 'HomeController@orderShipped');
Route::get('/home/sendEmail', 'HomeController@sendEmail');

Route::get('/redirect', function () {
    $query = http_build_query([
        'client_id' => 'client-id',
        'redirect_uri' => 'http://example.com/callback',
        'response_type' => 'code',
        'scope' => '',
    ]);

    return redirect('http://your-app.com/oauth/authorize?'.$query);
});

Route::get('/user/encrypt', 'UserController@encrypt');
Route::get('/user/decrypt', 'UserController@decrypt');
Route::get('/user/readNotifies', 'UserController@readNotifies');

Route::get('/mailable', function () {
    $user = App\User::find(1);

    return new App\Mail\OrderShipped($user);
});


Route::get('/order/ship/{id}', 'OrderController@ship');
Route::get('/order/notify/{id}', 'OrderController@notify');

Route::get('/test','QueuedController@Test');

// 预览邮件
Route::get('/mailable/{id}', function ($id) {
    $user = App\User::find($id);

    return new App\Mail\OrderShipped($user);
});

