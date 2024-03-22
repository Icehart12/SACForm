<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->string('address');
            $table->string('id_person');
            $table->string('district');
            $table->string('city');
            $table->integer('number_id');
            $table->string('province');
            $table->string('religion');
            $table->string('date_of_birth');
            $table->string('work',128)->nullable();
            $table->decimal('monthly_salary');
            $table->string('cellphone_no');
            $table->string('work_location',128)->nullable();
            $table->string('section_department',128)->nullable();
            $table->string('condition_of_health');
            $table->string('benepisyaryo_ng_UCT',128)->nullable();
            $table->string('benepisyaro_ng_4Ps',128)->nullable();
            $table->string('Katutubo_(Grupo)',128)->nullable();
            $table->string('Others',128)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
