<?php 
class DatabaseMySQL{

    private string $host = "localhost";
    private int $port = 3308;
    private string $dbname = "clothes_app";
    private string $username = "root";
    private string $password = "";
    static public ?PDO $connection = null;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->host:$this->port;dbname=$this->dbname", $this->username, $this->password);
            echo "Connection successfully" . PHP_EOL;
        } catch (PDOException $e) {
            echo "Connection failed : " . $e;
        }
    }
    public function __destruct()
    {
        $this->connection = null;
        echo "Connection Close" . PHP_EOL;
    }
    //create table
    static public function queryString(string $sql){
        try {
           return self::$connection->exec($sql);
        } catch (PDOException $e) {
            echo "ERROR : $e";
        }
    }
}
