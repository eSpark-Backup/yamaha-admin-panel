<?php

use App\Models\{Department, Group, Prefecture, Tenant};
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
        Schema::create('tenants', function (Blueprint $table) {

            $table->id();

            $table->foreignIdFor(Group::class)
                ->nullable()->constrained()->nullOnDelete();

            $table->foreignIdFor(Prefecture::class)
                ->nullable()->constrained()->nullOnDelete();

            $table->foreignIdFor(Department::class)
                ->nullable()->constrained()->nullOnDelete();

            $table->unsignedBigInteger('tenant_id')
                ->nullable()->default(0);

            $table->string('name');

            $table->string('code');

            $table->text('description')->nullable();

            $table->text('address')->nullable();

            $table->string('city')->nullable();

            $table->string('state')->nullable();

            $table->string('zip')->nullable();

            $table->string('phone')->nullable();

            $table->string('fax')->nullable();

            $table->text('business_hours')->nullable();

            $table->text('regular_holidays')->nullable();

            $table->text('access')->nullable();

            $table->timestamp('established_at');

            $table->tinyInteger('status')->default(0);

            $table->timestamps();
        });

        // Add tenants reference column to users column.
        Schema::table('users', function (Blueprint $table) {
            $table->foreignIdFor(Tenant::class)->after('id')
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
        // Drop tenant reference column from users table.
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('tenant_id');
        });

        Schema::dropIfExists('tenants');
    }
};
