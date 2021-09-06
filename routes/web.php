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

Route::get('/', 'ProductController@indexPublic')->name('home.index');
Route::get('/categories', 'CategoryStoreController@index')->name('category.index');
Route::get('/product/detail/{id}', 'ProductController@detail')->name('home.detail');

Route::get('/map', 'StoreController@updateStore')->name('map.index');


// Route::get('/dashboard-products-create', 'ProductController@createAdmin');
// Route::get('/dashboard-products', 'ProductController@indexAdmin');
// Route::post('/dashboard-products', 'ProductController@store');
// Route::get('/dashboard-products-details/{product}', 'ProductController@showAdmin');
// Route::get('/dashboard-products-details/{product}/edit', 'ProductController@edit');


Route::get('/store/{store}', 'StoreController@show');
Route::get('/store', 'StoreController@indexPublic')->name('store.indexPublic');
Route::get('/dashboard-account', 'StoreController@indexAccount');

// Route::get('/cart/{store}', 'StoreController@show');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/add-cart', 'CartController@store')->name('cart.store');
Route::get('/remove-cart', 'CartController@remove')->name('cart.remove');


// Route::get('/dashboard-admin', 'TransactionController@index');
// Route::get('/dashboard-transactions', 'TransactionController@indexTransaction');
// Route::get('/dashboard-transactions-details/{transaction}', 'TransactionController@indexDetail');

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
    Route::get('/logout', 'AuthController@logout')->name('auth.logout');
});

Route::prefix('/category')->group(function (){
    // Route::get('/', 'CategoryController@index')->name('category.index');
    Route::get('/create', 'CategoryController@create')->name('category.create');
    Route::get('/detail/{id}', 'CategoryStoreController@detail')->name('category.detail');
    Route::post('/store', 'CategoryController@store')->name('category.store');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/update/{id}', 'CategoryController@update')->name('category.update');
    Route::post('/delete/{id}', 'CategoryController@delete')->name('category.delete');
});


