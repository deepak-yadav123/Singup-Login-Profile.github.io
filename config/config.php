<?php  
   // Start Session
   session_start();


   

// it's all are database localhost,database username,database passwords;
    define('SITEURL','http://localhost/Guvi-Assignment/');
    define('LOCALHOST','localhost');
    define('USERNAME','root');
    define('PASSWORD','');
    define('DBNAME','example');

    $conn = mysqli_connect(LOCALHOST,USERNAME,PASSWORD) or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn,DBNAME) or die(mysqli_error());  // selecting database

?>