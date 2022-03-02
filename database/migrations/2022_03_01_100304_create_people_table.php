<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id('people_id');
            $table->string('people_name',60);
            $table->string('people_email',100);
            $table->string('people_password');
            $table->enum('people_gender',['M','F','O']);
            $table->text('people_address')->nullable( );
            $table->timestamps();
            // to add columns
            // php artisan make:migration add_columns_to_people_table
            // this will create another migration to which you can add 
            //more columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
