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
            $table->foreign('post_id') // 'post_id' 列に外部キー制約を追加します
            ->references('id') // 'posts' テーブルの 'id' 列を参照します
            ->on('posts') // 参照先のテーブルを指定します
            ->onDelete('cascade'); // 'posts' テーブルのレコードが削除されたときに、関連する 'comments' テーブルのレコードも自動的に削除します
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
