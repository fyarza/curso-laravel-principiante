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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body')->nullable();
            $table->date('published_at')->nullable();
            $table->integer('categoria_id')->nullable();
            $table->integer('user_id');
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate("cascade")
            ->onDelete('cascade');

            $table->foreign('categoria_id')
            ->references('id')
            ->on('categorias')
            ->onUpdate("cascade")
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
        Schema::dropIfExists('posts');
        Schema::table('posts',function(Blueprint $table){
            $table->dropForeign('categoria_id');
            $table->dropForeign('user_id');
        });
    }
}
