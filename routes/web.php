<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductcategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PayPalPaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use App\Models\Type;


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
//Route::get('/favourite', [FrontController::class, 'favourite'])->name('favourite.page');
//types
Route::get('/items', [TypeController::class, 'items'])->name('items.page');
Route::get('all/{types}', [TypeController::class, 'type'])->name('type.page');

//search
Route::post('search', [TypeController::class, 'search'])->name('search.page');
Route::post('home/search', [TypeController::class, 'homepagesearch'])->name('homepagesearch.page');

//singleproduct
Route::get('/item/{productslug}', [FrontController::class, 'singleproduct'])->name('singleproduct.page');


//accounts
Route::get('/user/{username}', [AccountController::class, 'account'])->name('account.page');
Route::get('user/{username}/myitem', [AccountController::class, 'myitem'])->name('myitem.page');


//download


//cart
Route::post('buy-now', [FrontController::class, 'buynow'])->name('buy.now');
Route::resource('cart', CartController::class);

Route::get('/set', function () {
    //$adminRole = Role::create(['name' => 'general']);
    //$role = Role::where('name', 'Super Admin')->first();
       //$user = auth()->user()->assignRole($role);
    /*$types = Type::create([
        'name' => 'Ticket',
        'slug' => 'ticket'
    ]);*/
    //dd($user);
})->name('set');


//backpages
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {

    Route::middleware(['role:Super Admin|seller|general'])->group(function () {
        //accounts
        Route::get('user/{username}/account/settings', [AccountController::class, 'accountsettings'])->name('accountsetting.page');
        Route::get('user/{username}/followers', [AccountController::class, 'followers'])->name('followers.page');
        Route::get('user/{username}/following', [AccountController::class, 'following'])->name('following.page');
        Route::get('user/{username}/follow/button', [AccountController::class, 'followbutton'])->name('follow.button');
        Route::get('user/{username}/unfollow/button', [AccountController::class, 'unfollowbutton'])->name('unfollow.button');
        Route::post('account/settings/save', [AccountController::class, 'accountsettingsave'])->name('accountsetting.save');
        Route::post('link/aff/link', [OrderController::class, 'affiliatelink'] )->name('affiliate.link');
        Route::get('product/download/{productID}', [AccountController::class, 'download'])->name('download.item');
        Route::get('user/{username}/purchases', [AccountController::class, 'purchases'])->name('purchases.page');


        //PayPal Payment
        Route::get('cart/paypal/payment', [PayPalPaymentController::class, 'handlePayment'])->name('paypal.payment');
        Route::get('cart/paypal/payment-cancel', [PayPalPaymentController::class, 'paymentCancel'])->name('paypal.cancel');
        Route::get('cart/paypal/payment-success', [PayPalPaymentController::class, 'paymentSuccess'])->name('paypal.success');

        //comments
        Route::post('comment/send/now', [CommentController::class, 'comment'])->name('comment.post');
        //reviews
        Route::post('review/send/now', [CommentController::class, 'review'])->name('review.post');
    });

    Route::middleware(['role:Super Admin|seller'])->group(function () {

    });



    //Super admin group of routes
    Route::middleware(['role:Super Admin'])->group(function () {

        Route::get('/dashboard', function () {
            return view('application.dashboard');
        })->name('dashboard');

        //users
        Route::resource('admin/users', UserController::class);

        //sales
        Route::get('admin/sales', [SaleController::class, 'index'])->name('sales.index');
        Route::post('editor-image/upload', [ProductController::class, 'editorupload'])->name('ckeditor.product');

        //products
        Route::resource('product-category', ProductcategoryController::class);
        Route::get('product-type/select', [ProductController::class, 'select'])->name('product.select');
        Route::resource('product', ProductController::class);

    });
});
