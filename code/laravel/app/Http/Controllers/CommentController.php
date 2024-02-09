<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //Requestクラスを使用する宣言
use App\Models\Comment;  //Commentクラスを使用する宣言

class CommentController extends Controller
{
    public function store(Request $request,$id) {
        $request->validate([
            'body' => 'required',
        ]);

        $comment = new comment();
        $comment->body = $request->body;
        $comment->post_id = $id;
        $comment->save();

        return redirect()
            ->route('text.posts',$id);
    }
    public function destroy(Comment $comment){
        $comment->delete();

        return redirect()
            ->route('text.posts',$comment->post);
    }
}


// このCommentControllerクラスは、コメントの作成と削除を処理するためのメソッドを提供します。これにより、ユーザーがブログ投稿にコメントを追加したり、既存のコメントを削除したりすることができます。

// public function store(Request $request,$id) { ... }：このメソッドは、新しいコメントを作成します。まず、リクエストデータのバリデーションを行い、bodyフィールドが必須であることを確認します。次に、新しいCommentインスタンスを作成し、リクエストから受け取ったbodyと投稿のidを設定します。最後に、この新しいコメントをデータベースに保存します。すべての処理が完了したら、ユーザーを投稿の詳細ページにリダイレクトします。

// public function destroy(Comment $comment){ ... }：このメソッドは、既存のコメントを削除します。具体的には、引数で受け取ったCommentインスタンスを削除します。削除が完了したら、ユーザーをコメントが属していた投稿の詳細ページにリダイレクトします。
