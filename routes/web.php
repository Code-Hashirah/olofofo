<?php

use App\Http\Controllers\News\NewsBlog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class,'index']);
Route::get('/admin/addBlog',[NewsBlog::class,'adminAdd']);
Route::post('/admin/addBlog',[NewsBlog::class,'store']);
Route::get('/admin/manage-blog',[NewsBlog::class,'getAll']);
Route::delete('/admin/delete-blog',[NewsBlog::class, 'deleteBlog']);
Route::get('/admin/edit-blog/{id}',[NewsBlog::class, 'editBlog']);
Route::put('/admin/update-blog',[NewsBlog::class, 'updateBlog']);