<?php


// "Illuminate\Support\Facades\Route" と
// "App\Http\Controllers\PostController" を使用することを宣言しています。
// これによって、Laravelのルーティング機能と、PostControllerクラスが使用できるようになります。
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Models\Comment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|

*/

Route::get('/', [PostController::class,'index'])
    ->name('index.posts');

Route::get('/posts/{id}', [PostController::class,'text'])
->name('text.posts')
->where('id','[0-9]+');

Route::get('/posts/create', [PostController::class,'create'])
->name('create.posts');

Route::post('/posts/store', [PostController::class,'store'])
->name('store.posts');

Route::get('/posts/{id}/edit', [PostController::class,'edit'])
->name('edit.posts')
->where('id','[0-9]+');

Route::patch('/posts/{id}/update', [PostController::class,'update'])
->name('update.posts')
->where('id','[0-9]+');

Route::delete('/posts/{id}/destroy', [PostController::class,'destroy'])
->name('destroy.posts')
->where('id','[0-9]+');

Route::get('/posts/search', [PostController::class,'search'])->name('search.posts');

Route::post('/posts/{id}/comments', [CommentController::class,'store'])
->name('store.comments')
->where('id','[0-9]+');


Route::delete('/comments/{comment}/destroy', [CommentController::class,'destroy'])
->name('destroy.comments')
->where('comment','[0-9]+');

// このコードは、Laravelフレームワークを使用したWebアプリケーションのルーティングを定義しています。具体的には、URLパスとそれに対応するコントローラのアクション（メソッド）をマッピングしています。

// 以下に、各ルートの詳細を説明します：

// Route::get('/', [PostController::class,'index'])->name('index.posts');：ホームページ（/）にアクセスしたときに、PostControllerのindexメソッドを呼び出します。このルートの名前はindex.postsです。

// Route::get('/posts/{id}', [PostController::class,'text'])->name('text.posts')->where('id','[0-9]+');：/posts/{id}にアクセスしたときに、PostControllerのtextメソッドを呼び出します。ここで、{id}は投稿のIDを表します。このルートの名前はtext.postsです。

// Route::get('/posts/create', [PostController::class,'create'])->name('create.posts');：/posts/createにアクセスしたときに、PostControllerのcreateメソッドを呼び出します。このルートの名前はcreate.postsです。

// Route::post('/posts/store', [PostController::class,'store'])->name('store.posts');：/posts/storeにPOSTリクエストを送信したときに、PostControllerのstoreメソッドを呼び出します。このルートの名前はstore.postsです。

// Route::get('/posts/{id}/edit', [PostController::class,'edit'])->name('edit.posts')->where('id','[0-9]+');：/posts/{id}/editにアクセスしたときに、PostControllerのeditメソッドを呼び出します。ここで、{id}は投稿のIDを表します。このルートの名前はedit.postsです。

// Route::patch('/posts/{id}/update', [PostController::class,'update'])->name('update.posts')->where('id','[0-9]+');：/posts/{id}/updateにPATCHリクエストを送信したときに、PostControllerのupdateメソッドを呼び出します。ここで、{id}は投稿のIDを表します。このルートの名前はupdate.postsです。

// Route::delete('/posts/{id}/destroy', [PostController::class,'destroy'])->name('destroy.posts')->where('id','[0-9]+');：/posts/{id}/destroyにDELETEリクエストを送信したときに、PostControllerのdestroyメソッドを呼び出します。ここで、{id}は投稿のIDを表します。このルートの名前はdestroy.postsです。

// Route::get('/posts/search', [PostController::class,'search'])->name('search.posts');：/posts/searchにアクセスしたときに、PostControllerのsearchメソッドを呼び出します。このルートの名前はsearch.postsです。

// Route::post('/posts/{id}/comments', [CommentController::class,'store'])->name('store.comments')->where('id','[0-9]+');：/posts/{id}/commentsにPOSTリクエストを送信したときに、CommentControllerのstoreメソッドを呼び出します。ここで、{id}は投稿のIDを表します。このルートの名前はstore.commentsです。

// Route::delete('/comments/{comment}/destroy', [CommentController::class,'destroy'])->name('destroy.comments')->where('comment','[0-9]+');：/comments/{comment}/destroyにDELETEリクエストを送信したときに、CommentControllerのdestroyメソッドを呼び出します。ここで、{comment}はコメントのIDを表します。このルートの名前はdestroy.commentsです。

// 以上のように、このコードはWebアプリケーションの各ページとそれに対応する処理を定義しています。これにより、ユーザーが特定のURLにアクセスしたときや、特定のリクエストを送信したときに、適切な処理が行われるようになります。
