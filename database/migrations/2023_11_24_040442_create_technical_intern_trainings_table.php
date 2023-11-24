<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalInternTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_intern_trainings', function (Blueprint $table) {
            $table->id();
            $table->text('title_en')->nullable();
            $table->text('title_jp')->nullable();
            $table->text('total_sending')->nullable();
            $table->text('total_waiting')->nullable();
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
        Schema::dropIfExists('technical_intern_trainings');
    }
}
