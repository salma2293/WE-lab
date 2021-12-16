<?php session_start();

    if(!isset($_SESSION['UserData']['Username']))
    {
        header("location:login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>o wow</title>
</head>
<body>
    <h1>good job</h1>
</body>
</html>



