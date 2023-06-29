<?php

    session_start();

    if(isset($_POST['login'])){

        $user = $_POST['uname'];
        $pass = $_POST['pwd'];

        include_once 'includes/connect.php';

        $pdoQuery = "SELECT * FROM users WHERE username = :username AND password = :password";
        $pdoResult = $pdoConnect->prepare($pdoQuery);
        $pdoResult->execute(array(':username' => $user, ':password' => $pass));

        if ($pdoResult->rowCount() > 0) {
            $row = $pdoResult->fetch(PDO::FETCH_ASSOC);
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['logged_in'] = true;
            
            header('Location: pages/dashboard.php');
        } else {
            ?>
            <script>
                alert("Invalid Username or Password");
            </script>
            
            <?php
        }
            

        ?>  
        <script>
            alert("Invalid Username or Password");
        </script>
        
        <?php
    }


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System</title>
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
</head>
<header>
    <nav>
       
        <ul class="nav nav-list">
            <li  class="nav-item"> <a class="nav-link active" href="#Myinformation">Home</a></li>
            <li  class="nav-item" ><a class="nav-link" href="#LoginPart">Login</a></li>
            <li  class="nav-item" ><a class="nav-link" href="#RegistrationPart">Register</a></li>
        </ul>
    </nav>
</header>

<body>
    
    <section id="Myinformation">
    <h1 class="aboutlogo" >Register and Login Website</h1>
    <div class="aboutMyself">
    <div class="MyPersonalInfo">
    <div>
    <p>
    Welcome, my name is Jay Cee Cruz, and I'm a second-year information technology student. I'm currently working on improving my Web Development
      skills. I'm also doing some backend programming. You can use this website by creating an account 
      and logging in with that account. This website is purely for testing purposes; do not enter any 
      personal information or passwords.
    </p>
    </div>
    </div>

    <div class="Aboutthiswebsite">
        <div class="thiswebsite">
            
        <div>
        <h1>About this website</h1>
        <p>
            This website is a simple registration system that allows users to register and login. 
            This website is created using HTML, CSS, PHP, JavaScript and MySQL.
        </p>
        </div>
        <div>
        <img class="logos" src="assets/Logo.png" alt="Programming language" width="350px">
        
    </div>
    </div>
    </div>          
    </div>
    </section>

    <section id="LoginPart">
    <div>
        <form action="" method="post">                
        <div class="container">
            <h1 style="font-size: 45px; margin-bottom: 30px; text-align: center; color:#1f7f55;">Login your account</h1>
            <label for="uname"><b>Username</b></label>
            <input type="text" name="uname" required>

            <label for="pwd"><b>Password</b></label>
            <input type="password" name="pwd" required>
                            
            <button type="submit" value="login" name="login">Login</button>
        </div>
                    
        </form>
                
        </div>
    </section>

    <section id="RegistrationPart">
        <div>
        <form action="includes/Register.php" method="post">                
            <div class="container">
            <h1 style="font-size: 35px; margin-bottom: 20px; text-align: center; color: #1f7f55;">Register Account</h1>
            <label for="name"><b>Name</b></label>
            <input type="text" name="name" required>
            <label for="username"><b>Username</b></label>
            <input type="text" name="username" required>
            <label for="email"><b>Email</b></label>
            <input type="email" name="email" required>
            <label for="sex">Sex</label><br>
            <select name="sex" id="sex" required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" required>     
            <label for="con-password"><b>Confirm Password</b></label>
            <input type="password" name="con-password" required>          
            <button type="submit" name="register" value="register">Register</button>
            </div>
                
        </form>
            
      </div>
    </section>


<script type="text/javascript" src="script/main.js"></script>


</body>
</html>