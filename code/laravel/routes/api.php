<?php

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


// このコードは、Laravelフレームワークを使用したPHPのAPIルート定義の一部です。具体的には、以下の機能が含まれています：

// use Illuminate\Http\Request;とuse Illuminate\Support\Facades\Route;：これらの行は、LaravelのRequestクラスとRouteファサードを使用するための宣言です。

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) { return $request->user(); });：この行は、/userというエンドポイントへのGETリクエストを定義しています。このエンドポイントは、auth:sanctumミドルウェアを通過した後に処理されます。つまり、このエンドポイントは認証が必要です。認証が成功すると、リクエストを行ったユーザーの情報が返されます。

// 以上のように、このコードはAPIのルートを定義し、認証が必要なエンドポイントを提供します。このエンドポイントを通じて、クライアントは認証後にユーザー情報を取得することができます。
