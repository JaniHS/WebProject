<?php

    include_once 'DBConnect.php';
    $uname = $MySQLi_CON->real_escape_string(trim($_POST['user_name']));
    $uemail = $MySQLi_CON->real_escape_string(trim($_POST['user_email']));
    $upassword = $MySQLi_CON->real_escape_string(trim($_POST['password']));

    $result = mysqli_query($MySQLi_CON, "SELECT * FROM users WHERE email = \"$uemail\"");
    if(mysqli_num_rows($result) > 0){
        echo "falseval";
    }
    else {
        $sql = "INSERT INTO users(username, email, password) VALUES ('$uname', '$uemail', '$upassword')";
        mysqli_query($MySQLi_CON, $sql);
    }

 ?>
