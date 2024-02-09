<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; //LaravelのEloquent ORMとFactoryトレイトを使用するための宣言です。
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory; //Factoryトレイトを使用することを宣言しています。これにより、テストデータの生成などに便利なメソッドを使用できます。

    protected $fillable =[
        'body',
        'post_id',
    ];

    public function post(){
        return $this->belongsTo(post::class);
    }
}
// Commentという名前のモデルクラスを定義しています。
//namespace App\Models;：このクラスがApp\Modelsという名前空間に属していることを示しています。
// class Comment extends Model：Commentという名前のクラスを定義し、EloquentのModelクラスを継承しています。
// protected $fillable =['body', 'post_id'];：$fillableプロパティは、一括代入（Mass Assignment）を許可するフィールドを定義します。ここでは、bodyとpost_idフィールドが一括代入を許可されています。
// public function post(){ return $this->belongsTo(post::class); }：postメソッドは、CommentモデルがPostモデルに所属している（つまり、一つのポストに対して複数のコメントが存在する）関係を定義しています。
