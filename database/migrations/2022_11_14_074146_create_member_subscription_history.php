<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberSubscriptionHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_subscription_history', function (Blueprint $table) {
            $table->id();
            $table->integer('subscription_id');
            $table->integer('member_id');
            $table->string('client_email', 225)->nullable();
            $table->string('description', 255)->nullable();
            $table->text('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_subscription_history');
    }
}
