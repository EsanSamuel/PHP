<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        Name:<br><input type="text" name="name"><br><br>
        Email:<br><input type="text" name="email"><br><br>
        <input type="submit" value="Submit">
        </form>
    
        Welcome <?php if (isset($_POST["name"])){echo $_POST["name"];}
        ?><br>
        Your email address is:<?php if (isset($_POST["email"])) {
        echo $_POST["email"];
    }
        ?>
    
    
</body>
</html>