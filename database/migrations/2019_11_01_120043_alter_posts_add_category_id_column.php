<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPostsAddCategoryIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->default(0);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            /* can't delete a given parent row if a child row exists that references the value for that parent row. If the parent row has no referencing child rows, then you can delete that parent row. */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {

          $table->dropForeign('posts_category_id_foreign');
          $table->dropColumn('category_id');
        });
    }
}
