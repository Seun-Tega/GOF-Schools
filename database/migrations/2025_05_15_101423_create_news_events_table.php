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
        Schema::create('news_events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['news', 'events'])->default('news');
            $table->enum('location', ['nigeria', 'other'] )->index();
            $table->date('event_date')->nullable()->index();
            $table->time('event_time')->nullable();
            $table->string('event_venue')->nullable();
            $table->longText('news_content');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_events');
    }
};
