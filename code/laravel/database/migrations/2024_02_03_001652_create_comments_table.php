<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('body');
            $table->unsignedBigInteger('post_id');
            $table->timestamps();
            $table
                 ->foreign('post_id')
                 ->references('id')
                 ->on('posts')
                 ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}


// このコードは、Laravelフレームワークを使用したPHPのマイグレーションクラスを定義しています。具体的には、commentsテーブルをデータベースに作成するためのマイグレーションを定義しています。

// 以下に、各部分の詳細を説明します：

// class CreateCommentsTable extends Migration：CreateCommentsTableという名前のクラスを定義し、LaravelのMigrationクラスを継承しています。これにより、このクラスはデータベースのマイグレーションを行うためのメソッドを提供します。

// public function up(){ ... }：upメソッドは、マイグレーションを適用するためのメソッドです。ここでは、Schema::createメソッドを使用してcommentsテーブルを作成しています。このテーブルには、id（主キー）、body（コメントの本文）、post_id（コメントが関連付けられている投稿のID）の3つのカラムがあります。また、timestampsメソッドを呼び出すことで、created_atとupdated_atの2つのタイムスタンプカラムも自動的に作成されます。最後に、post_idカラムをpostsテーブルのidカラムに対する外部キーとして設定しています。これにより、postsテーブルのレコードが削除されたときに、その投稿に関連するcommentsテーブルのレコードも自動的に削除されます（onDelete('cascade')）。

// public function down(){ ... }：downメソッドは、マイグレーションを元に戻す（ロールバックする）ためのメソッドです。ここでは、Schema::dropIfExistsメソッドを使用してcommentsテーブルが存在する場合にはそれを削除しています。

// 以上のように、このコードはcommentsテーブルの作成と削除を行うためのマイグレーションを定義しています。Laravelのphp artisan migrateコマンドを使用すると、このマイグレーションが適用され、commentsテーブルがデータベースに作成されます。同様に、php artisan migrate:rollbackコマンドを使用すると、このマイグレーションがロールバックされ、commentsテーブルがデータベースから削除されます
