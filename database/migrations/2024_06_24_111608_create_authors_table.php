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
        Schema::create('authors', function (Blueprint $table) {

            $table->uuid('id')->unique()->index()->primary();
            $table->string('first_name');
            $table->string('last__name');
            $table->string('middle__name');
            $table->bigInteger('subject_id')->unsigned();
            $table->integer('lvl');
            $table->integer('relation');
            $table->text('full_name_genetivus');
            $table->text('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
