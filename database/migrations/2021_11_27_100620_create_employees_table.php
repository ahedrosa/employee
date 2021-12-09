<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     * empleado: id, nombre, apellidos, email, telefono, fechacontrato, idpuesto, iddepartamentos
     * 
     * 
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('name',80)->default('sin especificar');
            $table->string('surname',160)->default('sin especificar');
            $table->string('email',100)->unique()->default('sin especificar'); /* ?????*/
            $table->string('phone',9)->unique();
            $table->date('hiringDate')->useCurrent();
            $table->bigInteger('idworkstation')->unsigned()->nullable();
            $table->bigInteger('iddepartment')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('idworkstation')->references('id')->on('workstation');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
