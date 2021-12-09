<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     * departamento: id, nombre, localizacion, idempleadojefe
     * 
     */
    public function up()
    {
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->string('name',80)->unique();
            $table->string('location',80)->default('sin especificar');
            $table->bigInteger('idemployeemanager')->unsigned()->nullable(); /* ????? unsignedBigInteger()*/
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
        Schema::dropIfExists('department');
    }
}
