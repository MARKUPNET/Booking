<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_posts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('plan');
            $table->string('woman');
            $table->string('man');
            $table->string('childwoman');
            $table->string('childman');
            $table->string('option1');
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
        Schema::dropIfExists('booking_posts');
    }
}
