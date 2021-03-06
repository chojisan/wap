<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('menu_id');
            $table->string('title', 100);
            $table->string('slug', 256);
            $table->string('url', 256);
            $table->integer('level');
            $table->integer('order');
            $table->unsignedInteger('parent_id');
            $table->string('type', 50)->nullable();
            $table->unsignedInteger('component_id')->nullable();
            $table->string('icon', 50)->nullable();
            $table->string('img')->nullable();
            $table->integer('lft')->nullable();
            $table->integer('rgt')->nullable();
            $table->text('parameters')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('menu_items');
    }
}
