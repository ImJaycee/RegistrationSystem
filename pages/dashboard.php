<?php
session_start();


if (! empty($_SESSION['logged_in']))
{
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System</title>
    <link rel="stylesheet" href="../Styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
</head>
<style>
        body{
            background-image: url(../assets/bg1.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }
        .dashboard {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container-header, .container-body {
            margin: 20px;
            text-align: center;
            color: white;
        }
        .container-header h1 {
            font-size: 50px;
        }
        .container-header p {
            font-size: 23px;
        }
        .container-body {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        }

        .container-body h1,
        .container-body h2 {
            display: flex;
            flex-direction: row;
            align-items: center;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .container-body h1 span,
        .container-body h2 span {
            margin-right: 10px;
           
        }
        span{
            color: green;
        }
    </style>
<header>
    <nav>
       
        <ul class="nav nav-list">
        <li><a href="../includes/logout.php" onclick="return confirm('Are you sure you want to log out?');">Logout</a></li>
        </ul>
    </nav>
</header>

<body>

<section class="dashboard">
    <div class="container-header">
        <h1> <span> Dashboard </span></h1>
        <p>Welcome to your dashboard. You're <span> logged in! </span></p>
    </div>
    <div class="container-body">
        <h1><span>User ID:</span> <?php echo $_SESSION['id']; ?></h1>
        <h1><span>Name:</span> <?php echo $_SESSION['name']; ?></h1>
        <h2><span>Email:</span> <?php echo $_SESSION['email']; ?></h2>
    </div>

</section>



<script type="text/javascript" src="script/main.js"></script>

</body>
</html>

<?php
}
else
{
    echo 'You are not logged in. <a href="../index.php">Click here</a> to log in.';
}
?>