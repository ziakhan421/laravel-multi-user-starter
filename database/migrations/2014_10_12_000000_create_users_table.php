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
            $table->string('company_name')->nullable();
            $table->string('username')->unique()->nullable();
            $table->foreignId('company_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('branch_Id')->constrained()->cascadeOnDelete();
            $table->enum('role', ['Admin', 'Company', 'Branch Manager', 'Inspector'])->default('Inspector');
            $table->integer('plan')->nullable();
            $table->text('note')->nullable();
            $table->string('picture')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
