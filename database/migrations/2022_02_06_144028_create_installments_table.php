<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->foreignId('member_id')->nullable()->references('id')->on('members')->onDelete('cascade');
            $table->foreignId('team_id')->nullable()->references('id')->on('teams')->onDelete('cascade');
            $table->foreignId('worker_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->decimal('savings', $precision = 8, $scale = 2)->default(0);
            $table->decimal('total_savings', $precision = 8, $scale = 2)->default(0);
            $table->decimal('installment', $precision = 8, $scale = 2)->default(0);
            $table->decimal('total_paid', $precision = 8, $scale = 2)->default(0);
            $table->decimal('due_amount', $precision = 8, $scale = 2)->default(0);
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('installments');
    }
}
