<?php
use Illuminate\Support\Facades\App;
use App\Events\UserHasRegistered;
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
// pusher tutorial
Route::get('/notifications', 'NotificationController@getIndex');
Route::post('notifications/notify','NotificationController@postNotify');
// laracast broadcast tutorial
Route::get('/broadcast',function(){
	event(new UserHasRegistered('Dolwin Davis'));
	return 'done';
});
Route::get('/broadhome', function () {
    return view('broadcast');
});
 //flash notification using toaster.js
Route::get('/demo', 'NotificationController@notification');
