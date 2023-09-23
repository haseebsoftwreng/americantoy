<?php

use App\Models\Category;
use App\Models\Product;
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
Route::view('test', 'user.order.new')->middleware('auth');

Route::get('/', function () {
    return view('front.home.index');
})->name('home');

Route::get('categoriestest','Front\CategoryController@category')->name('categoriestest');

Route::view('us','layout.admin');

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'as' => 'admin.',], function () {
    Route::view('login', 'admin.login.index')->name('login');
    Route::post('login', 'AuthController@login')->name('adminlogin');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::view('dashboard', 'admin.dashboard.index')->name('dashboard');
        Route::resource('category', 'CategoryController');
        Route::resource('attribute', 'AttributeController');
        Route::resource('option', 'OptionController');
        Route::resource('product', 'ProductController');
        Route::resource('image', 'ImageController');
        Route::resource('order', 'OrderController');
        Route::resource('review', 'ReviewController');
        Route::resource('slider', 'SliderController');

        Route::get('pending','OrderController@pending')->name('order.pending'); 
        
        Route::get('pending/{id}','OrderController@showpending')->name('show.pending');  
        
        Route::get('new/mail','OrderController@newmail')->name('new.mail');
        Route::get('completed/mail','OrderController@completedmail')->name('complete.mail');
        Route::get('new/mail','OrderController@newmail')->name('new.mail');
        
        Route::post('new/mail/view','OrderController@newmailview')->name('new.mail.view');

        Route::post('new/mail/send','OrderController@newmailsend')->name('new.mail.send');

        Route::view('contact-us', 'admin.contactus.index')->name('contactus');

        Route::post('fetch-attributes','AjaxController@fetchAttribute')->name('fetch_attribute');
        
        Route::post('feature','ProductController@feature')->name('product.feature');
        Route::get('logout', 'AuthController@logout')->name('logout');
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Front', 'as' => 'front.',], function () {
    Route::view('login', 'front.auth.login')->name('login');
    Route::view('register', 'front.auth.register')->name('register');
    Route::post('register','AuthController@register')->name('user_register');
    Route::post('login','AuthController@login')->name('user_login');
    Route::resource('shop', 'ShopController');
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
    Route::resource('contact', 'ContactController');
   
    Route::post('fetch/product', 'PageController@fetch_product')->name('fetchproduct'); 
    
    Route::post('search/product/', 'ProductController@searchProduct')->name('product.search');

    Route::post('cart/add','CartController@add')->name('cart/add');
    Route::post('cart/remove','CartController@remove')->name('cart/remove');
    Route::post('cart/increment','CartController@increment')->name('cart/increment');
    Route::post('cart/decrement','CartController@decrement')->name('cart/decrement');
    Route::get('cart/clear','CartController@clear')->name('cart/clear');

    Route::get('payment/paypal', 'OrderController@gotoPaypal')->name('paypal');
    Route::get('paypal/save', 'OrderController@savepaypal')->name('paypal.save');

    Route::get('cart', 'OrderController@cart')->name('cart');
    Route::post('orderstatus', 'OrderController@orderstatus')->name('orderstatus');
    Route::get('checkout','OrderController@checkout')->name('checkout');
    Route::post('stripe_payment','PaymentController@stripe')->name('stripe_payment');

    Route::post('order/create','OrderController@create')->name('ordercreate');
    Route::post('/stripePay', 'OrderController@stripePay')->name('stripePay');
    Route::view('/test', 'front.payment.stripe')->name('stripePay');
    Route::view('/thankyou','front.payment.thankyou')->name('thankyou');
    Route::view('contact','front.contact.index');
    Route::view('about','front.about.index');

    Route::post('wish/add','AjaxController@wishadd')->name('wish/add');

    Route::get('products/{handler}','ProductController@product_detail')->name('product_detail');
    Route::get('items/{handler}','CategoryController@category_detail')->name('category_detail');
    //Route::get('show','productController@category_detail')->name('all_product');


    Route::group(['middleware' => 'auth'], function () {
        Route::resource('review', 'ReviewController');
        Route::resource('wish-products', 'WishListController');
        
    });
    Route::get('find', function () {
      
        $products =Product::all();

        foreach($products as $product){
            $product->update([
                'handler' => str_replace('','_', $product->name)
            ]);
        }
        
    });
    Route::view('order/polices','front.return.index')->name('polices');
    Route::view('category/product','front.return.index')->name('categoryProduct');

});

Route::group(['prefix' => 'user','middleware' => 'auth','namespace' => 'App\Http\Controllers\User', 'as' => 'user.',], function () {
    Route::resource('order', 'OrderController');
   
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('logout','App\Http\Controllers\Front\AuthController@logout')->name('logout');

});

Route::get('view/deleted','App\Http\Controllers\Admin\DeleteController@delete')->middleware('auth:admin')->name('admin.product.deleted');

Route::get('view/delete/{id}','App\Http\Controllers\Admin\DeleteController@deleted')->middleware('auth:admin')->name('admin.product.delete');

Route::get('restore/deleted/{id}','App\Http\Controllers\Admin\DeleteController@restore')->middleware('auth:admin')->name('admin.product.restore');


