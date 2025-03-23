<?php

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/login", [Controllers\AuthController::class, 'login']);
Route::post("/post-article", [\App\Http\Controllers\ArticleController::class, 'create_posts']);
Route::get("/get-article", [\App\Http\Controllers\ArticleController::class, 'get_all_posts']);
Route::get('/get-post/{id}', [Controllers\ArticleController::class, 'get_post_by_id']);
Route::put('/update-view/{postId}', [Controllers\ArticleController::class, 'update_view']);
Route::get('/download-resume/{filename}', [Controllers\FileDownloadController::class, 'download']);
Route::put('/update-article/{id}', [Controllers\ArticleController::class, 'update_posts']);
Route::delete('/delete-article/{id}', [Controllers\ArticleController::class, 'delete_posts']);