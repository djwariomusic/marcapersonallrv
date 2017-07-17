<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('posts', function (Blueprint $table){
          $table->increments('id');
          $table->string('title');
          $table->text('resume', 300);
          $table->text('description');
          $table->date('publish_date');
          $table->tinyInteger('status'); // 0 No publicado / 1 Publicado
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('posts');
    }
}
