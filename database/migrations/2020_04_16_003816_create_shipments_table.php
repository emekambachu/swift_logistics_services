<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', static function (Blueprint $table) {

            $table->id();

            $table->integer('parcel_id')->unsigned()->index();
            $table->foreign('parcel_id')->references('id')->on('parcels')->onDelete('cascade');

            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('tracking_id');

            $table->string('origin');
            $table->string('destination');

            $table->tinyInteger('is_active')->default('1');

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
        Schema::dropIfExists('shipments');
    }
}
