<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSSWJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_s_w_jobs', function (Blueprint $table) {
            $table->id();
            $table->text('title_en')->nullable();
            $table->text('title_jp')->nullable();

            $table->text('description_en')->nullable();
            $table->text('description_jp')->nullable();

            $table->text('photo')->nullable();
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
        Schema::dropIfExists('s_s_w_jobs');
    }
}
