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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('slug');
            $table->text('desc');
            $table->text('TLDR');
            $table->text('keypoints');
            $table->float('price')->nullable();
            $table->float('discount')->nullable();
            $table->string('url')->nullable();
            $table->integer('user_id');
            $table->string('downloadable')->nullable();
            $table->integer('qty');
            $table->enum('is_approved', array('0','1'))->default('0');
            $table->integer('uniqueId');
            $table->string('featureimage');
            $table->string('certificate')->nullable();
            $table->integer('resourcetype_id')->nullable();
            $table->integer('plantype_id')->nullable();
            $table->integer('time_offer')->nullable();
            $table->date('time_offer_ends')->nullable();
            $table->text('integrations');
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
        Schema::dropIfExists('products');
    }
};
