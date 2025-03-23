<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroColler;














Route::post('sendRegistrationEmail', [RegistroColler::class, 'submit']);









