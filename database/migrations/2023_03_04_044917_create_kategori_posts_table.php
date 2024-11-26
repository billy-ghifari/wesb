<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kategori_posts', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_nama');
            $table->timestamps();
        });

        Schema::table('posts', function (Blueprint $table) {
			$table->dropColumn('ketegori_id_rels');
			$table->foreignId('kategori_id_rels')->references('id')->on('kategori_posts');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_posts');
    }
};
