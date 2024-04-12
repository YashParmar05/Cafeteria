<?php

try{

    // define host
    define("HOST","localhost");
    // define dbname
    define("DBNAME","coffee-blend");
    // define user
    define("USER","root");
    // define password
    define("PASS","");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."",USER,PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch( PDOException $Exception ) {

    echo $Exception->getMessage();
}
   
    