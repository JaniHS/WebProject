<?php

    include_once 'DBConnect.php';
    $userLoginName = $_GET["loginName"];
    $userLoginPass = $_GET["loginPass"];

    $result = mysqli_query($MySQLi_CON, "SELECT * FROM users WHERE username = '$userLoginName' AND password = '$userLoginPass'");
    //$result = mysqli_query($MySQLi_CON, "SELECT * FROM users WHERE username = $userLoginName");
    if(mysqli_num_rows($result)>0){
        echo true;
    }
    else {
        echo false;
    }

?>
