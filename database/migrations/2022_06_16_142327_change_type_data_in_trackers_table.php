<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTypeDataInTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trackers', function (Blueprint $table) {
            $table->string('hadware_code')->change();
            $table->string('label')->change();
            $table->renameColumn('hadware_code', 'hardware_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trackers', function (Blueprint $table) {
            //
        });
    }
}
