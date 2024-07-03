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
        /*
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE user_organisation (
    user_id INT,
    organisation_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (organisation_id) REFERENCES organisations(id)
);

CREATE TABLE organisations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE order_product (
    order_id INT,
    product_id INT,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

SELECT
    u.id AS user_id,
    u.name AS user_name,
    o.name AS organisation_name,
    COUNT(DISTINCT ord.id) AS total_orders,
    COUNT(DISTINCT op.product_id) AS total_products
FROM
    users u
JOIN
    user_organisation uo ON u.id = uo.user_id
JOIN
    organisations o ON uo.organisation_id = o.id
LEFT JOIN
    orders ord ON u.id = ord.user_id
LEFT JOIN
    order_product op ON ord.id = op.order_id
LEFT JOIN
    products p ON op.product_id = p.id
GROUP BY
    u.id, o.id;

         */

//        Schema::create('tables', function (Blueprint $table) {
//            $table->id();
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        Schema::dropIfExists('tables');
    }
};
