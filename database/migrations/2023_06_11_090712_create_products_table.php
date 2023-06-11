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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 200)->collation('utf8mb4_unicode_ci');
            $table->string('short_des', 500)->collation('utf8mb4_unicode_ci');
            $table->string('price', 50)->collation('utf8mb4_unicode_ci');
            $table->tinyInteger('discount');
            $table->string('discount_price', 50)->collation('utf8mb4_unicode_ci');
            $table->string('image', 200)->collation('utf8mb4_unicode_ci');
            $table->tinyInteger('stock');
            $table->double('star', 8, 2);
            $table->enum('remark', ['popular', 'new', 'top', 'special', 'trending', 'regular'])->collation('utf8mb4_unicode_ci');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
