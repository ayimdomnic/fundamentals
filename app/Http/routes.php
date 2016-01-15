<?php

Route::get('about','PagesController@about');
Route::get('contact', 'PageController@contact');

Route::get('articles', 'ArticlesController@index');