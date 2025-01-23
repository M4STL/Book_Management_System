<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            if (!Schema::hasColumn('books', 'book_no')) {
                $table->string('book_no')->after('id')->notNull();
            }
            if (!Schema::hasColumn('books', 'title')) {
                $table->string('title')->after('book_no')->notNull();
            }
            if (!Schema::hasColumn('books', 'author')) {
                $table->string('author')->after('title')->notNull();
            }
            if (!Schema::hasColumn('books', 'published_year')) {
                $table->year('published_year')->after('author')->notNull();
            }
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn(['book_no','title', 'author', 'published_year']);
        });
    }
}
