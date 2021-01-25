<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('element_name');
            $table->string('suggestion_date');
            $table->string('suggested_by');
            $table->string('resource_link')->nullable();
            $table->string('comment')->nullable();
            $table->string('budget_range')->nullable();
            $table->string('purchase status');
            $table->string('purchase_date')->nullable();
            // /$table->timestamps()->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('tasks');
    }
}
