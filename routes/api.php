<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([
	'namespace'  => 'Api',
	'middleware' => ['set.local.api','PreventBadWords'],
	'prefix'     => 'v1',
	], function ($router) {

			// Route::get('live_search/{crit}', 'SearchController@liveSearch');
			Route::post('search', 'SearchController@search');
			Route::get('shared', 'VarController@shared');

      Route::post('/register', 'AuthController@register');
      Route::post('/login', 'AuthController@login');
			Route::post('/logout', 'AuthController@logout');
			Route::post('/forgot_password', 'AuthController@forgotPassworod');
			Route::post('/change_password', 'AuthController@changePassworod');
			Route::post('/check_verification_code_password','VerificationController@checkVerificationCodePassword');
			Route::post('/resend_code_password', 'AuthController@resendCode')->middleware('throttle:4,1');

			Route::post('create_verification_code','VerificationController@createVerificationCode');
			Route::post('check_verification_code','VerificationController@checkVerificationCode');
			// Route::post('resend_verification_code', 'VerificationController@resendCode')->middleware('throttle:4,1');
			// Route::post('create_random_password','UserController@createRandomPassword');


			Route::group([
				'middleware' => ['auth.api'],
				], function ($router) {

					// save chat if not exists and get chat
					Route::get('chats/{id}', 'ChatController@getUserChats')->name('admin.chat.user')->where(['id' => '[0-9,]+']);

					// all items routes
					Route::group([
						'prefix'     => 'items',
						], function ($router) {
							Route::post('/store', 'ItemController@store');
							Route::get('/{id}', 'ItemController@show')->where('id', '[0-9]+');
							Route::put('{id}', 'ItemController@update')->where('id', '[0-9]+');
							Route::get('/type/{ids}', 'ItemController@indexType')->where(['ids' => '[0-9,]+']);
							Route::post('/comment', 'ItemController@storeComment');
							Route::post('/rate', 'ItemController@storeRate');
							Route::post('/like', 'ItemController@storeLike');
							Route::get('/{id}/comments', 'ItemController@getRootComments')->where('id', '[0-9]+');
							Route::delete('delete', 'ItemController@delete');
					});


					Route::group([
						'prefix'     => 'users',
						], function ($router) {
							Route::get('{id}/profile', 'UserController@edit')->where('id', '[0-9]+');
							Route::get('{id}/socials', 'UserController@getSocials')->where('id', '[0-9]+');
							Route::get('{id}/item_type/{type_id}', 'UserController@getItemsOfUserByType')->where(['id' => '[0-9]+' , 'type_id' => '[0-9]+' ]);
							Route::get('{id}/commented_items', 'UserController@getItemsCommentedByUser')->where('id', '[0-9]+');
							Route::get('{id}/rated_items', 'UserController@getItemsRatedByUser')->where('id', '[0-9]+');
							Route::post('follow', 'UserController@storeUserFollow');
							Route::post('{id}/followers', 'UserController@getUserFollowers');
							Route::post('{id}/followings', 'UserController@getUserFollowings');
							Route::put('{id}', 'UserController@update')->where('id', '[0-9]+');
							Route::put('{id}/fcm', 'UserController@updateFcm')->where('id', '[0-9]+'); // all
							Route::get('{id}/notifications','NotificationController@getNotificationByUserId')->where('id', '[0-9]+');
							Route::post('get_user_status','AuthController@getUserStatus');
					});

					Route::group([
							'prefix' => 'comments',
							], function () {
								Route::get('/{id}/childs', 'CommentController@getCommentChilds')->name('comments.childs')->where('id', '[0-9]+');
					});

					Route::group([
						'prefix'     => 'files',
						], function ($router) {
							Route::post('/delete', 'FileController@delete');
					});

					// send notification with shat
					Route::post('shat_notifications','NotificationController@sendChatNotification');

					Route::get('countries','CountryController@index');
					Route::get('item_types','ItemTypeController@index');
					Route::get('item_periods','ItemPeriodController@index');
					Route::get('social_sites','SocialSiteController@index');
					Route::get('settings','SettingController@index');
					Route::get('settings/{property}','SettingController@show'); // secure property ???????
					Route::get('bank_accounts','BankAccountController@index');
					Route::get('commissions/{item_type_id}','CommissionController@indexType');
					Route::post('commissions','UserCommisionController@store');
					Route::get('contactus_types','ContactUsController@getContactUsTypes');  // all
					Route::post('contactus','ContactUsController@store');  // all


					Route::PUT('notifications/{id}/readed', 'NotificationController@updateReadAt')->where('id', '[0-9]+');

					Route::get('settings_contacts','SettingController@contacts');

					Route::get('sliders','SliderController@index');

				});



      Route::middleware('auth:api')->group(function () {
				Route::DELETE('items/{id}/delete_file/{file_id}', 'ItemController@destroyFile')->name('front.items.destroy_file')->where(['id', '[0-9]+','file_id', '[0-9]+']);
      });

  });
