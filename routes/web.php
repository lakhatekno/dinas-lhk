<?php

use App\Models\Item;
use App\Models\SubmenuData;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return redirect('/dataku');
});

Route::get('/dataku', function () {
    return view('search');
});

Route::post('/dataku/search', [SubmenuController::class, 'search'])->name('search.submenu');

// Route::get('/dataku/administrator', function () {
//     $parents = Item::with('children')->where('parent_id', null)->get();
//     dd($parents);
//     return view('dashboard', [
//         'parents' => $parents,
//         'title' => '',
//         'slug' => '',
//         'subtitle' => '',
//         'datas' => []
//     ]);
// });

//mendapatkan data
Route::get('/dataku/{slug}', function ($slug) {
    $parents = Item::with('children')->where('parent_id', null)->get();
    $title = Item::where('slug', $slug)->with('parent')->get();
    $submenuData = SubmenuData::with(['item.parent'])
                    ->where('slug', $slug)
                    ->orderBy('kode')
                    ->get();
    return view('dashboard', [
        'parents' => $parents,
        'title' => $title[0]->name ?? '',
        'slug' => $slug ?? '',
        'subtitle' => $title[0]->parent->name ?? '',
        'datas' => $submenuData ?? []
    ]);
});

//menambah data
Route::post('/dataku/{slug}/store', [SubmenuController::class, 'store']);

//hapus semua data
Route::delete('/dataku/{slug}/delete-all', function ($slug) {
    SubmenuData::where('slug', $slug)->delete();
    return redirect('/dataku/' . $slug)->with('success', 'Semua data berhasil dihapus!');
});

Route::post('/dataku/{slug}/update', [SubmenuController::class, 'updateData']);

Route::get('/export-data-xlsx', [SubmenuController::class, 'export'])->name('export.submenu.data');

Route::get('/admin/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::post('/admin/register', [RegisterController::class, 'register']);

Route::post('/admin/login', [LoginController::class, 'login'])->name('login');

Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dataku/administrator', function () {
        return view('dashboard');
    });
});