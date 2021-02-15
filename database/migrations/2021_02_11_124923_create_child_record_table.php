<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_record', function (Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->string('dateOfBirth');
            $table->string('gender');
            $table->string('schoolYear');
            $table->string('nameOfSchool');
            $table->text('additionalNotes')->nullable();
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
        Schema::dropIfExists('child_record');
    }
}
