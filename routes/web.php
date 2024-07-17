<?php

use App\Models\Item;
use App\Models\SubmenuData;
use Illuminate\Support\Facades\Route;

Route::get('/dataku', function () {
    return view('search');
});

Route::get('/dataku/query', function () {
    return view('guest');
});

Route::get('/dataku/administrator', function () {
    $parents = Item::with('children')->where('parent_id', null)->get();
    // dd($parents);
    return view('dashboard', [
        'parents' => $parents,
    ]);
});

Route::get('/dataku/administrator/{slug}', function ($slug) {
    $parents = Item::with('children')->where('parent_id', null)->get();
    $submenuData = SubmenuData::with(['item.parent'])->where('slug', $slug)->get();
    return view('dashboard', [
        'parents' => $parents,
        'title' => $submenuData[0]->item->name ?? '',
        'subtitle' => $submenuData[0]->item->parent->name ?? '',
        'datas' => $submenuData
    ]);
});