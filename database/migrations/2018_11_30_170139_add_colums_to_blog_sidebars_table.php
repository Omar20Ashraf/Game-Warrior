<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsToBlogSidebarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog_sidebars', function (Blueprint $table) {
            //
            $table->string('name');
            $table->string('par');
            $table->string('button');
            $table->string('button_color');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blog_sidebars', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('par');
            $table->dropColumn('button');
            $table->dropColumn('button_color');
            $table->dropColumn('image');
        });
    }
}
