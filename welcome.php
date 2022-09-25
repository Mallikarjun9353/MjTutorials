<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body{
    background-image: url(welcome.jpeg); 
    background-size: cover;
        } 
        .one{
            height: 50%;
            width:100%;
        }
        .two{
            height: 50%;
            width:100%;
        }

        h1{
            color: white;
            font-size:100px;
            float:left;
            padding-left:10%;
            padding-top:10%;
        }
        a{
            color: white;
            font-size:60px;
            float:right;
            padding-right:10%;
            padding-top:10%;
        }
</style>
</head>
<body><div class="one">
    <?php echo "<h1>WELCOME    " . $_SESSION['username'] . " </h1>"; ?></div>
   <div class="two"> <a href="home.html">click here to login</button></a></div>
</body>
</html>