<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->default(null)->nullable();
            $table->string('product');
            $table->integer('fee');
            $table->string('design_file');
            $table->text('design_content');
            $table->text('additional_info');
            $table->timestamp('deadline');
            $table->string('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('design_jobs');
    }
}
