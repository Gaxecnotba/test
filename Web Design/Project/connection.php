<?php
    $dbhost="localhost";
    $dbuser="root";
    $dbname="login_sample_db";
    $dbpass="";

    if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
    {
        die("failed to connect");
    };

?>