<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumesToBlogSidebarsTable extends Migration
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
            $table->string('button_class');
            $table->string('div_class');
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
            $table->dropColumn('button_class');
            $table->dropColumn('div_class');
        });
    }
}
