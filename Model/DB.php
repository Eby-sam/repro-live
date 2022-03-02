<?php

namespace App\Model;

use config;
use Exception;
use PDO;
use PDOException;

class DB {

    private string $server = 'localhost';
    private string $db = 'database';
    private string $user = 'root';
    private string $pwd = '';

    private static ?PDO $dbInstance = null;


    /**
     * Static constructor.
     */
    private static ?PDO $pdoObject = null;
    private static string $dsn = "mysql:host=%s;dbname=%s;charset=%s";

    public static function getPDO(): PDO
    {
        if (self::$pdoObject === null) {
            try {
                $dsn = sprintf(self::$dsn, Config::DB_SERV, Config::DB_NAME, Config::CHARSET);
                self::$pdoObject = new PDO($dsn, Config::DB_USERNAME, Config::DB_PASSWORD);
                self::$pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (Exception $exception) {
                echo $exception->getMessage();
            }
        }
        return self::$pdoObject;
    }



}