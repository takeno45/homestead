{{-- 共通部分　　<x-layout> --}}
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <title>掲示板</title>
    </head>
    <body>
        <div class="container">

           {{ $slot }}
        </div>
    </body>
</html>


{{-- このコードは、Laravelフレームワークを使用したBladeテンプレートの一部です。具体的には、全てのページで共通して使用されるレイアウト部分を定義しています。 --}}
{{-- 以下に、各部分の詳細を説明します： --}}

{{-- <!DOCTYPE html>：この行は、このドキュメントがHTML5で書かれていることをブラウザに伝えます。 --}}

{{-- <html lang="ja">：この行は、このHTMLドキュメントが日本語で書かれていることをブラウザに伝えます。 --}}

{{-- <head>...</head>：この部分は、HTMLドキュメントのヘッド部分を定義しています。ここには、メタデータやCSSのリンクなどが含まれます。 --}}

{{-- <meta charset="UTF-8">：この行は、このHTMLドキュメントの文字エンコーディングがUTF-8であることをブラウザに伝えます。 --}}

{{-- <meta name="viewport" content="width=device-width, initial-scale=1.0">：この行は、ビューポート（ブラウザの表示領域）の設定を行います。これにより、レスポンシブデザインが可能になります。 --}}

{{-- <link rel="stylesheet" href="{{url('css/style.css')}}">：この行は、外部CSSファイル（style.css）をこのHTMLドキュメントにリンクしています。{{url('css/style.css')}}は、LaravelのBladeテンプレートエンジンの構文で、css/style.cssへの絶対URLを生成します。 --}}

{{-- <body>...</body>：この部分は、HTMLドキュメントのボディ部分を定義しています。ここには、実際にブラウザに表示されるコンテンツが含まれます。 --}}

{{-- {{ $slot }}：この部分は、Bladeテンプレートのスロットを定義しています。スロットは、子テンプレートから挿入されるコンテンツのプレースホルダーです。つまり、各ページ固有のコンテンツはこの位置に挿入されます。 --}}

{{-- 以上のように、このコードは全てのページで共通して使用されるレイアウトを定義しています。各ページ固有のコンテンツは、このレイアウトのスロット部分に挿入されます。以上のように、このコードは全てのページで共通して使用されるレイアウトを定義しています。各ページ固有のコンテンツは、このレイアウトのスロット部分に挿入されます。 --}}
