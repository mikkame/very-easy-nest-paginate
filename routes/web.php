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
    $paginate_items = \App\Item::paginate(50);
    $boxes = $paginate_items->groupBy('box_id');

    return view('welcome', compact('boxes', 'paginate_items'));
});
