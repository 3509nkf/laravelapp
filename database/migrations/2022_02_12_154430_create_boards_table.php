<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //テーブル生成の処理
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id');
            $table->string('title');
            $table->string('message');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //テーブル削除の処理
    {
        Schema::dropIfExists('boards');
    }
}
