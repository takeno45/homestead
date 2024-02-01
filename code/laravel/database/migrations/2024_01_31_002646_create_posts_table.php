<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


// マイグレーションを使用して新しいデータベーステーブルを作成。
// 名前はpostsという新しいテーブルを作成
class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // UPメソッド　マイグレーションが実行されるときに呼び出しされる
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); //idカラムの作成
            $table->string('title');//tableという文字列カラムの作成
            $table->text('detail');//detailakというテキストカラムの作成
            $table->timestamps();//created_at と updated_atの２つのタイムスタンプカラムを作成(新規作成や更新ごとにタイムスタンプを自動的に作成）

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
