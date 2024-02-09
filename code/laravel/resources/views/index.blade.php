
<x-layout>
    <h1>
        <span>Hello Laravel!</span>
        <a href="{{ route('create.posts')}}">新規追加</a>
        <a href="{{ route('search.posts')}}" class="search">検索</a>

    </h1>
            <ul>


                @foreach ($posts as $post)
                     <li>
                       <a href="{{ route('text.posts',$post->id)}}">{{ $post->title }}</a>
                    </li>
                @endforeach

            </ul>
</x-layout>


{{-- このコードは、Laravelフレームワークを使用したブログ投稿の一覧を表示するためのBladeテンプレートです。具体的には、以下の機能が含まれています： --}}

{{-- レイアウト：<x-layout>タグは、共通のレイアウトコンポーネントを使用します。このコンポーネントは、全てのページで共通して使用されるレイアウト部分を定義しています。 --}}

{{-- 新規追加リンク：<a href="{{ route('create.posts')}}">新規追加</a>は、新しいブログ投稿を作成するページへのリンクを提供します。 --}}

{{-- 検索リンク：<a href="{{ route('search.posts')}}" class="search">検索</a>は、ブログ投稿を検索するページへのリンクを提供します。 --}}

{{-- 投稿の一覧：@foreach ($posts as $post) ... @endforeachは、全てのブログ投稿を一覧表示します。各投稿は、その投稿のタイトルを表示するリンクとして表示されます。 --}}

{{-- 以上のように、このコードはブログ投稿の一覧を表示し、各投稿の詳細ページへのリンク、新しい投稿を作成するページへのリンク、投稿を検索するページへのリンクを提供します --}}
