<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_subject')->default("");
            $table->string('behaviour')->default("");;
            $table->integer('user_id');
            $table->integer('tutor_id');
            $table->string('date');
            $table->text('current_grade')->default("");;
            //$table->text('areas_to_improve');
           // $table->text('procedure_to_use_medicine');
            $table->text('feedback')->default("");;
            $table->string('signature');
            

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
        Schema::dropIfExists('prescriptions');
    }
}

