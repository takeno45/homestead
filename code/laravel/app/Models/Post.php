<?php

namespace App\Models; //名前空間 APPの中のModelsに入っているという意味

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'detail',
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}


// このコードは、Laravelフレームワークを使用したPHPのPostモデルクラスを定義しています。具体的には、以下の機能が含まれています：

// namespace App\Models;：この行は、このクラスがApp\Modelsという名前空間に属していることを示しています。名前空間は、クラスや関数、定数などの名前の衝突を防ぐために使用されます。

// use Illuminate\Database\Eloquent\Factories\HasFactory;とuse Illuminate\Database\Eloquent\Model;：これらの行は、LaravelのEloquent ORMとFactoryトレイトを使用するための宣言です。

// class Post extends Model：Postという名前のクラスを定義し、EloquentのModelクラスを継承しています。これにより、Postクラスはデータベースのpostsテーブルと対応するモデルとなります。

// use HasFactory;：Factoryトレイトを使用することを宣言しています。これにより、テストデータの生成などに便利なメソッドを使用できます。

// protected $fillable =['title', 'detail'];：$fillableプロパティは、一括代入（Mass Assignment）を許可するフィールドを定義します。ここでは、titleとdetailフィールドが一括代入を許可されています。

// public function comments(){ return $this->hasMany(Comment::class); }：commentsメソッドは、PostモデルがCommentモデルと「一対多」の関係にあることを定義しています。つまり、一つのポストに対して複数のコメントが存在するという関係です。

// 以上のように、このコードはLaravelのモデルクラスを定義し、データベースのpostsテーブルと対応するPostモデルを作成するためのものです。このモデルを通じて、postsテーブルのレコードを取得、挿入、更新、削除することができます。また、他のモデルとのリレーションシップも定義できます。このコードはLaravelのモデルクラスを定義し、データベースのpostsテーブルと対応するPostモデルを作成するためのものです。このモデルを通じて、postsテーブルのレコードを取得、挿入、更新、削除することができます。また、他のモデルとのリレーションシップも定義できます。
