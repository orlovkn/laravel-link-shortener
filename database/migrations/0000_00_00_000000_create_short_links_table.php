<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortLinksTable extends Migration
{
    public function up()
    {
        Schema::create('short_links', function (Blueprint $table) {
            $table->id();
            $table->string('link')->index();
            $table->string('code')->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('short_links');
    }
}
