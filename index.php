<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  
<form method="post" action="<?php echo
    htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Name:<br><input type="text" name="name"><br><br>
      Email:<br><input type="text" name="email"><br><br>
    <input type="submit" value="Submit">
    </form>

    <?php
    $name = $email = "";

    if ($_SERVER["REQUEST_METHOD"] =="POST"){
        $name =
            test_input($_POST["name"]);
        $email =
            test_input($_POST["email"]);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

   <?php
    echo "<h2>Your data:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    ?>


    
</body>
</html>