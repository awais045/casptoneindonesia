<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pengantar1');
            $table->string('pengantar2');
            $table->text('pengantar3');
            $table->timestamps();
        });

         DB::table('abouts')->insert(
            array(            
                'id' => '1',    
                'pengantar1' => 'DON’T LOOK FURTHER, HERE IS THE KEY',
                'pengantar2' => 'We’re Capstone Indonesia',
                'pengantar3' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim. sed do eiusmod tempor incididunt',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
