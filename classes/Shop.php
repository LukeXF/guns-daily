<?php
 
/**
* Class shop
* handles the shop login system
*/

    //Enter your database connection details here.
    $host =  "localhost"; //HOST NAME.
    $db_name = "GunsDaily"; //Database Name
    $db_username = "GunsDaily"; //Database Username
    $db_password = "57BSBTEtrrmKfSbF"; //Database Password

    try
    {
        $pdo = new PDO($host,$db_name, $db_username, $db_password);
    }
    catch (PDOException $e)
    {
        exit('Error Connecting To DataBase');
    }
    class database
    {
        function __construct($pdo)
        {
            $this->pdo = $pdo;
        }

        function getData()
        {
            $query = $this->pdo->prepare('SELECT * FROM users');
            $query->execute();
            return $query->fetchAll();
        }
    }

?>

