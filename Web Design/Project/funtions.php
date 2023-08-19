<?php //t is used to check if a user is logged in and retrieve their user data from a MySQL database.
    function check_login($con){
        if (isset($_SESSION['user_id'])){ //This defines a function named check_login that takes a single parameter $con, which is presumably a MySQL database connection.
            $id=$_SESSION['user_id'];
            $query="SELECT * FROM users WHERE user_id ='$id' limit 1";
            $result = mysqli_query($con,$query);
            if($result && mysqli_num_rows($result)>0){
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        
    };
    //redirect to login
    header("location.php");
    die;
?>