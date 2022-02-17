<?php

use App\Models\FaqCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(FaqCategory::class)->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->longText('body');
            $table->string('published')->default('both');
            $table->string('visibility')->default('public');
            $table->dateTime('publication_started_at');
            $table->dateTime('publication_ended_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
};
