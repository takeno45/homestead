<?php

// App\Http\Controllers 名前空間の指定。
// これによりこのファイルがコントローラーに関連していることがわかります。
namespace App\Http\Controllers;


// Illuminate\Http\Request クラスをインポート。
// Laravel のリクエスト（HTTPリクエスト）を取り扱うためのクラスです。
use Illuminate\Http\Request;

// Controller 基底クラスを継承した PostController クラス。
// MVCのControllerに相当する部分で、アプリケーションのロジックを司ります。
class PostController extends Controller
{

    // Private変数$postsに項目を用意。
    // ここではモデル、ビュー、コントローラーの各要素を示す文字列が格納されています。
    private $posts= [

        'Model',
        'View',
        'controller',
    ];

     // indexメソッド。これはルーティングで指定されたアクションの一つとして機能します。
    // インデックスページにアクセスがあった際に呼ばれ、postsビューを返します。
    public function index(){
           // 'index' ビューを返し、ビューに 'posts' 変数を渡しています。
        return view('index')->with(['posts' => $this->posts]);
    }

       // textメソッド。投稿のテキスト内容を表示するページ用のメソッドです。
    // $id パラメータを受け取り、そのIDに応じた投稿内容をビューに渡す。
    public function text($id){

         // 'posts.text' ビューを返し、特定のIDに対応する 'post' 変数を持たせます。
        // $this->posts[$id] で、指定されたIDの投稿を$posts配列から取得しています。
        return view('posts.text')->with(['post' => $this->posts[$id]]);
    }
}
