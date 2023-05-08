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
        Schema::create('newmodels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string ('first_name',250);
            $table->string ('last_name',250);
            $table->text ('address_line_1');
            $table->text ('address_line_2')->nullable();
            $table->string ('mobile',100);
            $table->string ('email',200);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newmodels');
    }
};
