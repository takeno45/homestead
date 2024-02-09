<x-layout>
    <a href="{{ route('index.posts')}}" class="re">戻る</a>
    <h1>新規追加</h1>
    <form action="{{ route('store.posts')}}" method="post">
        @csrf

        <label>
            Title
            <input type="text" name="title" value="{{ old('title') }}">
        </label>
        @error('title')
        <div class="error">{{ $message}}</div>
        @enderror
        <label>
            Detail
            <textarea name="detail"  rows="10">{{ old('detail') }}</textarea>
        </label>
        @error('detail')
            <div class="error">{{ $message }}</div>
        @enderror
        <div class="btn"><button>新規追加</button></div>
    </form>
</x-layout>


{{-- このコードは、Laravelフレームワークを使用したブログ投稿の新規作成フォームを表示するためのBladeテンプレートです。具体的には、以下の機能が含まれています： --}}

{{-- 戻るリンク：<a href="{{ route('index.posts')}}" class="re">戻る</a>は、ブログの一覧ページへのリンクを提供します。 --}}

{{-- フォームの開始：<form action="{{ route('store.posts')}}" method="post">は、新しいブログ投稿を作成するためのフォームを開始します。このフォームは、POSTメソッドでstore.postsルート（PostControllerのstoreメソッド）にデータを送信します。 --}}

{{-- CSRFトークン：@csrfは、Cross-Site Request Forgery（CSRF）攻撃から保護するためのトークンを生成します。 --}}

{{-- タイトルフィールド：<input type="text" name="title" value="{{ old('title') }}">は、新しいブログ投稿のタイトルを入力するためのテキストフィールドです。{{ old('title') }}は、前回のリクエストで入力されたタイトルの値を保持します。 --}}

{{-- タイトルのバリデーションエラー：@error('title') ... @enderrorは、タイトルフィールドのバリデーションエラーがある場合にエラーメッセージを表示します。 --}}

{{-- 詳細フィールド：<textarea name="detail"  rows="10">{{ old('detail') }}</textarea>は、新しいブログ投稿の詳細を入力するためのテキストエリアです。{{ old('detail') }}は、前回のリクエストで入力された詳細の値を保持します。 --}}

{{-- 詳細のバリデーションエラー：@error('detail') ... @enderrorは、詳細フィールドのバリデーションエラーがある場合にエラーメッセージを表示します。 --}}

{{-- 送信ボタン：<button>新規追加</button>は、フォームのデータを送信するためのボタンです。 --}}

{{-- 以上のように、このコードは新しいブログ投稿を作成するためのフォームを表示し、ユーザーが入力したデータのバリデーションエラーを表示する機能を提供します。 --}}
