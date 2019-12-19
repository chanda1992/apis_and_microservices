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

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('/', 'welcome');


Route::get('customers', 'CustomersController@listCustomers');
Route::post('customers', 'CustomersController@store');

