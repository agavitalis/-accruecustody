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

Route::group([],function(){
    
    Route::match(['GET','POST'],'/','HomeController@index')->name('index_page');
    Route::match(['GET','POST'],'/about','HomeController@about')->name('about_page');
    Route::match(['GET','POST'],'/services','HomeController@services')->name('services_page');
    Route::match(['GET','POST'],'/media','HomeController@media')->name('media_page');
    Route::match(['GET','POST'],'/contact','HomeController@contact')->name('contact_page');
    Route::match(['GET','POST'],'/accident','HomeController@accident')->name('accident_page');
    Route::match(['GET','POST'],'/author','HomeController@author')->name('author_page');
    Route::match(['GET','POST'],'/bail','HomeController@bail')->name('bail_page');
    Route::match(['GET','POST'],'/clients','HomeController@clients')->name('clients_page');
    Route::match(['GET','POST'],'/team','HomeController@team')->name('team_page');
    Route::match(['GET','POST'],'/loan','HomeController@loan')->name('loan_page');
    Route::match(['GET','POST'],'/history','HomeController@history')->name('history_page');
    Route::match(['GET','POST'],'/expertise','HomeController@expertise')->name('expertise_page');
    Route::match(['GET','POST'],'/facts','HomeController@facts')->name('facts_page');
    Route::match(['GET','POST'],'/faq','HomeController@faq')->name('faq_page');
    Route::match(['GET','POST'],'/fraud','HomeController@fraud')->name('fraud_page');
    
});


Auth::routes();

