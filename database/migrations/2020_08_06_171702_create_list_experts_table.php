<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_experts', function (Blueprint $table) {
            $table->id();
            $table->string("photo");
            $table->string("name");
            $table->string("prof");
            $table->string("facebook");
            $table->string("email");
            $table->string("linked");
            $table->boolean("permanent");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_experts');
    }
}
