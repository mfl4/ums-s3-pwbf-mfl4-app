<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/dummy', function () {
    return "<center style='font-family: sans-serif; margin-top:20vh;'>
                <marquee direction='up' style='margin-bottom: 20px;'><h1 style='text-align: center; font-size: 10em; font-weight: bold;'>DUMMY PAGE</h1></marquee>
                <a href='/' style='text-decoration: none; color: white; font-size: 1.5em; padding: 1em; background-color: black; border-radius: 0.5em; font-weight: semibold; margin-right: 0.5em'>Back to Home</a>

                <a href='/about' style='text-decoration: none; color: white; font-size: 1.5em; padding: 1em; background-color: black; border-radius: 0.5em; font-weight: semibold; margin-right: 0.5em'>Let's
                Know about ME</a>

                <a href='/mfl4' style='text-decoration: none; color: white; font-size: 1.5em; padding: 1em; background-color: black; border-radius: 0.5em; font-weight: semibold; margin-right: 0.5em'>Check
                My Page</a>
            </center>";
});

Route::get('/mfl4', function () {
    return view('mfl4');
});

Route::get('/test', [TestController::class, 'index']);
