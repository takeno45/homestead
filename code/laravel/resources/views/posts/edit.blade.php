<x-layout>
    <a href="{{ route('text.posts', $post->id)}}" class="re">戻る</a>
    <h1>更新画面</h1>
    <form action="{{ route('update.posts',$post->id) }}" method="post">
        @csrf
        @method('PATCH')

        <label>
            Title
            <input type="text" name="title" value="{{ old('title',$post->title) }}">
        </label>
        @error('title')
        <div class="error">{{ $message }}</div>
        @enderror
        <label>
            Detail
            <textarea name="detail"  rows="10">{{ old('detail',$post->detail) }}</textarea>
        </label>
        @error('detail')
            <div class="error">{{ $message }}</div>
        @enderror
        <div class="btn"><button>更新</button></div>
    </form>
</x-layout>


{{-- このコードは、Laravelフレームワークを使用したブログ投稿の更新フォームを表示するためのBladeテンプレートです。具体的には、以下の機能が含まれています： --}}

{{-- 戻るリンク：<a href="{{ route('text.posts', $post->id)}}" class="re">戻る</a>は、ブログ投稿の詳細ページへのリンクを提供します。 --}}

{{-- フォームの開始：<form action="{{ route('update.posts',$post->id) }}" method="post">は、既存のブログ投稿を更新するためのフォームを開始します。このフォームは、POSTメソッドでupdate.postsルート（PostControllerのupdateメソッド）にデータを送信します。 --}}

{{-- CSRFトークン：@csrfは、Cross-Site Request Forgery（CSRF）攻撃から保護するためのトークンを生成します。 --}}

{{-- HTTPメソッドの上書き：@method('PATCH')は、HTTPメソッドを上書きしてPATCHメソッドを使用します。これは、リソースの部分的な更新を行うための標準的なHTTPメソッドです。 --}}

{{-- タイトルフィールド：<input type="text" name="title" value="{{ old('title',$post->title) }}">は、ブログ投稿のタイトルを入力するためのテキストフィールドです。{{ old('title',$post->title) }}は、前回のリクエストで入力されたタイトルの値、または現在の投稿のタイトルを保持します。 --}}

{{-- タイトルのバリデーションエラー：@error('title') ... @enderrorは、タイトルフィールドのバリデーションエラーがある場合にエラーメッセージを表示します。 --}}

{{-- 詳細フィールド：<textarea name="detail"  rows="10">{{ old('detail',$post->detail) }}</textarea>は、ブログ投稿の詳細を入力するためのテキストエリアです。{{ old('detail',$post->detail) }}は、前回のリクエストで入力された詳細の値、または現在の投稿の詳細を保持します。 --}}

{{-- 詳細のバリデーションエラー：@error('detail') ... @enderrorは、詳細フィールドのバリデーションエラーがある場合にエラーメッセージを表示します。 --}}

{{-- 送信ボタン：<button>更新</button>は、フォームのデータを送信するためのボタンです。 --}}

{{-- 以上のように、このコードは既存のブログ投稿を更新するためのフォームを表示し、ユーザーが入力したデータのバリデーションエラーを表示する機 --}}
