<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("registration_id")->constrained("registered_mobiles")->cascadeOnDelete();
            $table->string('name');
            $table->string("account_id");
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->text("profile_pic")->nullable();
            $table->string("mobile_number");
            $table->string("user_type");
            $table->string("subscription_status");
            $table->string('email')->unique();
            $table->boolean('receive_update');
            $table->timestamp('signup_date')->nullable();
            $table->timestamp('last_signin')->nullable();
            $table->timestamp('latest_activity')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
