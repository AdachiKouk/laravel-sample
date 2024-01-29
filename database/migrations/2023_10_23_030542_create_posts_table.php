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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // id() メソッドを使用して、$table から id カラムを作成
            $table->unsignedBigInteger('user_id'); // unsignedBigInteger を使用して user_id カラムを作成
            $table->string('name', 255); // string メソッドを使用して name カラムを作成
            $table->text('contents'); // text メソッドを使用して contents カラムを作成
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
