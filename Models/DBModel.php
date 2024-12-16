<?php

class DBModel {
    protected static $db;

    public function __construct() {
        if (self::$db === null) {
            $this->connect();
        }
    }

    public function connect() {
        try {
            $host = $_ENV['DB_HOST'];
            $port = $_ENV['DB_PORT'];
            $dbname = $_ENV['DB_NAME'];
            $user = $_ENV['DB_USER'];
            $password = $_ENV['DB_PASSWORD'];

            $dsn = "mysql:host=$host;port=$port;dbname=$dbname";
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db = $pdo;
        } catch (PDOException $e) {
            self::$db = null;
            throw new Exception("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public function getDB() {
        if (self::$db === null) {
            throw new Exception("Connexion à la base de données non établie.");
        }
        return self::$db;
    }
}
