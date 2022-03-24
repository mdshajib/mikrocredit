<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('name')->nullable();
            $table->foreignId('worker_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->text('address')->nullable();
            $table->integer('members')->default(0);
            $table->string('day')->nullable()->comment('installment collection day');
            $table->tinyInteger('status')->default(1)->comment('1:active, 0:terminated');
            $table->foreignId('created_by')->nullable()->references('id')->on('users');
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
        Schema::dropIfExists('teams');
    }
}
