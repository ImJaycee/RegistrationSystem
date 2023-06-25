
<?php

if (isset($_POST['register']))
{
    include_once 'includes/connect.php';

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$password = $_POST['password'];
$con_password = $_POST['con-password'];

if ($password != $con_password) {
    echo "Password not match";
    exit();
}

$pdoQuery = "INSERT INTO `users` (`name`, `username`, `email`, `sex`, `password`) VALUES (:name, :username, :email, :sex, :password)"; 
$pdoResult = $pdoConnect -> prepare($pdoQuery);
$pdoExec = $pdoResult -> execute(array(":name" => $name, ":username" => $username, ":email" => $email, ":sex" => $sex, ":password" => $password)); 

if($pdoExec)
{
    echo "<script>
            alert('Register Success!');
            window.location.href='index.php';
        </script>";
        exit;
} else {
        echo "<script>alert('Register Success!');</script>"; 
   }
}


$pdoConnect = null;
?>