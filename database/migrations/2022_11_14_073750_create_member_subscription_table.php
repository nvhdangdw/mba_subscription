<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_subscription', function (Blueprint $table) {
            $table->id();
            $table->string('code', 32);
            $table->integer('opencart_subscription_id');
            $table->integer('opencart_order_id');
            $table->integer('member_id');
            $table->text('meta')->nullable();
            $table->timestamp('purchased_date')->useCurrent();
            $table->integer('original_duration');
            $table->integer('level');
            $table->string('client_email', 225)->nullable();
            $table->timestamp('activated_date')->nullable();
            $table->timestamp('terminated_date')->nullable();
            $table->integer('remain_duration')->nullable();
            $table->smallInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::dropIfExists('member_subscription');
    }
}
