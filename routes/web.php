<?php

use App\Jobs\ExampleJob;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/test-mail', function () {
    Mail::to('carlos@especializati.com.br')
            ->send(new TestMail);

    return 'ok - mail sended';
});

Route::get('/test-job', function () {
    ExampleJob::dispatch(['example' => 'value']);

    return 'ok';
});

Route::get('/', function () {
    return view('welcome');
});
