<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key

            // Basic user information
            $table->string('first_name'); // User's first name
            $table->string('middle_name')->nullable(); // Middle name (optional)
            $table->string('last_name'); // User's last name

            // Unique identifiers
            $table->string('username')->unique(); // Unique username for login/display
            $table->string('email')->unique(); // Unique email for authentication
            $table->string('password'); // Hashed password for security

            // Contact & Profile information
            $table->string('phone', 20)->unique()->nullable(); // Phone number (optional, unique)
            $table->string('profile_photo_path')->nullable(); // Stores the path of the profile picture

            // Gender selection
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // Optional gender field

            // TODO: Implement nationalities in a separate table
            /*$table->foreignId('nationality_id')->nullable()
                ->constrained('nationalities') // Links to the nationalities table
                ->nullOnDelete(); // If a nationality is deleted, set this field to null*/

            // Personal details
            $table->date('date_of_birth')->nullable(); // Birthdate (optional)

            // Address fields (Can be expanded later for full address functionality)
            $table->string('address')->nullable(); // Street address (optional)
            $table->string('city')->nullable(); // City (optional)
            $table->string('state')->nullable(); // State or region (optional)
            $table->string('zip_code')->nullable(); // Postal code (optional)
            $table->string('country')->nullable(); // Country name (optional)

            // User account status (for managing active/inactive/banned users)
            $table->enum('status', ['active', 'inactive', 'banned'])->default('active');

            // TODO: Implement user preferences/settings in a separate table
            /*$table->foreignId('preference_id')->nullable()
                ->constrained('preferences') // Links to the preferences table
                ->nullOnDelete(); // If a preference is deleted, set this field to null*/

            // Email verification timestamp (Laravel supports email verification)
            $table->timestamp('email_verified_at')->nullable();

            // Track the last time the user logged in
            $table->timestamp('last_login_at')->nullable();

            // Role-based access control (Could be expanded later with a separate roles table)
            $table->enum('role', ['admin', 'user', 'moderator'])->default('user');

            // Social authentication fields (for OAuth login like Google, Facebook, etc.)
            $table->string('provider')->nullable(); // Name of the provider (e.g., Google, Facebook)
            $table->string('provider_id')->nullable(); // Unique ID from provider

            // API authentication token (If needed for API-based authentication)
            $table->string('api_token', 80)->unique()->nullable();

            // Timestamps for record creation and updates
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns

            // Soft deletes (Allows "deleting" users without removing data permanently)
            $table->softDeletes();

            // Indexing to improve search performance
            $table->index(['username']); // Index for quick username lookups

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Drops the users table when rolling back migration
    }
};
