<?php

use App\Models\Employee;
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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('Roomtype');
            $table->string('price');
            $table->boolean('status');
            $table->text('description');
            $table->decimal('Rate', 8, 2);
            $table->string('Roomimage')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('_room');
    }
};
