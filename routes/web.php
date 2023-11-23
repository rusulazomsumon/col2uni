<?php
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


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

// Route::get('/', function () {
//     return view('welcome');
// });

//@@@@@@@@@@@@@@@@ cache, route, view clear route @@@@@@@@@@@@@@@@

Route::get('/clear-all', function () {
    // Clear the application cache
    Artisan::call('cache:clear');

    // Clear the compiled views
    Artisan::call('view:clear');

    // Clear the route cache
    Artisan::call('route:clear');

    // Additional commands for clearing other caches can be added here

    return 'Caches, view, and route cleared successfully.';
});


//@@@@@@@@@@@@@@@@@@@@ frontend @@@@@@@@@@@@@@@@@@

Route::get('/', [FrontendController::class, 'index'])->name('front.index');
// category slug
Route::get('/category/{slug}', [FrontendController::class, 'category'])->name('front.category');
// single post by slug
Route::get('/single-post/{slug}', [FrontendController::class, 'single'])->name('front.single');
// single post page
// Route::get('/single-post', [FrontendController::class, 'single'])->name('front.single');
// all post 
Route::get('/all-post', [FrontendController::class, 'all_post'])->name('front.all_post');

// ck editor image uploader 
Route::post('/upload',[FrontendController::class, 'uploadimage'])->name('ckeditor.upload');

// ############Suport Page##############
Route::get('/contact', [FrontendController::class, 'contact'])->name('front.contact');
Route::get('/privacy-policy', [FrontendController::class, 'privacy_policy'])->name('front.privacy_policy');


// @@@@@@@@@@@@@@@@@@@bakcend@@@@@@@@@@@@@@@@@
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth.dashboard']], function(){
    Route::get('/', [BackendController::class,'index'])->name('back.index');
    // category 
    Route::resource('category', CategoryController::class);
    // post 
    Route::resource('post', PostController::class);
});

// breeze defult redirect with middleware
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
