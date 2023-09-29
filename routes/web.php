<?php

use App\Http\Controllers\feebBackController;
use App\Http\Controllers\pizzaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\webProfileController;
use App\Http\Controllers\OrderController;

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

// Route::get('/test-database', function () {
//     try {
//         DB::connection()->getPdo();
//         return "Database connection is successful!";
//     } catch (\Exception $e) {
//         return "Database connection failed: " . $e->getMessage();
//     }
// });


// _________________________public route

Route::get('/contact', function () {return view('webContact');})->name('contact');
Route::post('/storeFeedback', [feedbackController::class, 'storeFeedback'])->name('feedback.store');
Route::get('/about', function () {return view('webAbout');})->name('about');
Route::get('/menu',[menuController::class, 'index'])->name('menu');
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::post('/storeEmail', [NewsletterController::class, 'storeEmail'])->name('subscribe.store');

// _________________________customer route 
// ,'customer' to secure the dashbroad
Route::middleware(['auth','customer'])->group(function () {
    Route::get('/settings', [webProfileController::class, 'edit'])->name('settings.edit');
    Route::patch('/settings', [webProfileController::class, 'update'])->name('settings.update');
    Route::delete('/settings', [webProfileController::class, 'destroy'])->name('settings.destroy');
});
Route::get('/menu/{id}', [menuController::class, 'menuPizza'])->middleware(['auth','customer'])->name('menu.order');
Route::post('/menu/addcart', [OrderController::class, 'addCart'])->middleware(['auth','customer'])->name('menu.addCart');
Route::get('/cart', [OrderController::class, 'Cart'])->middleware(['auth','customer'])->name('cart');

// _________________________dashboard-admin route
// ,'admin' to secure the dashbroad

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','admin'])->name('dashboard');

Route::get('/orders', function () {
    return view('orders');
})->middleware(['auth', 'verified','admin'])->name('orders');

Route::get('/listPizza', [pizzaController::class, 'listPizza'])->middleware(['auth', 'verified','admin'])->name('products');
Route::post('/storepizza', [pizzaController::class, 'storePizza'])->middleware(['auth', 'verified','admin'])->name('pizza.store');
Route::post('/savepizza', [pizzaController::class, 'savePizza'])->middleware(['auth', 'verified','admin'])->name('pizza.save');
Route::get('/editpizza/{pizza}', [pizzaController::class, 'editPizza'])->middleware(['auth', 'verified','admin'])->name('pizza.edit');
Route::get('/removepizza/{pizza}', [pizzaController::class, 'removePizza'])->middleware(['auth', 'verified','admin'])->name('pizza.remove');
Route::get('/feedback', [feedbackController::class, 'index'])->middleware(['auth', 'verified','admin'])->name('feedback');
Route::get('/newsletter', [NewsletterController::class, 'index'])->middleware(['auth', 'verified','admin'])->name('newsletter');

Route::middleware(['auth',])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';