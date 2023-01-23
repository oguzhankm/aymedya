<?php

class m0001_initial{
    public function up()
    {
        $db = \Kodlazim\Core\App::$app->db;
        $SQL = "CREATE TABLE users (
                id int AUTO_INCREMENT PRIMARY KEY ,
                email varchar(255) NOT NULL,
                firstname varchar(255) NOT NULL,
                lastname varchar(255) NOT NULL,
                status TINYINT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP   
                ) ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }
    public function down()
    {
        $db = \Kodlazim\Core\App::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }
}