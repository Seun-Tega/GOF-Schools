<?php

use App\Enums\ClassEnum;
use App\Enums\Location;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('address');
            $table->enum('gender', ['male', 'female']);
            $table->date('dob');
            $table->string('guardian_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('relationship_to_student');
            $table->string('guardian_address')->nullable();
            $table->enum('student_class', array_column(ClassEnum::cases(), 'value'));
            $table->enum('student_type', ['day', 'boarding']);
            $table->enum('location', array_column(Location::cases(), 'value'));
            $table->string('condition')->nullable();
            $table->string('message')->nullable(); 
            $table->boolean('terms')->default(false); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
