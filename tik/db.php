<?php
 
    $con = mysqli_connect("192.168.0.100","mohdsala_loginsystem","123mohd","LoginSystem");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
