<?php declare(strict_types=1);

class DbConnector
{
    /**
     * @throws \Exception
     */
    public function getConnection()
    {
         try {
            $dbh = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASSWORD);
          } catch (PDOException $e) {
            echo "Erreur!: " . $e->getMessage() . "<br/>";
            die();
          }
        return $dbh;
    }
}
