<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couriers', function (Blueprint $table) {
            $table->id();
            $table->string('sector');
            $table->string('position');
            $table->string('employment_status');
            $table->string('availability');
            $table->string('liability_status');
            $table->string('smart_phone');
            $table->string('forename');
            $table->string('surname');
            $table->string('dob');
            $table->string('uk_citizen');
            $table->string('uk_authorized');
            $table->string('insurance_number');
            $table->string('address');
            $table->string('valid_license');
            $table->string('passport');
            $table->string('driver_license');
            $table->string('contact_time');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('couriers');
    }
}
