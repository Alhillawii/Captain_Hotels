<?php

use App\Models\User;
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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('FullName');
            $table->string('Email');
            $table->integer('age');
            $table->string('Emp_position');
            $table->string('job-specific');
            $table->date('employment_date');
            // $table->foreignIdFor(User::class, 'user_id')->nullable()->constrained()->cascadeOnDelete();
       
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_employee');
    }
};
