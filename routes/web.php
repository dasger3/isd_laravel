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
Route::get('/', function () {
    $pages=App\Article_expert::all();
    return view('sites.index', compact('pages'));
});

Route::get('isd/goals_of_the_institute', function () {
    return view('sites.goals');
});

Route::get('isd/direction_of_activity', function () {
    return view('sites.direction');
});

Route::get('isd/urbanism', function () {
    return view('sites.urbanism');
});
Route::get('isd/civil_society', function () {
    return view('sites.society');
});


Route::get('isd/list_expert/invited', function () {
    $pages=App\List_expert::incomplete();
    return view('sites.listinv', compact('pages'));
});
Route::get('isd/list_expert/permanent', function () {
    $pages=App\List_expert::complete();
    return view('sites.list', compact('pages'));
});

Route::get('isd/list_expert/permanent/{experts}', function ($id) {
    $experts=App\Expert::find($id);
    return View::make('sites.expert')->with('experts', $experts);
});
Route::get('isd/list_expert/invited/{experts}', function ($id) {
    $experts=App\Expert::find($id);
    return View::make('sites.expert')->with('experts', $experts);
});



Route::get('isd/{name}', function ($name) {
    $categories = App\Category::find($name);
    return View::make('sites.category')->with('categories', $categories);
});

Route::get('isd/library/{article}', function ($id) {
    $articles=App\Article_expert::find($id);
    return View::make('sites.article')->with('articles', $articles);
});
Route::get('library', function () {
    $pages=App\Article_expert::all();
    return view('sites.library', compact('pages'));
});
Route::get('search', function () {
    return view('sites.form');
});
Route::get('form', function () {
    return view('form');
});
