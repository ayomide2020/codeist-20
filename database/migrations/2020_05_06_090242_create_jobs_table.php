<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsignBigInteger();
            $table->string('title');
            $table->string('company');
            $table->string('location');
            $table->longText('description');
            $table->decimal('amount_from', 14, 2);
            $table->decimal('amount_to', 14, 2);
            $table->text('tag_ids');
            $table->softDeletes();	
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
        Schema::dropIfExists('jobs');
    }
}
