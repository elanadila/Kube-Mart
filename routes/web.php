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

Route::get('/', 'ProductController@index');
Route::get('/categories', 'ProductController@categories');
Route::get('/product-details/{product}', 'ProductController@show');


Route::get('/product/dashboard-products-create', 'ProductController@createAdmin');
Route::get('/product/dashboard-products', 'ProductController@indexAdmin');
Route::post('/product/dashboard-products', 'ProductController@store');
Route::get('/product/dashboard-products-details/{product}', 'ProductController@showAdmin');
Route::get('/product/dashboard-products-details/{product}/edit', 'ProductController@edit');


Route::get('/store/{store}', 'StoreController@show');
Route::get('/store', 'StoreController@index');

// Route::get('/', 'HomeController@index')->name('home.index');

// Route::prefix('/product')->group(function (){
//     Route::get('/', 'ProductController@indexPublic')->name('public.product.index');
//     Route::get('/detail/{id}', 'ProductController@detailPublic')->name('public.product.detail');
// });

// Route::prefix('/category')->group(function (){
//     Route::get('/', 'CategoryController@indexPublic')->name('public.category.index');
//     Route::get('/detail/{id}', 'CategoryController@detailPublic')->name('public.category.detail');
// });

// Route::prefix('/store')->group(function (){
//     Route::get('/', 'StoreController@indexPublic')->name('public.store.index');
//     Route::get('/detail/{id}', 'StoreController@detailPublic')->name('public.store.detail');
// });

// Route::prefix('/address')->group(function (){
//     Route::get('/', 'AddressController@indexPublic')->name('public.address.index');
// });

Route::prefix('/auth')->group(function (){
    Route::get('/login', 'AuthController@login')->name('auth.login');
    Route::post('/login', 'AuthController@loginSubmit')->name('auth.login-submit');
    Route::get('/register', 'AuthController@register')->name('auth.register');
    Route::post('/register', 'AuthController@registerSubmit')->name('auth.register-submit');
});

Route::group(['middleware' => 'auth'], function(){

    Route::prefix('/dashboard')->group(function (){
        Route::get('/', 'DashboardController@index')->name('dashboard.index');

        Route::get('/auth/logout', 'AuthController@logout')->name('auth.logout');

//         Route::prefix('/account')->group(function (){
//             Route::get('/detail', 'CategoryController@detail')->name('category.edit');
//             Route::post('/update/{id}', 'CategoryController@update')->name('category.update');
//         });

//         Route::prefix('/category')->group(function (){
//             Route::get('/', 'CategoryController@index')->name('category.index');
//             Route::get('/create', 'CategoryController@create')->name('category.create');
//             Route::post('/store', 'CategoryController@store')->name('category.store');
//             Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');
//             Route::post('/update/{id}', 'CategoryController@update')->name('category.update');
//             Route::post('/delete/{id}', 'CategoryController@delete')->name('category.delete');
//         });

//         Route::prefix('/product')->group(function (){
//             Route::get('/', 'ProductController@index')->name('product.index');
//             Route::get('/create', 'ProductController@create')->name('product.create');
//             Route::post('/store', 'ProductController@store')->name('product.store');
//             Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit');
//             Route::get('/detail/{id}', 'ProductController@detail')->name('product.detail');
//             Route::post('/update/{id}', 'ProductController@update')->name('product.update');
//             Route::post('/delete/{id}', 'ProductController@delete')->name('product.delete');

//             Route::prefix('/review')->group(function (){
//                 Route::post('/update/{id}', 'ProductController@review')->name('product.review');
//             });
//         });

//         Route::prefix('/invoice')->group(function (){
//             Route::get('/detail/{id}', 'InvoiceController@detail')->name('invoice.index');
//             Route::post('/update/{id}', 'InvoiceController@updateStatus')->name('invoice.update');    
//         });

        // Route::prefix('/store')->group(function (){
        //     Route::get('/', 'StoreController@index')->name('store.index');
        //     Route::post('/update/{id}', 'StoreController@update')->name('store.update');
        // });

//         Route::prefix('/transaction')->group(function (){
//             Route::get('/detail', 'TransactionController@detail')->name('transaction.index');
//         });

//         Route::prefix('/chart')->group(function (){
//             Route::get('/', 'ChartController@index')->name('chart.index');
//             Route::post('/add-chart/{product_id}', 'ChartController@addChart')->name('chart.add');
//             Route::post('/checkout/{transaction_id}', 'ChartController@checkout')->name('chart.checkout');
//             Route::post('/checkout/{transaction_id}/payment-proof', 'ChartController@paymentProof')->name('chart.payment.proof');
//         });
    });

});

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/kategori', function () {
//     return view('kategori');
// });

Route::get('/maps', function () {
    return view('maps');
});


// Route::get('/details', function () {
//     return view('details');
// });

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/sukses', function () {
    return view('sukses');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/toko', function () {
    return view('toko');
});

Route::get('/toko-details', function () {
    return view('toko-details');
});

Route::get('/dashboard-products', function () {
    return view('dashboard-products');
});

Route::get('/dashboard-products-details', function () {
    return view('dashboard-products-details');
});

Route::get('/dashboard-transactions', function () {
    return view('dashboard-transactions');
});

Route::get('/dashboard-settings', function () {
    return view('dashboard-settings');
});

Route::get('/dashboard-account', function () {
    return view('dashboard-account');
});

Route::get('/dashboard-transactions-details', function () {
    return view('dashboard-transactions-details');
});

Route::get('/dashboard-products-create', function () {
    return view('dashboard-products-create');
});

Route::get('/dashboard-member', function () {
    return view('dashboard-member');
});






