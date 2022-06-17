<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remotes', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('hadware_code')->nullable();
            $table->integer('item_id')->nullable();
            $table->enum('flag', ['1', '0'])->default('0');
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
        Schema::dropIfExists('remotes');
    }
}
