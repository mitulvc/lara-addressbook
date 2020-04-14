<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->integer('model_id');
            $table->string('model_type');
            $table->string('formated_address',200)->nullable();
            $table->string('latitude',50)->nullable();
            $table->string('longitude',50)->nullable();
            $table->tinyInteger('is_primary')->default(0)->comment('1 - Primary, 0 - Non Primary');
            $table->tinyInteger('order')->nullable();
            $table->json('extra_attributes')->nullable();
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
        Schema::dropIfExists('address');
    }
}
