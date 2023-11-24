<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specific_skills', function (Blueprint $table) {
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
        Schema::dropIfExists('specific_skills');
    }
}
