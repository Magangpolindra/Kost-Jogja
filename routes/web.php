<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardPenggunaController;



// USER HOMEPAGE
// Halaman Utama
Route::get('/', function () {
    $posts = Post::limit(6)->get();
    return view('home', [
        "title" => "Home",
        "active" => "home",
        'posts' => $posts
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Kosan banguntapan",
        "email" => "kosanbantul@gmail.com",
        "image" => "kost.jpg"
    ]);
});

route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/history', [HistoryController::class, 'index']);
Route::get('/maps', [MapsController::class, 'maps']);


Route::group(['controller' => LoginController::class], function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/show/{slug}', [PostController::class, 'show'])->name('posts.show');
});

Route::group(['controller' => LoginController::class], function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::group(['controller' => RegisterController::class], function () {
    Route::get('/register', 'index')->middleware('guest');
    Route::post('/register', 'store');
});

Route::get('/show/{name}', [DashboardController::class, 'show'])->name('show.profileTeam');
Route::get('/pusat-bantuan', [DashboardController::class, 'pusat'])->name('pusat');
// pemilik
Route::get('/pusat-bantuan-pemilik', [DashboardController::class, 'pusat_pemilik'])->name('pusat.pemilik');
Route::get('pusat-bantuan-akun-pemilik', [DashboardController::class, 'akun_pemilik'])->name('pusat.akunpemilik');
// pencari
Route::get('/pusat-bantuan-pencari', [DashboardController::class, 'pusat_pencari'])->name('pusat.pencari');
Route::get('pusat-bantuan-akun-pencari', [DashboardController::class, 'akun_pencari'])->name('pusat.akunpencari');
// Help
Route::get('/help', [DashboardController::class, 'help'])->name('help');
// Syarat ketentuan
Route::get('/syarat', [DashboardController::class, 'syarat'])->name('syarat');
Route::get('/syarat-pemilik', [DashboardController::class, 'syarat_pemilik'])->name('syarat.pemilik');
Route::get('/syarat-pencari', [DashboardController::class, 'syarat_pencari'])->name('syarat.pencari');
// End



// ADMINISTRATOR
// Halaman Dashboard
Route::middleware('auth')->group(function () {
    Route::name('dashboard.')->group(function () {
        Route::group(['controller' => DashboardController::class], function () {
            Route::get('dashboard', 'index')->name('index');
        });
    });
    //pemesanan
    Route::get('/pemesanan', [DashboardController::class, 'pemesanan'])->name('pemesanan');
    // Postingan
    Route::name('dashboard.posts.')->group(function () {
        Route::group(['controller' => DashboardPostController::class, 'prefix' => 'dashboard'], function () {
            Route::get('/posts', 'index')->name('index');
            Route::get('/posts/{categories:slug}', 'show');
            Route::get('/posts/show/{id}', 'show')->name('show');
            Route::post('/posts/store', 'store')->name('store');
            Route::get('/posts/edit/{id}', 'edit')->name('edit');
            Route::put('/posts/update/{post:slug}', 'update')->name('update');
            Route::get('/posts/destroy/{id}', 'destroy')->name('destroy');
        });
        Route::get('/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
    });
    // Pengguna
    Route::group(['controller' => DashboardPenggunaController::class], function () {
        Route::get('/dashboard/admin', 'index')->name('admin_index-post');
        Route::get('/dashboard/admin/show-post/{id}', 'show_post')->name('admin_show-post');
        Route::post('/dashboard/admin/store-post', 'store')->name('admin_store-post');
        Route::get('/dashboard/admin/edit-post/{id}', 'edit')->name('admin_edit-post');
        Route::get('/dashboard/admin/update-post/{id}', 'update')->name('admin_update-post');
        Route::get('/dashboard/admin/destroy-post/{id}', 'destroy')->name('admin_destroy-post');
        Route::get('/dashboard/admin/destroy-user/{id}', 'destroy_user')->name('admin_destroy-user');
    });
    // Area
    Route::get('/dashboard/category/checkSlug',  [DashboardCategoryController::class, 'checks']);
    Route::group(['controller' => DashboardCategoryController::class], function () {
        Route::get('/dashboard/categories', 'index')->name('category_index-post');
        Route::get('/dashboard/categories/show-post/{id}', 'show_post')->name('category_show-post');
        Route::post('/dashboard/categories/store-post', 'store')->name('category_store-post');
        Route::get('/dashboard/categories/edit-post', 'edit')->name('category_edit-post');
        Route::get('/dashboard/categories/update-post', 'update')->name('category_update-post');
        Route::get('/dashboard/categories/destroy-post/{id}', 'destroy')->name('category_destroy-post');
    });
});

// transaksi
Route::get('/dashboard/transaksi', function () {
    return view('dashboard.transaksi.index');
});
Route::get('/dashboard/transaksi/show', function () {
    return view('dashboard.transaksi.show');
});

// profil
Route::get('/dashboard/profil', function () {
    return view('dashboard.profil.index');
});
Route::get('/dashboard/profil/edit', function () {
    return view('dashboard.profil.edit');
});




// Route::middleware('auth')->group(function () {
//     Route::group(['controller' => AdminCategoryController::class], function () {
//         Route::get('/posts/{categories:slug}', 'show');
//         Route::get('/dashboard/categories/checkSlug', 'checkSlug');
//     });
//     Route::resource('/dashboard/posts', DashboardPostController::class);
//     Route::group(['controller' => DashboardPostController::class], function () {
//         Route::get('/dashboard/posts/checkSlug', 'checkSlug');
//     });

//     Route::resource('/dashboard/admin', SuperAdminController::class);
//     Route::group(['controller' => SuperAdminController::class], function () {
//         Route::get('/dashboard/admin/show-post/{id}', 'show_post')->name('admin_show-post');
//     });
// });