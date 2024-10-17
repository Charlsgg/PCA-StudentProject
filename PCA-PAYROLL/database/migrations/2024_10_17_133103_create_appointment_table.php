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
        Schema::create('appointment', function (Blueprint $table) {
            $table->string('appointment_type')->primary(); // PK
            $table->boolean('mandatory_deduction')->default(false); 

            //foreign keys
            $table->string('compensation_code')->reference('compensation_code')->on('employee_compensations'); 
            $table->string('deduction_code')->reference('deduction_code')->on('employee_deduction');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
