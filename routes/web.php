<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PendingAccs;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NewsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* ROUTE WEB (INDEX) */

Route::get('web_watertreatment/index', function () {
    return view('web_watertreatment/index');
});
Route::get('web_watertreatment/about', function () {
    return view('web_watertreatment.about');
});
Route::get('web_watertreatment/service', function () {
    return view('web_watertreatment.service');
});
Route::get('web_watertreatment/tool', function () {
    return view('web_watertreatment.tool');
});
Route::get('web_watertreatment/solution-category', [WebController::class, 'solutioncategory']);
Route::get('web_watertreatment/solution-detail/solution-id={id}', [WebController::class, 'solution']);
Route::get('web_watertreatment/solution/solution-tag={solution_tag}', [WebController::class, 'solutioncategbytag']);

Route::get('web_watertreatment/news', [WebController::class, 'newscategory']);
Route::get('web_watertreatment/contact', function () {
    return view('web_watertreatment.contact');
});
Route::get('web_watertreatment/contact', function () {
    return view('web_watertreatment.contact');
});

// Route::prefix('web_watertreatment')->group(function () {
//     Route::get('/index', function() { return view('web_watertreatment.index'); });
//     Route::get('/product', function() { return view('web_watertreatment.product'); });
//     Route::get('/service', function() { return view('web_watertreatment.service'); });
//     Route::get('/tool');
//     Route::get('/solution', [WebController::class, 'solutioncategory']);
//     Route::get('/news', function() { return view('web_watertreatment/news'); });
// });

/* END ROUTE WEB (INDEX) */


Route::prefix('')->group(function () {
    Route::post('/postCreateAcc', [PendingAccs::class, 'postCreateAcc']);
});

Route::prefix('admin/pacc')->group(function () {
    Route::post('/createUser', [PendingAccs::class, 'confirmAcc']);
    Route::get('/deleteAcc/{admin_email}', [PendingAccs::class, 'deleteAcc']);
    Route::get('/verifyacc', [PendingAccs::class, 'indexAcc']);
});

Route::prefix('admin/solution')->group(function () {
    Route::get('/index', [SolutionController::class, 'index']);
    Route::get('/create', [SolutionController::class, 'create']);
    Route::post('/postCreate', [SolutionController::class, 'postCreate']);
    Route::get('/edit/id={id}', [SolutionController::class, 'edit']);
    Route::post('/postEdit', [SolutionController::class, 'postEdit']);
    Route::get('/delete/id={id}', [SolutionController::class, 'delete']);
    Route::get('/view-solution/id={id}', [SolutionController::class, 'view']);
});

Route::prefix('admin/news')->group(function () {
    Route::get('/index', [NewsController::class, 'index']);
    Route::get('/create', [NewsController::class, 'create']);
    Route::post('/postCreate', [NewsController::class, 'postCreate']);
    Route::get('/edit/id={id}', [NewsController::class, 'edit']);
    Route::post('/postEdit', [NewsController::class, 'postEdit']);
    Route::get('/delete/id={id}', [NewsController::class, 'delete']);
    Route::get('/view-news/id={id}', [NewsController::class, 'view']);
    Route::get('/login', [NewsController::class, 'login']);
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('web_watertreatment/index');
Route::get('login/{provider}', [LoginController::class, 'redirectToProvider'])->name('social.login');
Route::get('login/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('social.callback');
