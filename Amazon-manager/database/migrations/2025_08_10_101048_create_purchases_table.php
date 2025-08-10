<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); //ユーザーID
            $table->string('name',7);//購入者の名前
            $table->string("prodauc_name")->index(); //商品名
            $table->string('product_url')->nullable()->unique(); //Amazon商品のURL
            $table->unsignedInteger('price'); //値段

            $table->string('status')->default('未払い')->index(); //購入ステータス

            //購入・到着＿支払いの日時
            $table->dateTime('purchased_at')->nullable(); //購入した日時
            $table->dateTime('arrived_at')->nullable(); //到着した日時
            $table->dateTime('paid_at')->nullable(); //支払い日時
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
