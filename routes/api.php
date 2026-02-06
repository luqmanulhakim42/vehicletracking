<?php

use App\Http\Controllers\Api\TrackingController;

Route::post('/tracking', [TrackingController::class, 'store'])
    ->middleware('auth.device');