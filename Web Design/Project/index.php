<?php 
    session_start();
    include("connection.php");
    include("funtions.php");
    $user_data= check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <!--Nabvar Design-->
        <section class="navbar">
            <h1><span>L</span>ogin</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="icons">
            <i class='bx bx-user-circle' id="user"></i>
        </div>
        
        </section>
        <!-- logingContainer -->
        <form action="" class="login">
            <h1>Login</h1>
            <input  id="text " type="text" placeholder="Enter your Name"> <br/> 
            <input id ="text" type="password" placeholder="Enter your Password"> <br/>
            <br/>
            <a href="" class="button">Login in</a> <br> 
            <br/> <br>
            <a href="Sign_up.php" class="button btn">Sign up</a> <br/>
            <div class="flex">
                <h5>Forget your Passowr? <span>Click here</span></h5>
                <h5>Don't have an account? <span>Register here</span></h5>
            </div>
        </form>
    </header>

    <script src="script.js"></script>
</body>
</html>