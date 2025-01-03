<?php

use App\Models\Camping;
use App\Models\Room;
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
    {Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->date('Start_date');
        $table->date('End_date');
        $table->softDeletes();
        $table->foreignIdFor(Room::class)->nullable()->constrained()->cascadeOnDelete();
        $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_booking');
    }
};
