<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkstationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     * puesto: id, nombre, minimo, maximo
     * 
     */
    public function up()
    {
        Schema::create('workstation', function (Blueprint $table) {
            $table->id();
            $table->string('name',80)->unique();
            $table->decimal('lowestsalary',8,2)->default(0);
            $table->decimal('highestsalary',8,2)->default(0);
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
        Schema::dropIfExists('workstation');
    }
}
