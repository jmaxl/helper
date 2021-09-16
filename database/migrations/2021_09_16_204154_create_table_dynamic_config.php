<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDynamicConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic_configs', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('value')->nullable();
            $table->string('type');
            $table->dateTime('updatedAt')->useCurrentOnUpdate()->default(now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dynamic_configs');
    }
}
