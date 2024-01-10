<?php


// "Illuminate\Support\Facades\Route" と
// "App\Http\Controllers\PostController" を使用することを宣言しています。
// これによって、Laravelのルーティング機能と、PostControllerクラスが使用できるようになります。
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
 アプリケーションに関するウェブルートがここに登録されます。
| これらのルートは RouteServiceProvider によって "web" ミドルウェアグループを含んで
| 読み込まれます。これによりセッションやCSRF保護などのウェブ関連機能が利用可能になります。
| さあ、素晴らしいものを作りましょう！
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// GETリクエストの '/' URLにアクセスがあった時に PostController の index メソッドを呼び出します。
// このルートには 'index.posts' という名前が付けられており、アプリケーション内でこのルートを
// 参照する際にこの名前を使用できるようになります。
Route::get('/', [PostController::class,'index'])
    ->name('index.posts');


// GETリクエストの '/posts/{id}' URLにアクセスがあった時に PostController の text メソッドを呼び出します。
// {id} はURLの一部として動的なパラメータを表し、投稿のIDとして機能します。
// このルートには 'text.posts' という名前が付いており、リンク作成などで便利に使用できます。
Route::get('/posts/{id}', [PostController::class,'text'])
->name('text.posts');
