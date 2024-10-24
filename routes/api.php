<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\FriendsController;





/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('test-sms', [RegisterController::class, 'testSms']);

Route::post('register_user', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::get('department', [RegisterController::class, 'department']);
Route::post('user_check', [RegisterController::class, 'user_check']);
Route::get('get_slider', [PostController::class, 'get_slider']);
Route::post('get_fcm', [PostController::class, 'get_fcm']);
Route::post('forgotPassword', [RegisterController::class, 'forgotPassword']);
Route::post('resetpassword', [RegisterController::class, 'resetpassword']);
Route::post('verifyOTP', [RegisterController::class, 'verifyOTP']);
Route::post('resendOTP', [RegisterController::class, 'resendOTP']);
Route::post('industries_get', [RegisterController::class, 'industries_get']);
Route::post('requirments', [RegisterController::class, 'requirments']);
Route::post('getUserSkills', [RegisterController::class, 'getUserSkills']);

Route::post('sendemail_verrify', [RegisterController::class, 'sendemail_verrify']);
Route::post('checkVerificationStatus', [RegisterController::class, 'checkVerificationStatus']);

Route::get('getStateList', [RegisterController::class, 'getStateList']);
Route::post('getCityList/{id}', [RegisterController::class, 'getCityList']);
 Route::get('get_education', [RegisterController::class, 'get_education']);
Route::post('getCitysearch', [RegisterController::class, 'getCitysearch']);

 Route::get('geteducation/list', [RegisterController::class, 'getEducationList']);



Route::group(['middleware' => 'jwt.verify', 'prefix' => 'auth'], function ($router) {

    //auth
    Route::post('profile_update', [RegisterController::class, 'profile_update']);
    Route::post('otp_verrify', [RegisterController::class, 'otp_verrify']);
    Route::post('profile', [RegisterController::class, 'profile']);
    Route::get('check_user', [RegisterController::class, 'check_user']);
     Route::post('delete_user', [RegisterController::class, 'delete_user']);
    Route::get('change_password_new', [RegisterController::class, 'change_password_new']);
    Route::post('fcm-token', [RegisterController::class, 'updateToken']);
    Route::post('send-notification', [RegisterController::class, 'sendNotificationrToUser']);
    Route::post('store_position', [RegisterController::class, 'store_position']);
    Route::post('store_skill', [RegisterController::class, 'store_skill']);



    //create_post
    Route::get('get_post', [PostController::class, 'get_post']);
    Route::post('filter_post', [PostController::class, 'filter_post']);
    Route::get('get_my_post', [PostController::class, 'get_my_post']);
    Route::post('create_post', [PostController::class, 'create_post']);
    Route::post('update_post', [PostController::class, 'update_post']);
    Route::post('post_search', [PostController::class, 'post_search']);
    Route::post('delete_post', [PostController::class, 'delete_post']);
    Route::post('post_like', [PostController::class, 'post_like']);
    Route::post('post_like_list', [PostController::class, 'post_like_list']);
    Route::post('post_comment', [PostController::class, 'post_comment']);
    Route::post('post_comments_list', [PostController::class, 'post_comments_list']);
    Route::post('post_report', [PostController::class, 'post_report']);



    //friends
    Route::post('add_request', [FriendsController::class, 'add_request']);
    Route::post('cancel_request', [FriendsController::class, 'cancel_request']);
    Route::post('respond_request', [FriendsController::class, 'respond_request']);
    Route::get('friends_list', [FriendsController::class, 'friends_list']);
    Route::get('friends_list_recive', [FriendsController::class, 'friends_list_recive']);
    Route::post('friends_search', [FriendsController::class, 'friends_search']);
    
      
   

    //notifications
    Route::get('get_notifications', [PostController::class, 'get_notifications']);
    Route::post('mark_notification_as_read', [PostController::class, 'mark_notification_as_read']);
});
