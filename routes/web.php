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

// Main website
Route::domain(config('app.domain'))->group(function () {

    Route::get('/', [
        'as' => 'home',
        'uses' => 'Main\HomeController@default'
    ]);

    Route::get('sitemap.xml', [
        'as' => 'sitemapindex.xmlindex',
        'uses' => 'SitemapController@xmlindex'
    ]);

    Route::get('sitemappages.xml', [
        'as' => 'sitemap.xml',
        'uses' => 'SitemapController@xml'
    ]);

    Route::get('projects', [
        'as' => 'projects.index',
        'uses' => 'Main\ProjectController@index'
    ]);

    // Pages (must be placed last)
    Route::get('{slug}', [
        'as' => 'page',
        'uses' => 'Main\PageController@show'
    ]);

});


Route::domain(config('app.domain_pro'))->group(function () {

    Route::get('/', [
        'as' => 'home-pro',
        'uses' => 'Main\HomeController@professional'
    ]);

    // Route::get('portfolio', [
    //     'as' => 'portfolio.index',
    //     'uses' => 'Main\PortfolioController@index'
    // ]);
    //
    // Route::get('portfolio/{slug}', [
    //     'as' => 'portfolio.show',
    //     'uses' => 'Main\PortfolioController@show'
    // ]);

});

// AiWork Project controller
Route::domain('aiwork.' . config('app.domain'))->name('aiwork.')->group(function () {
    Route::get('/', ['as' => 'home', 'uses' => 'AiWork\AiWorkController@index']);
    Route::get('/{id}', ['as' => 'show', 'uses' => 'AiWork\AiWorkController@show']);
});

// Projects are on sub-domains
Route::domain('{project}.' . config('app.domain'))->name('project.')->group(function () {

    Route::get('/', ['as' => 'home', 'uses' => 'Project\ProjectController@home']);

    Route::get('sitemap.xml', ['as' => 'sitemap.xml', 'uses' => 'SitemapController@xmlproject']);

    Route::get(config('images.route') . '/{path}', 'ImageController@project')->where('path', '.*');

    Route::get('assets/{path}', 'Project\ProjectController@asset')->where('path', '.*');

    // Project Pages (must be placed last)
    Route::get('/{slug}', ['as' => 'page', 'uses' => 'Project\ProjectController@page']);

});



Route::get('assets/{path}', 'Main\AssetController@asset')->where('path', '.*');

// Images (works on any domain)
Route::get(config('images.route') . '/{path}', 'ImageController@show')->where('path', '.*');
