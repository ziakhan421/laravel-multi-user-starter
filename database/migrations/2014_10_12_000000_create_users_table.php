<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique()->nullable();
            $table->enum('role', ['admin', 'company', 'branch-manager', 'inspector'])->default('inspector');
            $table->string('picture')->nullable();
            $table->string('telephone')->nullable();
            $table->foreignId('company_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('company_name')->nullable();
            $table->integer('plan')->nullable();
            $table->date('plan_date')->nullable();
            $table->text('note')->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
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
