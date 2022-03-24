<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_requests', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->foreignId('member_id')->nullable()->references('id')->on('members')->onDelete('cascade');
            $table->foreignId('team_id')->nullable()->references('id')->on('teams')->onDelete('cascade');
            $table->foreignId('request_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('approve_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->decimal('amount', $precision = 8, $scale = 2)->default(0);
            $table->timestamp('disbursement_at', $precision = 0);
            $table->string('comment')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1:approved, 0:rejected, 2:pending');
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
        Schema::dropIfExists('loan_requests');
    }
}
