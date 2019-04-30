<?php



Auth::routes();

//User Auth
Route::resource('settings', 'SettingController')->middleware('auth');
Route::resource('users', 'UserController')->middleware('auth');
Route::resource('roles', 'RoleController')->middleware('auth');
Route::resource('permissions', 'PermissionController')->middleware('auth');

//Home
Route::get('/app', 'HomeController@index')->middleware('auth')->name('home');
Route::get('/', 'HomeController@easybuy')->name('easybuy');
Route::get('/master', 'HomeController@master')->name('master');




//PRODUCT ROUTE START
Route::resource('products', 'ProductController');
//Restore
Route::get('trash/product', 'ProductController@delete')->name('trash.product');
Route::get('trash/reset/{id}', 'ProductController@reset')->name('trash.reset');
Route::get('trash/forcedelete/{id}', 'ProductController@forcedelete')->name('trash.forcedelete');
//PRODUCT ROUTE END

//CATEGORY ROUTE START
Route::resource('categories', 'CategoryController');
//Restore
Route::get('deletes/category', 'CategoryController@delete')->name('deletes.category');
Route::get('deletes/restore/{id}', 'CategoryController@restore')->name('deletes.restore');
//CATEGORY ROUTE END

//Cart Option
Route::get('single_product/{id}', 'CartController@single_product')->name('single_product');
Route::get('addcart/{id}', 'CartController@addcart');
Route::get('cartlist', 'CartController@cartlist')->name('cartlist');
Route::get('cartremove/{id}', 'CartController@cartremove');
Route::get('checkoutlist', 'CartController@index')->name('checkoutlist');
Route::post('checkout', 'CartController@checkout')->name('checkout');

//Slide Show
Route::resource('slider','SliderController');
Route::get('trash/slider', 'SliderController@delete')->name('trash.slider');
Route::get('trash/reset/{id}', 'SliderController@reset')->name('trash.reset');
Route::get('trash/forcedelete/{id}', 'SliderController@forcedelete')->name('trash.forcedelete');

//Navbar
Route::resource('navbars', 'NavbarController');




