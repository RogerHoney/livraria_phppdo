<?php

class Livraria_Db_Adapter_Mysql implements Livraria_Db_Adapter_Interface{

    private static $instance;

    public static function getConnection($config) {
        if (!isset(self::$instance)) {

            $dsn = $config['adapter'] . ":host=" . $config['hostname'] . ";dbname=" . $config['dbname'];
            try {
                $pdo = new PDO($dsn, $config['user'], $config['password']);
                return $pdo;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return self::$instance;
        }
    }

}
