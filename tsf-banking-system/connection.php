<?php

$username = "root";
$password = '';
$server = 'localhost';
$db = 'bankingsystem';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    ?>
    <script>
        alert("Connection successful!!");
    </script>

    <?php
}
else{
    echo "No connection. Please try again.";
    //die("No connection".mysqli_connect_error());
}

?>
 