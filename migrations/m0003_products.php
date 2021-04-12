<?php

class m0003_products {
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE products (
                id INT AUTO_INCREMENT PRIMARY KEY,
                productName VARCHAR(255) NOT NULL,
                sku VARCHAR(255) NOT NULL,
                price FLOAT NOT NULL,
                type TINYINT NOT NULL,
                dim_1 FLOAT NOT NULL,
                dim_2 FLOAT,
                dim_3 FLOAT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE products;";
        $db->pdo->exec($SQL);
    }
}