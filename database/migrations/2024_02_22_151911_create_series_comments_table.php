<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('series_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('series_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('series_comments');
    }
}
