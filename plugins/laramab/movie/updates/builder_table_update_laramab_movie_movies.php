<?php namespace Laramab\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLaramabMovieMovies extends Migration
{
    public function up()
    {
        Schema::table('laramab_movie_movies', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('laramab_movie_movies', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
