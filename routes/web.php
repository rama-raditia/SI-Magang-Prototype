<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/tempat_pkl', function () {
    return view('tempat');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/jurnal', function () {
    return view('admin_jurnal');
});

Route::get('/admin_laporan', function () {
    return view('admin_laporan');
});

Route::get('/admin_tempat', function () {
    return view('admin_tempat');
});

Route::get('/admin_pembimbing', function () {
    return view('admin_pembimbing');
});


