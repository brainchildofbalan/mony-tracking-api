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
        Schema::create('item_lists', function (Blueprint $table) {
            $table->id();
            $table->string('item_name')->default('0');
            $table->string('item_qty')->default('0');
            $table->longText('item_description')->default('0');
            $table->integer('item_price')->default('0');
            $table->string('item_old_price')->default('0');
            $table->string('item_subs')->default('0');
            $table->string('item_location')->default('0');
            $table->string('item_tags')->default('0');
            $table->string('item_isWishlist')->default('0');
            $table->string('item_isPending')->default('0');
            $table->string('item_isOverLoad')->default('0');
            $table->string('item_isNew')->default('0');
            $table->string('item_isDisabled')->default('0');
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
        Schema::dropIfExists('item_lists');
    }
};
