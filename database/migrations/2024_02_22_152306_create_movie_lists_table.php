<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieListsTable extends Migration
{
    public function up()
    {
        Schema::create('movie_lists', function (Blueprint $table) {
            $table->foreignId('list_id')->constrained('user_lists');
            $table->foreignId('movie_id')->constrained('movies');
            $table->enum('status', ['Visto', 'Viendo', 'Pendiente'])->default('Pendiente');
            $table->primary(['list_id', 'movie_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movie_lists');
    }
}
