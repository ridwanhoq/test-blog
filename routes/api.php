<?php

use App\Events\PublicMessageEvent;
use App\Http\Controllers\Api\V1\LoginApiController;
use App\Http\Controllers\Api\V1\VoteApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {

    Route::post('/public-event', function (Request $request) {
        $channelName = $request->post('channelName');
        $message = $request->post('message');
        broadcast(new PublicMessageEvent($channelName, $message));
    })->middleware('throttle:60,1'); // 60 requests/minute are allowed.



    Route::controller(LoginApiController::class)->group(function () {
        Route::post('login', 'login');
    });

    Route::controller(VoteApiController::class)->group(function () {
        Route::post('poll-question-own-response-submit/{poll-question-id}', 'pollQuestionOwnResponseSubmit');
    });
});
