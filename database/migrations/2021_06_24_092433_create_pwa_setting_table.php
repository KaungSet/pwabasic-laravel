<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePwaSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pwa_setting', function (Blueprint $table) {
            $table->id();
            $table->string('domain',100)->nullable();
            $table->string('tenant_id',36)->nullable();
            $table->json('data')->nullable();
            $table->boolean('status')->default(0);      $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pwa_setting');
    }
}
