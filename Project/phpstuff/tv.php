<?php
    require_once 'dbconnector.php';
    $sql="SELECT count(*) FROM statcounter";
    $result=mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_array($result)) {
            echo $row[0];
        }
    } else {
        echo "0 results";
    }
 ?>
