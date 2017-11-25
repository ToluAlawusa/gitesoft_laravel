<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function (){
    // Route::get('/index', function (){
    //     return view('index');
    // })->name('index');

    Route::get('/index', [
        'uses' => 'Index@showIndexPage',
        'as' => 'index'
    ]);

    Route::get('/adminlogin', [
        'uses' => 'AdminLogin@showAdminLogin',
        'as' => 'adminlogin'
    ]);

     Route::post('/adminlogin', [
        'uses' => 'AdminLogin@doAdminLogin',
        'as' => 'adminlogin'
    ]);

    Route::get('/adminregister', [
        'uses' => 'AdminRegister@showAdminRegister',
        'as' => 'adminregister'
    ]);

    Route::post('/adminregister', [
        'uses' => 'AdminRegister@doAdminRegister',
        'as' => 'adminregister'
    ]);


    Route::get('/addcategory', [
        'uses' => 'AddCategory@showAddCategory',
        'as' => 'addcategory'
    ]);

    
    Route::post('/addcategory', [
        'uses' => 'AddCategory@doAddCategory',
        'as' => 'addcategory'
    ]);

    Route::get('/viewcategory', [
        'uses' => 'ViewCategory@showViewCategory',
        'as' => 'viewcategory'
    ]);

    Route::get('/editcategory/{id}/', [
        'uses' => 'EditCategory@showEditCategory',
        'as' => 'editcategory'
    ]);

    Route::post('/editcategory/{id}/', [
        'uses' => 'EditCategory@doEditCategory',
        'as' => 'editcategory'
    ]);

     Route::get('/deletecategory/{id}/', [
        'uses' => 'DeleteCategory@doDeleteCategory',
        'as' => 'deletecategory'
    ]);

     Route::get('/addproduct', [
        'uses' => 'AddProduct@showAddProduct',
        'as' => 'addproduct'
    ]);

     Route::post('/addproduct', [
        'uses' => 'AddProduct@doAddProduct',
        'as' => 'addproduct'
    ]);

     Route::get('/viewproduct', [
        'uses' => 'ViewProduct@showViewProduct',
        'as' => 'viewproduct'
    ]);

     Route::get('/editproduct/{id}/', [
	    'uses' => 'EditProduct@showEditProduct',
	    'as' => 'editproduct'
    ]);

    Route::post('/editproduct/{id}/', [
        'uses' => 'EditProduct@doEditProduct',
        'as' => 'editproduct'
    ]);

     Route::get('/deleteproduct/{id}/', [
        'uses' => 'DeleteProduct@doDeleteProduct',
        'as' => 'deleteproduct'
    ]);

	 Route::get('/adminlogout', [
	    'uses' => 'AdminLogout@doAdminLogout',
	    'as' => 'adminlogout'
	]);

     Route::get('/customerregister', [
        'uses' => 'CustomerRegister@showCustomerRegister',
        'as' => 'customerregister'
    ]);


     Route::post('/customerregister', [
        'uses' => 'CustomerRegister@doCustomerRegister',
        'as' => 'customerregister'
    ]);
    

    Route::get('/customerlogin', [
        'uses' => 'CustomerLogin@showCustomerLogin',
        'as' => 'customerlogin'
    ]);


     Route::post('/customerlogin', [
        'uses' => 'CustomerLogin@doCustomerLogin',
        'as' => 'customerlogin'
    ]);

     Route::get('/customercatalogue', [
        'uses' => 'CustomerCatalogue@showCustomerCatalogue',
        'as' => 'customercatalogue'
    ]);

     Route::get('/customercatalogue/{id}/', [
        'uses' => 'CustomerCatalogue@showCatalogueCategories',
        'as' => 'customercatalogue'
    ]);

    Route::get('/customerbookpreview/{id}/', [
        'uses' => 'CustomerBookPreview@showBookPreview',
        'as' => 'customerbookpreview'
    ]);


     Route::post('/customerbookpreview/{id}/', [
        'uses' => 'CustomerBookPreview@doAddComments',
        'as' => 'customerbookpreview'
    ]);

    

    Route::get('/customercart/{id}/', [
        'uses' => 'CustomerCart@showCustomerCart',
        'as' => 'customercart'
    ]);


     Route::post('/customercart/{id}/', [
        'uses' => 'CustomerCart@addToCart',
        'as' => 'customercart'
    ]);

    Route::post('/customerupdatecart/{id}/', [
        'uses' => 'CustomerUpdateCart@updateCart',
        'as' => 'customerupdatecart'
    ]);

    Route::post('/customerdeletecart/{id}/', [
        'uses' => 'CustomerDeleteCart@deleteCart',
        'as' => 'customerdeletecart'
    ]);


    Route::get('/customercheckout/{id}/', [
        'uses' => 'CustomerCheckout@showCustomerCheckout',
        'as' => 'customercheckout'
    ]);

    Route::post('/customercheckout/{id}/', [
        'uses' => 'CustomerCheckout@doCheckout',
        'as' => 'customercheckout'
    ]);


    Route::get('/customerlogout', [
        'uses' => 'CustomerLogout@doCustomerLogout',
        'as' => 'customerlogout'
    ]);
});
