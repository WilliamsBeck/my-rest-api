<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTitleToMenuInBooksTable extends Migration
{
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->renameColumn('title', 'menu');
        });
    }

    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->renameColumn('menu', 'title');
        });
    }
};
