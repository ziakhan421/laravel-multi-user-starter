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
            $table->string('username')->unique()->nullable();
            $table->foreignId('company_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('company_name')->nullable();
            $table->enum('role', ['admin', 'company', 'branch-manager', 'inspector'])->default('inspector');
            $table->integer('plan')->nullable();
            $table->text('note')->nullable();
            $table->string('picture')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
