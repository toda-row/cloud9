<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_name');
            $table->integer('item_number');
            $table->integer('item_amount');
            $table->datetime('published');
            $table->timestamps();
        });
    }

        // item_name=本の名前
        // item_number=本の冊数
        // item_amount=本の金額
        // published=本の公開日時
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
