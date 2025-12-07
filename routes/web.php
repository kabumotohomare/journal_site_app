<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

//一覧ページ
Volt::route('/articles', 'articles/index')->name('articles/index');
//詳細ページ
Volt::route('/articles/{article}', 'articles/show')->name('articles/show');
//編集ページ
Volt::route('/articles/{article}/edit', 'articles.edit')->name('articles/edit');
