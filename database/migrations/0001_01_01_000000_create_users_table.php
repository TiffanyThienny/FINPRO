<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('first_name'); // First Name
            $table->string('last_name'); // Last Name
            $table->string('email')->unique(); // Email harus unik
            $table->string('password'); // Password
            $table->string('photo')->nullable(); // Photo (opsional)
            $table->text('bio')->nullable(); // Bio (opsional)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
