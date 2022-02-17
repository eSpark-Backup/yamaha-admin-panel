<?php

use App\Models\Prefecture;
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
        Schema::create('prefectures', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
        });

        // Add Prefecture reference column to users table. 
        Schema::table('users', function (Blueprint $table) {
            $table->foreignIdFor(Prefecture::class)->after('city')
                ->nullable()->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Remove prefecture reference column from users table.
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('prefecture_id');
        });

        Schema::dropIfExists('prefectures');
    }
};
