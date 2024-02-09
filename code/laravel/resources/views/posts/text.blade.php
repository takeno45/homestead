
<x-layout>


<a href="{{ route('index.posts')}}" class="re">戻る</a>
    <h1>
        <span>{{ $post->title }}</span>
        <a href="{{ route('edit.posts', $post->id) }}">編集</a>
        <form action="{{ route('destroy.posts', $post->id) }}" method="post">
            @method('DELETE')
            @csrf
            <button>削除</button>
        </form>
    </h1>
    <p>{{ $post->detail }}</p>

    <h2>Comments</h2>
    <ul>
        <li>
            <form class="comment" action="{{ route('store.comments', $post->id) }}" method="post">
                @csrf

                <input type="text" name="body">
                <button>コメント</button>
            </form>
        </li>
        @foreach ($post->comments()->latest()->get() as $comment)
            <li>
                {{ $comment->body}}
                <form class="dele" action="{{ route('destroy.comments', $comment->id) }}" method="post">
                    @method('delete')
                    @csrf

                    <button>×</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout>

{{-- このコードは、Laravelフレームワークを使用したブログ投稿の詳細ページを表示するためのBladeテンプレートです。具体的には、以下の機能が含まれています： --}}

{{-- 戻るリンク：<a href="{{ route('index.posts')}}" class="re">戻る</a>は、ブログの一覧ページへのリンクを提供します。 --}}

{{-- 投稿のタイトルと詳細：<h1><span>{{ $post->title }}</span></h1>と<p>{{ $post->detail }}</p>は、現在の投稿のタイトルと詳細を表示します。 --}}

{{-- 編集リンク：<a href="{{ route('edit.posts', $post->id) }}">編集</a>は、現在の投稿を編集するページへのリンクを提供します。 --}}

{{-- 削除ボタン：<form action="{{ route('destroy.posts', $post->id) }}" method="post">の中の<button>削除</button>は、現在の投稿を削除するためのボタンです。 --}}

{{-- コメントの投稿：<form class="comment" action="{{ route('store.comments', $post->id) }}" method="post">の中の<input type="text" name="body">と<button>コメント</button>は、新しいコメントを投稿するための入力フィールドとボタンです。 --}}

{{-- コメントの一覧：@foreach ($post->comments()->latest()->get() as $comment)の中の{{ $comment->body}}は、現在の投稿に対するすべてのコメントを最新のものから表示します。 --}}

{{-- コメントの削除：各コメントの下の<form class="dele" action="{{ route('destroy.comments', $comment->id) }}" method="post">の中の<button>×</button>は、そのコメントを削除するためのボタンです。 --}}
