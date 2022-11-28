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
        Schema::table('products', function (Blueprint $table) {
            $table->string('access');
            $table->string('short_summary');
            $table->integer('subproductcategory_id')->nullable();
            $table->string('ideal_for')->nullable();
            $table->string('alternative_to')->nullable();
            $table->string('redeem_url')->nullable();
            $table->text('redeem_instructions')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