Route::group(['middleware' => 'auth'], function(){

  Route::get('/checkout', 'CartController@checkout')->name('cart.checkout');
  Route::get('/checkout-step-1', 'CheckoutController@step1')->name('checkout.step-1');
  Route::post('/checkout-step-1-submit', 'CheckoutController@step1Submit')->name('checkout.step-1-submit');
  // Route::get('/checkout-step-2', 'CheckoutController@step2')->name('checkout.step-2');
  Route::post('/checkout-step-2-submit', 'CheckoutController@step2Submit')->name('checkout.step-2-submit');
  // Route::get('/checkout-step-3', 'CheckoutController@step3')->name('checkout.step-3');
  Route::post('/checkout-step-3-submit', 'CheckoutController@step3Submit')->name('checkout.step-3-submit');


    Route::prefix('/dashboard')->group(function (){
        Route::get('/', 'DashboardController@index')->name('dashboard.index');
        Route::get('/indexAdmin', 'DashboardController@indexAdmin')->name('dashboard.indexAdmin');

        Route::get('/auth/logout', 'AuthController@logout')->name('auth.logout');

//         Route::prefix('/account')->group(function (){
//             Route::get('/detail', 'CategoryController@detail')->name('category.edit');
//             Route::post('/update/{id}', 'CategoryController@update')->name('category.update');
//         });

        Route::prefix('/user')->group(function (){
            Route::get('/', 'UserController@index')->name('user.index');
            // Route::get('/detail', 'UserController@detail')->name('category.edit');
            // Route::post('/update/{id}', 'UserController@update')->name('category.update');
        });


        Route::prefix('/product')->group(function (){
            Route::get('/', 'ProductController@index')->name('product.index');
            Route::get('/create', 'ProductController@create')->name('product.create');
            Route::post('/store', 'ProductController@store')->name('product.store');
            Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit');
            // Route::get('/detail/{id}', 'ProductController@detail')->name('product.detail');
            Route::post('/update/{id}', 'ProductController@update')->name('product.update');
            Route::get('/delete/{id}', 'ProductController@delete')->name('product.delete');

            Route::prefix('/review')->group(function (){
                Route::post('/update/{id}', 'ProductController@review')->name('product.review');
            });
        });

//         Route::prefix('/invoice')->group(function (){
//             Route::get('/detail/{id}', 'InvoiceController@detail')->name('invoice.index');
//             Route::post('/update/{id}', 'InvoiceController@updateStatus')->name('invoice.update');
//         });

        Route::prefix('/store')->group(function (){
            Route::get('/', 'StoreController@index')->name('store.index');
            Route::get('/editKube/{id}', 'StoreController@editKube')->name('store.editKube');
            Route::post('/updateKube/{id}', 'StoreController@updateKube')->name('store.updateKube');
            Route::get('/create', 'StoreController@create')->name('store.create');
            Route::get('/edit/{id}', 'StoreController@edit')->name('store.edit');
            Route::post('/update/{id}', 'StoreController@update')->name('store.update');
            Route::get('/delete/{id}', 'StoreController@delete')->name('store.delete');
            Route::post('/register', 'StoreController@registerSubmit')->name('store.register-submit');

        });

        Route::prefix('/transaction')->group(function (){
            Route::get('/', 'TransactionController@index')->name('transaction.index');
            Route::get('/detail/{id}', 'TransactionController@detail')->name('transaction.detail');
            Route::post('/update/{id}', 'TransactionController@update')->name('transaction.update');
            Route::get('/export_excel', 'TransactionController@export_excel')->name('transaction.export_excel');
            Route::get('/invoice', 'TransactionController@indexTransaction');

            Route::get('/indexAdmin', 'TransactionController@indexAdmin')->name('transaction.indexAdmin');
            Route::get('/detailAdmin/{id}', 'TransactionController@detailAdmin')->name('transaction.detailAdmin');
            Route::get('/reportAdmin', 'TransactionController@reportAdmin')->name('transaction.reportAdmin');;
            Route::get('/export_excel_admin', 'TransactionController@export_excel_admin')->name('transaction.export_excel_admin');
            Route::get('/invoice', 'TransactionController@indexTransaction');
        });

        Route::get('/report', 'TransactionController@report')->name('transaction.report');



//         Route::prefix('/chart')->group(function (){
//             Route::get('/', 'ChartController@index')->name('chart.index');
//             Route::post('/add-chart/{product_id}', 'ChartController@addChart')->name('chart.add');
//             Route::post('/checkout/{transaction_id}', 'ChartController@checkout')->name('chart.checkout');
//             Route::post('/checkout/{transaction_id}/payment-proof', 'ChartController@paymentProof')->name('chart.payment.proof');
//         });
    });

    // Route::prefix('/admin')->group(function (){
    //     Route::get('/', 'DashboardController@index')->name('dashboard.index');

    //     Route::get('/auth/logout', 'AuthController@logout')->name('auth.logout');


    //     Route::prefix('/user')->group(function (){
    //         Route::get('/', 'UserController@index')->name('user.index');
    //         // Route::get('/detail', 'UserController@detail')->name('category.edit');
    //         // Route::post('/update/{id}', 'UserController@update')->name('category.update');
    //     });

    //     Route::prefix('/store')->group(function (){
    //         Route::get('/', 'StoreController@index')->name('store.index');
    //         Route::get('/create', 'StoreController@create')->name('store.create');
    //         Route::get('/edit', 'StoreController@edit')->name('store.edit');
    //         Route::post('/update/{id}', 'StoreController@update')->name('store.update');
    //         Route::get('/delete/{id}', 'StoreController@delete')->name('store.delete');

    //     });

    //     Route::prefix('/transaction')->group(function (){
    //         Route::get('/', 'TransactionController@index')->name('transaction.index');
    //         Route::get('/detail', 'TransactionController@detail')->name('transaction.detail');
    //         Route::get('/invoice', 'TransactionController@indexTransaction');
    //     });

    // });


});






