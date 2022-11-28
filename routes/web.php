<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductcategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PayPalPaymentController;
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
Route::get('/checkout', [FrontController::class, 'checkout'])->name('checkout.page');
Route::get('/favourite', [FrontController::class, 'favourite'])->name('favourite.page');
//types
Route::get('/items', [TypeController::class, 'items'])->name('items.page');
Route::get('all/{types}', [TypeController::class, 'type'])->name('type.page');

Route::get('/item/{productslug}', [FrontController::class, 'singleproduct'])->name('singleproduct.page');


//acounts
Route::get('/user/{username}', [AccountController::class, 'account'])->name('account.page');
Route::get('user/{username}/purchases', [AccountController::class, 'purchases'])->name('purchases.page');


//cart
Route::post('buy-now', [FrontController::class, 'buynow'])->name('buy.now');
Route::resource('cart', CartController::class);

Route::get('/set', function () {
    //$adminRole = Role::create(['name' => 'general']);
    /*Type::create([
        'name' => 'Links',
        'slug' => 'links'
    ]);
    //dd($adminRole);*/
})->name('set');

//,'role:Super Admin'

//backpages
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('application.dashboard');
    })->name('dashboard');

    Route::post('editor-image/upload', [ProductController::class, 'editorupload'])->name('ckeditor.product');
    Route::resource('product-category', ProductcategoryController::class);
    Route::get('product-type/select', [ProductController::class, 'select'])->name('product.select');
    Route::resource('product', ProductController::class);

    //accounts
    Route::get('user/{username}/account/settings', [AccountController::class, 'accountsettings'])->name('accountsetting.page');
    Route::get('user/{username}/followers', [AccountController::class, 'followers'])->name('followers.page');
    Route::get('user/{username}/following', [AccountController::class, 'following'])->name('following.page');
    Route::get('user/{username}/follow/button', [AccountController::class, 'followbutton'])->name('follow.button');
    Route::get('user/{username}/unfollow/button', [AccountController::class, 'unfollowbutton'])->name('unfollow.button');
    Route::post('account/settings/save', [AccountController::class, 'accountsettingsave'])->name('accountsetting.save');


    //PayPal Payment
    Route::get('cart/paypal/payment', [PayPalPaymentController::class, 'handlePayment'])->name('paypal.payment');
    Route::get('cart/paypal/payment-cancel', [PayPalPaymentController::class, 'paymentCancel'])->name('paypal.cancel');
    Route::get('cart/paypal/payment-success', [PayPalPaymentController::class, 'paymentSuccess'])->name('paypal.success');
});
