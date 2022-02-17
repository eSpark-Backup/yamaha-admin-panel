<?php

use App\Models\{Manufacturer, Prefecture, ProductModel, Tenant, User};
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Manufacturer::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(ProductModel::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Tenant::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Prefecture::class)->nullable()->constrained()->nullOnDelete();
            $table->uuid('slug');
            $table->string('title');
            $table->longText('description');
            $table->string('registration_type');
            $table->longText('comments')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('products');
    }
};
