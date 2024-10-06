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
            $table->string('Room_Type');
            $table->boolean('availability_status');
            $table->text('Room_description');
            $table->decimal('Room_Rate', 8, 2);
            $table->string('Room_img')->nullable();
            $table->integer('capacity');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('_room');
    }
};
