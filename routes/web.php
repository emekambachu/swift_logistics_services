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

Route::get('/', static function () {
    return view('home');
});

Route::get('about', static function () {
    return view('about');
});

Route::get('services', static function () {
    return view('services');
});

Route::get('contact', static function () {
    return view('contact');
});

Route::get('signup', static function () {
    return view('signup');
});

Route::get('track-shipment', static function () {
    return view('track-shipment');
});

Route::get('shipment-status', static function () {
    return view('shipment-status');
});

Route::get('control-panel', static function (){
    return view('controlpanel.index');
});

Route::resource('control-panel/users', 'UserController');
Route::resource('control-panel/parcels', 'ParcelController');
Route::resource('control-panel/shipments', 'ShipmentController');
Route::resource('control-panel/shipment-history', 'ShipmentHistoryController');

// Shipment
Route::get('/insert-checkpoint/{id}', ['uses' => 'ShipmentController@insertCheckpoint']);
Route::post('/activate-shipment/{id}', ['uses' => 'ShipmentController@activateShipment']);
Route::post('track-shipment', ['uses' => 'ShipmentController@trackShipment']);
Route::get('/shipment-history/{tracking_id}',
    ['as'=>'shipment-history', 'uses'=>'ShipmentController@shipmentHistory']
);

// Shipment History
Route::post('/submit-checkpoint/{id}', ['uses' => 'ShipmentHistoryController@submitCheckpoint']);
Route::get('/shipment-checkpoints/{id}', ['uses' => 'ShipmentHistoryController@shipmentCheckpoints']);
