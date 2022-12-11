<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showrooms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name');
            $table->string('owner');
            $table->string('brand');
            $table->date('purchase_date');
            $table->text('description');
            $table->string('image');
            $table->enum('status', ['Lunas', 'Belum-Lunas']);
            $table->timestamps();
        });
        //nambahin fk nya user buat table showroom
        Schema::table('showrooms', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
