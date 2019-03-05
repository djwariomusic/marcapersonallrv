<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      schema::create('projects', function (Blueprint $table){
        $table->increments('idproject');
        $table->string('name');
        $table->string('enterprise');
        $table->string('url');
        $table->string('urlgaleria');
        $table->string('description');
        $table->string('technology');
        $table->string('participation');
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
      Schema::drop('projects');
    }
}
