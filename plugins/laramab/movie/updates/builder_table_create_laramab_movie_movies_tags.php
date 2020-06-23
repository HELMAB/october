<?php namespace Laramab\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLaramabMovieMoviesTags extends Migration
{
    public function up()
    {
        Schema::create('laramab_movie_movies_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('tag_id');
            $table->primary(['movie_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('laramab_movie_movies_tags');
    }
}
