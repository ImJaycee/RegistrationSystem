

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
</head>

<style>
    .box{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 405px;
        
    }
    
    h1{
        text-align: center;
        margin-top: 60px;
    }
    a{
        text-decoration: none;
        
        text-align: center;
        background-color: green;
        width: 100%;
        font-size: 30px;
        color: whitesmoke;
    }
</style>
   
<body>

<h1> Save your QRCode </h1>
    
<div class="box">
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

            $pdoQuery = "SELECT * FROM users WHERE username = '$username'";
            $pdoResult = $pdoConnect->prepare($pdoQuery); 
            $pdoResult->execute();
                while ($row = $pdoResult -> fetch()){
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                   
                    require_once 'phpqrcode/qrlib.php';

                    // Generate QR code
                    $qrText = "ID no: " . $id . "\nName: " . $name . "\nEmail: " . $email . "" ;
                    
                    $filePath = 'assets/qrcodes/' . $username . ".png";
                    $fileName = $username . ".png";

                    $pdoQuery = "INSERT INTO `user-qrcode` (`userid`, `qrcode`) VALUES (:userid, :qrcode)"; 
                    $pdoResult = $pdoConnect -> prepare($pdoQuery);
                    $pdoExec = $pdoResult -> execute(array(":userid" => $id, ":qrcode" => $fileName)); 

                    QRcode::png($qrText, $filePath, 'H', 6, 6);

                    $pdoQuery = "SELECT * FROM `user-qrcode` WHERE userid = '$id'";
                    $pdoResult = $pdoConnect->prepare($pdoQuery); 
                    $pdoResult->execute();

                    if ($pdoResult->rowCount() > 0) {
                        while ($row = $pdoResult -> fetch()){
                            $qrcode = $row['qrcode'];
                            echo "<center><img src='assets/qrcodes/$qrcode'></center>";
                            echo "<center><a href='assets/qrcodes/$qrcode' download>Download</a></center>";
                            echo "<center><a href='index.php'>Back to Home</a></center>";
                            exit();
                        }
                    }

                        }
                                      
            } else {
               echo "Error";
            }
                        
                    }

                        $pdoConnect = null;
                        session_destroy();

                        ?>
</div>







<script type="text/javascript" src="script/main.js"></script>



</body>
</html>
