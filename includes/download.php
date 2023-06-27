<?php
include 'connect.php';

if (isset($_POST['search']))
{
    $id = $_POST['id'];
    $pdoQuery = "SELECT * FROM `user-qrcode` WHERE userid = '$id'";
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    $pdoResult->execute();
    while ($row = $pdoResult -> fetch()){
        $qrcode = $row['qrcode'];
        echo "<img src='../assets/qrcodes/$qrcode'>";
        echo "<a href='../assets/qrcodes/$qrcode' download>Download</a>";
    }
}



?>

<html lang="en">
<body>

<form method="post">
    <input type="text" name="id">
    <input type="submit" name="search" value="search">
</form>

</body>
</html>
