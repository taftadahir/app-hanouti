<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkAddWarningTypeIdToWarning extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('warnings', function (Blueprint $table) {
            $table->foreignId('warning_type_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('warnings', function (Blueprint $table) {
            $table->dropForeign(['warning_type_id']);
            $table->dropColumn(['warning_type_id']);
        });
    }
}
