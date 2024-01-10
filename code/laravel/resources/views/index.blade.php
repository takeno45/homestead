<!-- x-layout コンポーネントは、ページ全体の共通レイアウトを適用します。
     これにより、全てのページで一貫したデザインや構造を保持することができます。 -->
<x-layout>


    <h1>Hello Laravel!</h1>

      <!-- ul タグでリストの開始を宣言しています。このリストには$post変数から取り出された
         各投稿へのリンクが含まれます。 -->
            <ul>

                <!--＠フォーイーチ  ディレクティブは Laravel のテンプレートエンジンBladeによって提供されており、
             配列の各要素をループしてそれぞれの要素に対する処理を実行できます。 -->
                @foreach ($posts as $key=> $post)
                     <li>

                         <!-- a タグを使って、各投稿へのリンクを生成しています。
                     ‘route’ ヘルパー関数は、指定されたルート名とパラメータからURLを生成します。
                     ここでは 'text.posts' がルート名で、$key がそのパラメータです。 -->
                       <a href="{{ route('text.posts',$key)}}">{{ $post }}</a>
                    </li>
                @endforeach
                @foreach ($collection as $item)

                @endforeach
            </ul>
</x-layout>


