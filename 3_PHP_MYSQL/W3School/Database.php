<?php
class Database
{
    private string $host = "localhost";
    private int $port = 3308;
    private string $dbname = "clothes_app";
    private string $username = "root";
    private string $password = "";
    public ?PDO $connection = null;

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
    public function createTable(string $tableName, string $fieldName): void
    {
        try {
            $sql = "Create table $tableName ($fieldName, reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
            $this->connection->exec($sql);
            echo "Table $tableName created successfully" . PHP_EOL;
        } catch (PDOException $e) {
            echo "error create table sql : $sql \n {$e->getMessage()}" . PHP_EOL;
        }
    }
    //insert data
    public function insertData(string $tableName, string $key, string $value): void
    {
        try {
            //begin the transation
            $this->connection->beginTransaction();
            $sql = "insert into $tableName ($key) values($value)";
            $this->connection->exec($sql);

            //commit the transaction
            $this->connection->commit();
            echo "New record created successfully" . PHP_EOL;
        } catch (PDOException $e) {
            //rollback the transaction if something failed
            $this->connection->rollBack();
            echo "error insert data : " . $e->getMessage() . PHP_EOL;
        }
    }
    //get last ID
    public function getLastID(string $tableName, string $key, string $value): void
    {
        try {
            $sql = "insert into $tableName ($key) values($value)";
            $this->connection->exec($sql);
            $lastIid = $this->connection->lastInsertId();
            echo "New record created successfully. Last insert ID is : $lastIid" . PHP_EOL;
        } catch (PDOException $e) {
            echo "error insert data : " . $e->getMessage() . PHP_EOL;
        }
    }
    //mysql prepared
    public function insertDataWithPrepared(string $firstname, string $lastname, string $email): void
    {
        try {
            //prepare sql and bind parameter
            $statment = $this->connection->prepare("insert into user_w3school (firstname, lastname, email) values(:firstname,:lastname,:email)");
            //set bind parameter
            $statment->bindParam(":firstname", $firstname, PDO::PARAM_STR);
            $statment->bindParam(":lastname", $lastname, PDO::PARAM_STR);
            $statment->bindParam(":email", $email, PDO::PARAM_STR);
            //execute statement
            $statment->execute();
            echo "New records created successfully with prepare statment" . PHP_EOL;
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
    //select data with prepared statments
    public function selectDataWithPrepared(): void
    {
        try {
            $stmt = $this->connection->prepare("select * from user_w3school");
            $stmt->execute();

            //set the resulting array to associative
            // var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
            foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                echo $row["id"] . " " . $row["firstname"] . PHP_EOL;
            }
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
    public function selectDataOne(string $tableName, $condition): void
    {
        try {
            $stmt = $this->connection->prepare("select * from $tableName where $condition");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($result);
            if ($result) {
                foreach ($result as $key) {
                    echo "Key : {$key["firstname"]}";
                }
            } else {
                echo "gagal beli";
            }
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
    //delete data
    public function deleteData(string $tableName, int $id): void
    {
        try {
            $sql = "delete from $tableName where id=$id";
            $this->connection->exec($sql);
            echo "Record deleted successfully";
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }

    // update data 
    public function updateData(string $tableName, int $id): void
    {
        try {

            $stmt = $this->connection->prepare("update $tableName set lastname='joe' where id=$id");
            $stmt->execute();
            echo "Record updated successfully";
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
}
