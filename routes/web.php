<?php
use Illuminate\Support\Facades\Route;
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
Route::get('/capricorn', function () {
    return view('capricorn');
});
Route::get('/', 'DscController@index');
Route::post('dsc/district', 'DscController@district_ajax'); 
Route::post('dsc-form/store', 'DscController@store')->name('dsc-form/store');
Route::get('dsc-form/confirmation/{token}', 'DscController@show');
Route::get('dsc-form/edit/{token}', 'DscController@edit');
Route::post('dsc-form/update', 'DscController@update');
Route::post('payment', 'RazorpayController@payment')->name('payment');
Route::get('dsc-form/sucessPayment','RazorpayController@sucesssPayment')->name('dsc-form.sucesssPayment');
Route::get('track-application','DscController@trackApplication')->name('dsc.track-application');
Route::get('refund-policy','DscController@refundPolicy');
Route::get('privacy-policy','DscController@privacyPolicy');
Route::get('terms-conditions','DscController@termsConditions');
//ADMIN 
Route::namespace('Auth')->group(function () { 
	Route::get('/login','LoginController@show_login_form')->name('login');
  Route::post('/login','LoginController@process_login')->name('login'); 
  Route::post('/logout','LoginController@logout')->name('logout'); 
});
 Route::get('/dashboard','AdminController@index')->name('dashboard'); 
	Route::get('admin/view-user/{id}', 'AdminController@show')->name('admin.view-user');
	Route::post('admin/edit-status', 'AdminController@viewUpdate')->name('admin.edit-view-user');
	Route::get('admin/view-edit/{id}', 'AdminController@edit')->name('admin.edit-user');
  Route::post('admin/user-update', 'AdminController@update');
  Route::get('admin/user-delete/{id}', 'AdminController@deleteUser')->name('admin.delete-user');
	Route::get('admin/send-email/{id}', 'AdminController@sendEmail')->name('admin.send-mail');
Route::get('contact-us', function () {
    return view('contact-us');
    });
Route::get('about-us', function () {
    return view('about-us');
    });
 Route::get('refund-policy', function () {
     return view('refund-policy');
   });
 Route::get('terms-conditions', function () {
     return view('terms-conditions');
   });
 Route::get('faqs', function () {
     return view('faqs');
   });
 Route::get('privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('grievance-policy', function () {
    return view('grievance-policy');
});
Route::get('disclosure-policy', function () {
    return view('disclosure-policy');
});
Route::get('buy-token', function () {
    return view('buy-token');
});
Route::get('renew-certificate', function () {
    return view('renew-certificate');
});
Route::get('blogs', function () {
    return view('blogs');
});
Route::get('pricing', function () {
    return view('pricing');
});