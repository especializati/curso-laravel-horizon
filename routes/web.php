<?php

use App\Jobs\ExampleJob;
use Illuminate\Support\Facades\Route;

Route::get('/test-job', function () {
    ExampleJob::dispatch(['example' => 'value']);

    return 'ok';
});

Route::get('/', function () {
    return view('welcome');
});
