<?php

Route::resource('/admin/blog','Zwarthoorn\Blog\BlogController');
Route::post('/response/delete','Zwarthoorn\Blog\ResponseController@del')
?>