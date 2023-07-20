<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZenBlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[ZenBlogController::class,'index'])->name('home');
Route::get('/blog-details/{slug}',[ZenBlogController::class,'blogDetail'])->name('blog.detail');
Route::get('/about',[ZenBlogController::class,'about'])->name('about');
Route::get('/contact',[ZenBlogController::class,'contact'])->name('contact');
Route::get('/blog-category/{catId}',[ZenBlogController::class,'category'])->name('blog.category');
Route::get('/search',[ZenBlogController::class,'search'])->name('search');
Route::get('/user-register',[ZenBlogController::class,'userRegistration'])->name('user.register');
Route::post('/user-register',[ZenBlogController::class,'newUserRegistration'])->name('user.register');
Route::get('/user-login',[ZenBlogController::class,'userLogin'])->name('user.login');
Route::post('/user-login',[ZenBlogController::class,'userLoginCheck'])->name('user.login');
Route::get('/user-logout',[ZenBlogController::class,'logout'])->name('user.logout');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[DashboardController::class ,'index'])->name('dashboard');


    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new.category');
    Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('edit.category');
    Route::post('/update-category',[CategoryController::class,'updateCategory'])->name('update.category');
    Route::post('/delete-category',[CategoryController::class,'deleteCategory'])->name('delete.category');


    Route::get('/author',[AuthorController::class,'index'])->name('author');
    Route::post('/new-author',[AuthorController::class,'saveAuthor'])->name('new.author');
    Route::get('/edit-author/{id}',[AuthorController::class,'editAuthor'])->name('edit.author');
    Route::post('/update-author',[AuthorController::class,'updateAuthor'])->name('update.author');
    Route::post('/delete-author',[AuthorController::class,'deleteAuthor'])->name('delete.author');


    Route::get('/blog',[BlogController::class,'index'])->name('blog');
    Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('manage.blog');
    Route::get('/status/{id}',[BlogController::class,'status'])->name('status');
    Route::get('/edit-blog/{id}',[BlogController::class,'editBlog'])->name('edit.blog');

    Route::post('/add-blog',[BlogController::class,'saveBlog'])->name('add.blog');
    Route::post('/update-blog',[BlogController::class,'updateBlog'])->name('update.blog');
    Route::post('/blog.delete',[BlogController::class,'deleteBlog'])->name('blog.delete');


});
