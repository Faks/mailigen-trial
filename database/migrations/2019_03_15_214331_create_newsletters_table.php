<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewslettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('public_name')->nullable();
            $table->string('public_list_name')->nullable();
            $table->string('subscription_permission_reminder')->nullable();
            $table->string('to')->nullable();
            $table->string('checked_people_subscribe')->nullable();
            $table->string('checked_people_unsubscribe')->nullable();
            $table->string('checked_people_change_preferences')->nullable();
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
        Schema::dropIfExists('newsletters');
    }
}
