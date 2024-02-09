<x-layout>
    <a href="{{ route('index.posts')}}" class="re">戻る</a>
    <h1>検索画面</h1>
    <form action="{{ route('search.posts')}}" method="get">
        <label>
            Title
            <input type="text" name="query" value="{{ request()->query('query') }}">
        </label>
        @error('query')
        <div class="search">{{ $message}}</div>
        @enderror

        <div class="btn"><button>検索</button></div>

        <h1 class="no-border">検索結果</h1>
        @if($posts->isNotEmpty())
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('text.posts', $post->id) }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
        @else
        <p></p>
        @endif
    </form>
</x-layout>


{{-- このコードは、Laravelフレームワークを使用したブログ投稿の検索フォームを表示するためのBladeテンプレートです。具体的には、以下の機能が含まれています： --}}

{{-- 戻るリンク：<a href="{{ route('index.posts')}}" class="re">戻る</a>は、ブログ投稿の一覧ページへのリンクを提供します。 --}}

{{-- フォームの開始：<form action="{{ route('search.posts')}}" method="get">は、ブログ投稿を検索するためのフォームを開始します。このフォームは、GETメソッドでsearch.postsルート（PostControllerのsearchメソッド）にデータを送信します。 --}}

{{-- 検索フィールド：<input type="text" name="query" value="{{ request()->query('query') }}">は、検索クエリを入力するためのテキストフィールドです。{{ request()->query('query') }}は、前回のリクエストで入力された検索クエリの値を保持します。 --}}

{{-- 検索クエリのバリデーションエラー：@error('query') ... @enderrorは、検索クエリのバリデーションエラーがある場合にエラーメッセージを表示します。 --}}

{{-- 送信ボタン：<button>検索</button>は、フォームのデータを送信するためのボタンです。 --}}

{{-- 検索結果の表示：@if($posts->isNotEmpty()) ... @endifは、検索結果が存在する場合にそれらを一覧表示します。各投稿は、その投稿のタイトルを表示するリンクとして表示されます。 --}}

{{-- 以上のように、このコードはブログ投稿を検索するためのフォームを表示し、検索結果を一覧表示する機能を提供します。 --}}
