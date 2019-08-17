<?php

Route::redirect('/', '/products');

/**
 * Products management.
 */
Route::resource('products', 'ProductsController')->except(['show']);