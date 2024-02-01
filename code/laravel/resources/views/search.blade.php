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
