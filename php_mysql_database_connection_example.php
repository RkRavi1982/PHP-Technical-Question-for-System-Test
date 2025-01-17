<?php
    echo '<h1>PHP Connect to MySQL (MySQLi, PDO) Example for Beginners: Technical Questions for System Test</h1>';

    define('HOST','localhost');
    
    define('USERNAME','root');
    define('PASSWORD','');
    define('DATABASE_NAME','php_mysql_database_connect');

    echo '<h1>PHP Connect to MySQL using MySQLi without OOP</h1>'; 

    $con_mysqli_ex1 = mysqli_connect(HOST,USERNAME,PASSWORD);

    if($con_mysqli_ex1)
    {
        echo 'WOW!!! example 1 Connected to Mysql Database Server';
    }
    else
    {
        die('connection failed example 1: '. mysqli_connect_errno());
    }
    mysqli_close($con_mysqli_ex1);
    echo '<h1>PHP Connect to MySQL using MySQLi OOP</h1>'; 

    $con_mysqli_ex2 = new mysqli(HOST,USERNAME,PASSWORD);

    if($con_mysqli_ex2->connect_error)
    {
        die('Connection failed example 2:'. $con_mysqli_ex2->connect_error);
    }
    else
    {
        echo 'WOW!!! example 2 Connected to Mysql Database Server';
    }

    echo '<h1>PHP Code for CREATE MySQL Database</h1>'; 

        $sql = 'Create database '.DATABASE_NAME;
        if($con_mysqli_ex2->query($sql) === TRUE)
        {
            echo 'Database Created Succesfully!!';
        }
        else
        {
            echo 'Show error:' . $con_mysqli_ex2->error;
        }

        

    echo '<h1>PHP Connect to MySQL using MySQL PDO</h1>'; 

    $dsn = "mysql:host=".HOST.";dbname=".DATABASE_NAME;

    try{

        $con_pdo = new PDO($dsn, USERNAME,PASSWORD);

        $con_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connected to MySQL Database server Successfully!!';

            echo '<h1>PHP Code for CREATE MySQL Table</h1>'; 
            // Note: Enable below code block for first time for create table

            // $sql_create = "CREATE TABLE user_details (
            //             id INT(5) unsigned AUTO_INCREMENT PRIMARY KEY,
            //             uname varchar(50) NULL,
            //             email varchar(50) NULL)";
            // $con_pdo->exec($sql_create);

            echo 'Table created Successfully!!';

            echo '<h1>PHP Code for Insert data into MySQL Table</h1>'; 
            $sql_insert = "INSERT INTO user_details 
            (uname,email)
            VALUES 
            ('rajan1','rajan1@test.com')";
            $con_pdo->exec($sql_insert);
            echo 'Data INSERT into Table Successfully!!';

            echo '<h1>PHP Code for Update data at MySQL Table</h1>'; 
            $sql_update = "UPDATE user_details SET uname='RAJAN',email='rajan@test.com' where id=1";
            $con_pdo->exec($sql_update);
            echo 'Data Updated at Table Successfully!!';

            echo '<h1>PHP Code for Delete data from MySQL Table</h1>'; 
            $sql_delete = "DELETE FROM user_details where id=10";
            $con_pdo->exec($sql_delete);
            echo 'Data Deleted from Table Successfully!!';

            echo '<h1>PHP Code for Select data from MySQL Table</h1>'; 
            $sql_select = "Select * from user_details";
            $result = $con_pdo->query($sql_select);
            if($result)
            {
                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                echo 'Data Selected from Table Successfully!!<br/>';
                var_dump($data);
               
            }
            
            
    }
        catch(PDOException $e)
        {
            echo 'Show Error Message:'.$e->getMessage();
        }


    
    $con_pdo=null;   







    
?>