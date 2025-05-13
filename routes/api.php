<?php

use App\Events\NotificationEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::post('/send-notification', function (Request $request) {
    try {
        $data = $request->all();
        broadcast(new NotificationEvent($data))->toOthers();
    } catch (\Exception $e) {
        Log::error($e->getMessage());
    }
});
