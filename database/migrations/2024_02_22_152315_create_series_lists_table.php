<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesListsTable extends Migration
{
    public function up()
    {
        Schema::create('series_lists', function (Blueprint $table) {
            $table->foreignId('list_id')->constrained('user_lists');
            $table->foreignId('series_id')->constrained('series');
            $table->enum('status', ['Visto', 'Viendo', 'Pendiente'])->default('Pendiente');
            $table->primary(['list_id', 'series_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('series_lists');
    }
}
