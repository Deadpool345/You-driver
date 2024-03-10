    <?php

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
        return view('home');
    });


    Route::get('/iniciosesion', function () {
        return view('iniciosesion');
    });
    Route::get('/register', function () {
        return view('register');
    });
    Route::get('/restablecercontra', function () {
        return view('restablecercontra');
    });


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
