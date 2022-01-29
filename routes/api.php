<?php

use App\Http\Controllers\InternetServiceProviderController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffController;
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

Route::post('login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    
    Route::get('posts', [PostController::class, 'list']);
    Route::get('v2/posts',[PostController::class,'listV2']);
    Route::post('posts/reaction', [PostController::class, 'toggleReaction']);
    Route::post('v2/posts/reaction', [PostController::class, 'toggleReactionV2']);
    
    Route::post('mpt/invoice-amount', [InternetServiceProviderController::class, 'getMptInvoiceAmount']);
    Route::post('v2/mpt/invoice-amount', [InternetServiceProviderController::class, 'getMptInvoiceAmountV2']);

    Route::post('ooredoo/invoice-amount', [InternetServiceProviderController::class, 'getOoredooInvoiceAmount']);
    Route::post('v2/ooredoo/invoice-amount', [InternetServiceProviderController::class, 'getOoredooInvoiceAmountV2']);

    
    Route::post('job/apply', [JobController::class, 'apply']);

    
    Route::post('staff/salary', [StaffController::class, 'payroll']);


});