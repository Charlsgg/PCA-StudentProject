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
        Schema::create('salary_standard_law', function (Blueprint $table) {
            $table->string('salary_grade')->primary(); // PK
            $table->decimal('step1',10,2);
            $table->decimal('step2',10,2);
            $table->decimal('step3',10,2);
            $table->decimal('step4',10,2);
            $table->decimal('step5',10,2);
            $table->decimal('step6',10,2);
            $table->decimal('step7',10,2);
            $table->decimal('step8',10,2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary_standard_law');
    }
};
