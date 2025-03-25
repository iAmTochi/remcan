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
            $table->string('type')->default('associate');
            $table->string('surname');
            $table->string('first_name');
            $table->string('other_names')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->unique();
            $table->text('address')->nullable();
            $table->text('photo')->nullable();
            $table->string('nationality')->nullable();
            $table->string('job_title')->nullable();
            $table->string('organization_name')->nullable();
            $table->text('organization_address')->nullable();
            $table->enum('years_of_experience', ['0–2','3–5','6–10','10+'])->default('0–2');
            $table->foreignId('category_id')->nullable();
            $table->foreignId('state_id')->nullable();
            $table->foreignId('lga_id')->nullable();
            $table->foreignId('referred_by')->nullable();
            $table->longText('why_you_want_to_join')->nullable();
            $table->longText('value_you_bring')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
