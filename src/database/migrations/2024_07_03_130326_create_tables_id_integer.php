<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected string $prefix = 'id_integer';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->getTableName('users'), function (Blueprint $table) {
            $table->id('id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create($this->getTableName('organisations'), function (Blueprint $table) {
            $table->id('id')->unique();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create($this->getTableName('products'), function (Blueprint $table) {
            $table->id('id')->unique();
            $table->string('name');
            $table->string('description');
            $table->string('image_url');
            $table->integer('price');
            $table->timestamps();
        });

        Schema::create($this->getTableName('orders'), function (Blueprint $table) {
            $table->id('id')->unique();
            $table->string('name');
            $table->integer('amount');
            $table->foreignId('user_id')->references('id')->on($this->getTableName('users'))->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create($this->getTableName('product_organisation'), function (Blueprint $table) {
            $table->foreignId('product_id')->references('id')->on($this->getTableName('products'))->onDelete('cascade');
            $table->foreignId('organisation_id')->references('id')->on($this->getTableName('organisations'))->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create($this->getTableName('order_product'), function (Blueprint $table) {
            $table->foreignId('order_id')->references('id')->on($this->getTableName('orders'))->onDelete('cascade');
            $table->foreignId('product_id')->references('id')->on($this->getTableName('products'))->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->getTableName('order_product'));
        Schema::dropIfExists($this->getTableName('product_organisation'));
        Schema::dropIfExists($this->getTableName('orders'));
        Schema::dropIfExists($this->getTableName('products'));
        Schema::dropIfExists($this->getTableName('organisations'));
        Schema::dropIfExists($this->getTableName('users'));
    }

    protected function getTableName(string $tableName): string
    {
        return sprintf('%s_%s', $this->prefix, $tableName);
    }
};
