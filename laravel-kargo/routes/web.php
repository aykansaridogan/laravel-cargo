<?php
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;

Route::resource('cargo', CargoController::class);
Route::post('/cargo', 'CargoController@store')->name('cargo.store');





Route::get('/create', function () {
    return view('cargo.create'); // login.blade.php dosyası
});
Route::get('/', function () {
    return view('welcome'); // register.blade.php dosyası
});


use App\Http\Controllers\RegisterController;



// Denetleyici tabanlı rotalar
Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
Route::post('/register', [RegisterController::class, 'register']);


// Fonksiyon tabanlı rota
Route::get('/register', function () {
    return view('auth.register'); // auth/register.blade.php dosyasının yolu
})->name('register');









Route::get('/login', function () {
    return view('auth.login'); // login.blade.php sayfasının yolu
})->name('login');
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Giriş başarılı, kullanıcıyı yönlendir
        return redirect()->route('cargo.index');
    } else {
        // Giriş başarısız, kullanıcıyı login sayfasına geri yönlendir
        return redirect('/login')->with('error', 'Invalid email or password');
    }
});
Route::get('/index', function () {
    return view('cargo.index'); // cargo.index.blade.php dosyasının yolu
})->name('cargo.index');

Route::get('/cargo', [CargoController::class, 'index'])->name('cargo.index');


