<?php namespace Laramab\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLaramabMovieMovies2 extends Migration
{
    public function up()
    {
        Schema::table('laramab_movie_movies', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('laramab_movie_movies', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
