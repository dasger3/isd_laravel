<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_experts', function (Blueprint $table) {
            $table->id();
            $table->string("photo");
            $table->string("artname");
            $table->text("theme1");
            $table->text("text");
            $table->string("tag");
            $table->integer("category_id");
            $table->date("date");
            $table->integer("expert_id");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_experts');
    }
}
