<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id('holiday_id');
            $table->string('holiday_name');
            $table->string('holiday_type');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('holidays');
    }
}
