<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_components', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('form_id');
            $table->string('name');
            $table->string('label');
            $table->string('type'); //input, textarea, select, checkbox, radiobutton
            $table->integer('unique'); //1,0
            $table->integer('required'); //1,0
            $table->integer('nullable'); //1,0
            $table->integer('min_length');
            $table->integer('max_length');
            $table->string('default_value')->nullable();
            $table->text('parameters')->nullable();
            $table->integer('order');
            $table->string('access');
            $table->string('status');
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
        Schema::dropIfExists('form_components');
    }
}
