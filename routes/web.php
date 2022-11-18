<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductcategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;






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
//frontpages
Route::get('/', [FrontController::class, 'index'])->name('home.page');
//types
Route::get('/software', [TypeController::class, 'software'])->name('software.page');
Route::get('/courses-and-learning', [TypeController::class, 'learning'])->name('learning.page');
Route::get('/templates', [TypeController::class, 'templates'])->name('templates.page');
Route::get('/creative-resources', [TypeController::class, 'creative'])->name('creative.page');
Route::get('/tickets', [TypeController::class, 'tickets'])->name('tickets.page');

Route::get('/item/{productslug}', [FrontController::class, 'singleproduct'])->name('singleproduct.page');


//acounts
Route::get('/user/{username}', [AccountController::class, 'account'])->name('account.page');

Route::get('/set', function () {
    //$adminRole = Role::create(['name' => 'general']);
    /*Type::create([
        'name' => 'Links',
        'slug' => 'links'
    ]);
    //dd($adminRole);*/
})->name('set');



//backpages
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified','role:Super Admin'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('application.dashboard');
    })->name('dashboard');

    Route::post('editor-image/upload', [ProductController::class, 'editorupload'])->name('ckeditor.product');
    Route::resource('product-category', ProductcategoryController::class);
    Route::get('product-type/select', [ProductController::class, 'select'])->name('product.select');
    Route::resource('product', ProductController::class);
});
