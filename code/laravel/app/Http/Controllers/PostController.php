<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
class PostController extends Controller
{
    public function index(){
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at','desc')->get();
        $posts = Post::latest()->get();

        return view('index')->with(['posts' => $posts]);
    }

    public function text($id){
        $post = Post::findOrfail($id);

        return view('posts.text')->with(['post' => $post]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(PostRequest $request) {
        $post = new Post();
        $post->title =$request->title;
        $post->detail =$request->detail;
        $post->save();

        return redirect()->route('index.posts');

    }


    public function edit($id){
        $post = Post::findOrfail($id);

        return view('posts.edit')->with(['post' => $post]);  //posts.textではなく、posts.editに修正
    }

    public function update(PostRequest $request, $id) {
        $post = Post::findOrfail($id);
        $post->title =$request->title;
        $post->detail =$request->detail;
        $post->save();

        return redirect()->route('text.posts',$post->id);

    }
    public function destroy($id){
        $post = Post::findOrfail($id);
        $post->delete();

        return redirect()->route('index.posts');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = collect();

        if (!empty($query)) {
            $posts = Post::where('title', 'like', "%{$query}%")->get();
        }

        return view('search')->with(['posts' => $posts]);
    }


}

// このコードは、Laravelフレームワークを使用したPHPのPostControllerクラスを定義しています。このクラスは、ブログ投稿の表示、作成、編集、削除などの操作を処理します。

// public function index(){ ... }：このメソッドは、すべてのブログ投稿を取得し、それらをindexビューに渡して表示します。

// public function text($id){ ... }：このメソッドは、指定されたIDのブログ投稿を取得し、それをtextビューに渡して表示します。

// public function create() { ... }：このメソッドは、新しいブログ投稿を作成するためのフォームを表示するcreateビューを返します。

// public function store(PostRequest $request) { ... }：このメソッドは、新しいブログ投稿をデータベースに保存します。保存が完了したら、ユーザーをブログ投稿の一覧ページにリダイレクトします。

// public function edit($id){ ... }：このメソッドは、指定されたIDのブログ投稿を編集するためのフォームを表示するeditビューを返します。

// public function update(PostRequest $request, $id) { ... }：このメソッドは、指定されたIDのブログ投稿を更新します。更新が完了したら、ユーザーをそのブログ投稿の詳細ページにリダイレクトします。

// public function destroy($id){ ... }：このメソッドは、指定されたIDのブログ投稿を削除します。削除が完了したら、ユーザーをブログ投稿の一覧ページにリダイレクトします。

// public function search(Request $request){ ... }：このメソッドは、ユーザーが入力したクエリに基づいてブログ投稿を検索し、結果をsearchビューに渡して表示します。

// 以上のように、このPostControllerクラスは、ブログ投稿の表示、作成、編集、削除、検索といった操作を処理するためのメソッドを提供します。これにより、ユーザーがブログ投稿を閲覧したり、新しい投稿を作成したり、既存の投稿を編集したり、投稿を削除したり、投稿を検索したりすることができます。
