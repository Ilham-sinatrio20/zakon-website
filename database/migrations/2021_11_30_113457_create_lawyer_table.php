<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyerTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lawyer', 100);
            $table->string('phone', 20);
            $table->string('place_birth', 50)->nullable();
            $table->date('date_birth');
            $table->string('address', 255);
            $table->string('picture', 255);
            $table->string('email', 50)->unique();
            $table->string('jenis_hukum', 100);
            $table->longText('deskripsi')->nullable();
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
        Schema::dropIfExists('lawyer');
    }
}
