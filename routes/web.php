<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/routing', function() {
    return view('routing');
});

Route::get('/basic_routing', function() {
    return 'Hello World';
});

Route::view('/view_route', 'view_route');
Route::view('/view_route', 'view_route', ['name' => 'Purnama']);
Route::get('/controller_route', [RouteController::class, 'index']);
Route::redirect('/', '/routing');
//Required Parameter
Route::get('/user/{id}', function($id) {
    return "User Id: ".$id;
});
Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return "Post Id: ".$postId.", Comment Id: ".$commentId;
});
//optional parameter
Route::get('username/{name?}', function($name = null) {
    return 'Username: '.$name;
});
// Route With Regular Expression Constraints
Route::get('/title/{title}', function($title) {
    return "Title: ".$title;
})->where('title', '[A-Za-z]+');
//Named Route
Route::get('/profile/{profileId}', [RouteController::class,
'profile'])->name('profileRouteName');
//route priority
// Route::get('/route_priority/{rpId}', function($rpId) {
//     return "This is Route One";
// });
Route::get('/route_priority/user', function() {
    return "This is Route 1";
});
Route::get('/route_priority/user', function() {
    return "This is Route 2";
});
//fallback routes
Route::fallback(function() {
    return 'This is Fallback Route';
});
//Route Groups (Route Prefixes & Route Name Prefixes)
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', function() {
        return "This is admin dashboard";
    })->name('dashboard');
    Route::get('/users', function() {
        return "This is user data on admin page";
    })->name('users');
    Route::get('/items', function() {
        return "This is item data on admin page";
    })->name('items');
});
//routes bootsrap clone
Route::get('/profil', function () {
    return view('profil');  // Gantilah 'bootstrap-clone' dengan nama view Anda
});
//routes portofolio
Route::get('/portofolio', function () {
    return view('portofolio');  // Mengarahkan ke view 'portofolio.blade.php'
});
//routes hubungi
Route::get('/hubungi', function () {
    return view('hubungi');  // Mengarahkan ke view 'portofolio.blade.php'
});
//routes bootstrap clone
Route::get('/bootstrap-clone', function () {
    return view('bootstrap-clone');  // Mengarahkan ke view 'portofolio.blade.php'
});
