<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('queue')->nullable()->unique();
            $table->string('no_antrian');
            $table->string('montir')->nullable();;
            $table->string('name_stnk');
            $table->string('number_plat');
            $table->string('nama_mobil');
            $table->string('jenis_mobil');
            $table->date('service_date');
            $table->text('complaint');
            $table->string('status')->default('menunggu diproses');
            $table->integer('priceService')->nullable();
            $table->integer('total_price')->nullable();
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
        Schema::dropIfExists('services');
    }
}
