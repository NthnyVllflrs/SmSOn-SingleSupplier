<?php

Route::get('/', function () { return view('index');});
Route::get('/{any}', function () { return view('index');});
Route::get('/{any}/{anz}', function () { return view('index');});
