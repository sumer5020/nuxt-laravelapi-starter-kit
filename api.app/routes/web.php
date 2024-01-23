<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return [
        'Laravel' => app()->version(),
        'Modified by' => 'SUMER5020'
    ];
});

require __DIR__.'/auth.php';
