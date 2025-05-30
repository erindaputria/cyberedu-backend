<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumStatisticsTable extends Migration
{
    public function up()
    {
        Schema::create('forum_statistics', function (Blueprint $table) {
            $table->id();
            $table->integer('total_topics')->default(0);
            $table->integer('total_users')->default(0);
            $table->integer('daily_topics')->default(0);
            $table->integer('active_contributors')->default(0);
            $table->date('stat_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('forum_statistics');
    }
}
