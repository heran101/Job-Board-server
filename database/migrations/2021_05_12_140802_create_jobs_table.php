<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('description')->nullable();
            $table->string('required_years_of_exp')->nullable();
            $table->unsignedBigInteger('employer_id');
            $table->string('location')->default('Addis Ababa, Ethiopia');
            $table->unsignedBigInteger('job_category_id')->nullable();
            $table->string('tags')->nullable();
            $table->string('status')->nullable();
            $table->date('expDate')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
