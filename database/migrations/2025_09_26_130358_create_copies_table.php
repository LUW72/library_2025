<?php

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
        Schema::create('copies', function (Blueprint $table) {
            $table->id();
            $table->foreignId("book_id")->constrained("books");
<<<<<<< HEAD
            // 0: keménykötésű, 1: puhakötésű
            $table->boolean('hardcovered')->default(1)->nullable();
            $table->year('publication');
            // 0: könyvtárban, 1: felhasználónál, 2: selet
=======
            //0: kemény, 1: puha
            $table->boolean('hardcovered')->default(1)->nullable();
            $table->year('publication');
            //0: konyvtárban, 1: felh-nál, 2: selejt, 3: ?
>>>>>>> 4fb75fe062fc5398ee306474d394d4e905998750
            $table->smallInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
