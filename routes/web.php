<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect( route('admin.home') );
});

Route::post('pdf', 'Util\PdfController@getPdf');

Route::group([
			'namespace'  => 'Util',
			'middleware' => ['set.local','Core','admin.shares'], // ,'admin.shares' because logo take path from settings in it ??
			'prefix'     => '{locale?}/password',
			], function ($router) {
				Route::get('reset_mail', 'PasswordController@showEmailRequest')->name('password.email.request');
				Route::post('send_email', 'PasswordController@sendEmailReset')->name('password.email.send')->middleware('throttle:4,1');
				Route::get('verify_email/{token}', 'PasswordController@verifyEmail')->name('password.email.verify');
				Route::post('change_password', 'PasswordController@changePasswordEmail')->name('password.email.change_password')->middleware('throttle:4,1');
			}
);


// Admin Panel Area
Route::group([
	'namespace'  => 'Admin',
	'middleware' => ['set.local','admin.shares'],  // 'Core' error with download files function,
	'prefix'     => 'admin/{locale?}',
	], function ($router) {

		// Auth
		Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
		Route::post('login', 'Auth\LoginController@login')->name('admin.login');
		Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');

		// admin.verifications
		Route::group([
				'prefix' => 'verifications',
				], function () {
						Route::get('/', 'Auth\VerificationController@show')->name('admin.verifications.show');
						Route::post('/', 'Auth\VerificationController@check')->name('admin.verifications.check');
						Route::post('resend_code', 'Auth\VerificationController@show')->name('admin.verifications.resend_code'); // ->middleware('throttle:4,1');
		});

		// admin.pages
		Route::group([
				'middleware' => ['admin','prevent.back.history'],
			], function ($router) {

	    	// admin.home
	      Route::get('/', 'IndexController@index')->name('admin.home');
				// Route::get('bad_words', 'BadWordsController@index')->name('admin.badwords.index');
        // Route::post('bad_words', 'BadWordsController@index')->name('admin.badwords.index');
				// Route::put('bad_words/{id}', 'BadWordsController@update')->name('admin.badwords.update');

        // admin.tasks
				Route::group([
		        'prefix' => 'tasks',
				    ], function () {
				        Route::get('/', 'TaskController@index')->name('admin.tasks.index');
								Route::post('/', 'TaskController@index')->name('admin.tasks.index');
                Route::get('/create', 'TaskController@create')->name('admin.tasks.create');
								Route::post('/store', 'TaskController@store')->name('admin.tasks.store');
								Route::get('{id}/edit', 'TaskController@edit')->name('admin.tasks.edit')->where('id', '[0-9]+');
								Route::PUT('{id}', 'TaskController@update')->name('admin.tasks.update')->where('id', '[0-9]+');
								Route::PUT('{id}/status', 'TaskController@setStatus')->name('admin.tasks.status')->where('id', '[0-9]+');
                Route::DELETE('delete', 'TaskController@destroy')->name('admin.tasks.destroy');
		    });

				// files
				Route::group([
		        'prefix' => 'files',
				    ], function () {
								Route::get('download/{file}', 'FileController@download')->name('admin.files.download')->where('file', '.*');
								Route::post('delete/{id}', 'FileController@delete')->name('admin.files.delete')->where('id', '[0-9]+');
		    });

        // admin.roles
				Route::group([
						'prefix' => 'roles',
						], function () {
								Route::get('/', 'RoleController@index')->name('admin.roles.index');
								Route::get('/create', 'RoleController@create')->name('admin.roles.create');
								Route::post('/store', 'RoleController@store')->name('admin.roles.store');
								Route::get('{id}/edit', 'RoleController@edit')->name('admin.roles.edit')->where('id', '[0-9]+');
								Route::PUT('{id}', 'RoleController@update')->name('admin.roles.update')->where('id', '[0-9]+');
								Route::post('set_current_role', 'RoleController@setCurrentRole')->name('admin.roles.set_current_role')->where('id', '[0-9]+');
				});

        Route::group([
						'prefix' => 'admins',
						], function () {
            Route::get('/', 'AdminUserController@index')->name('admin.admins.index');
            Route::get('create', 'AdminUserController@create')->name('admin.admins.create');
            Route::post('store', 'AdminUserController@store')->name('admin.admins.store');
            Route::get('{id}/edit', 'AdminUserController@edit')->name('admin.admins.edit')->where('id', '[0-9]+');
            Route::PUT('{id}', 'AdminUserController@update')->name('admin.admins.update')->where('id', '[0-9]+');
            Route::DELETE('destroy', 'AdminUserController@destroy')->name('admin.admins.destroy');
            Route::put('{id}/status', 'AdminUserController@setStatus')->name('admin.admins.status');
        });

				// admin.settings
				Route::group([
		        'prefix' => 'settings',
				    ], function () {
				        Route::get('/', 'SettingController@index')->name('admin.settings.index');
								Route::post('/', 'SettingController@index')->name('admin.settings.index');
								Route::PUT('update', 'SettingController@update')->name('admin.settings.update');
								Route::post('/add_msg_type', 'SettingController@addMsgType')->name('admin.settings.add_msg_type');
								Route::post('/update_msg_type/{id}', 'SettingController@updateMsgType')->name('admin.settings.update_msg_type');
		    });

				// admin.languages
				Route::group([
		        'prefix' => 'languages',
		        ], function () {
		            Route::get('/', 'LanguageController@index')->name('admin.languages.index'); // URL: admin/languages/index
		    });

		});
});
// End Admin Routes




// utils
Route::get('clear-cache', function() { $exitCode = Artisan::call('cache:clear');return 'Cash Cleared'; });
Route::get('optimize', function() { $exitCode = Artisan::call('optimize');return 'Cash optimize'; });
Route::get('config-cache', function() { $exitCode = Artisan::call('config:cache');return 'config:cache'; });
Route::get('route-cache', function() { $exitCode = Artisan::call('route:cache');return 'route:cache'; });  // Give error
Route::get('route-clear', function() { $exitCode = Artisan::call('route:clear');return 'route:clear'; });
Route::get('view-clear', function() { $exitCode = Artisan::call('view:clear');return 'view:clear'; });

Route::get('/storage-link', function() {
		Artisan::call('storage:link');
		return "storage:link";
})->name('storage-link');

// End Web Routes
