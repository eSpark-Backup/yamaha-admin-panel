<?php

use App\Models\Product;
use App\Models\Quotation;
use App\Models\User;
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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('company');
            $table->string('zip');
            $table->string('prefecture');
            $table->string('municipality');
            $table->string('lot');
            $table->string('building');
            $table->string('phone');
            $table->string('person_in_charge');
            $table->string('desired_delivery_from');
            $table->string('desired_delivery_to');
            $table->string('requester_name');
            $table->string('requester_email');
            $table->string('requester_phone');
            $table->text('transmission_matters')->nullable();
            $table->timestamps();
        });

        Schema::create('product_quotation', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Quotation::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('product_quotation');
        Schema::dropIfExists('quotations');
    }
};
