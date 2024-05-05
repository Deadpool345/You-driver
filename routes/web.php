    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\LoginController;
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
    
    Route::get('/login', function () {
        return view('login');
    });
    
    Route::get('/register', function () {
        return view('register');
    });
    
    Route::get('/restablecercontra', function () {
        return view('restablecercontra');
    });
    
    Route::get('/contact', function () {
        return view('contacto');
    });
    
    Route::get('/catalogo', function () {
        return view('catalogo');
    });
    
    Route::get('/about', function () {
        return view('aboutus');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    

    //manejo de formularios
    Route::get('/registro', [App\Http\Controllers\RegisterController::class, 'showRegistrationForm'])->name('registro.form');
    Route::post('/registro', [App\Http\Controllers\RegisterController::class, 'register'])->name('registro');

    Route::get('/inicio', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/inicio', [LoginController::class, 'login']);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    