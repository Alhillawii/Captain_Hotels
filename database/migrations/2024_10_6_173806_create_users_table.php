<?php

use App\Models\Employee;
use App\Models\Manager;
use App\Models\Room;
use App\Models\Supervisor;
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
            $table->id('id');
            $table->string('FullName');
            $table->enum('Gender', ['Male', 'Female']);
            $table->string('Address')->nullable();
            $table->string('Image')->nullable();
            $table->string('mobile');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->integer('age')->nullable();
            $table->string('Role')->nullable();
            $table->foreignIdFor(Room::class, 'room_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Supervisor::class, 'Supervisor_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Manager::class, 'manager_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Employee::class)->nullable()->constrained()->nullOnDelete();
            $table->softDeletes();
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
