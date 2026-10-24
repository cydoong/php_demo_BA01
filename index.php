<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and Modal Sample</title>
</head>
<body>
    <h1>Hello World</h1>
    <!-- php code with variable data assignment -->
    <?php
    include "pure_php.php"; 
    include "example2.php";
    ?>
    <?php echo "Hello World Ngaaaaa"; ?>

    <h2>Username: <u><?php echo $username; ?> </u></h2>
    <button type="button" onclick="greetUser()">Greet User</button>

    <script>
        //variable
        var userName = "<?php echo $username?>";
        var userID = "<?php echo $user_id?>";
        var the_name = "<?php echo $name?>";
        var the_age = "<?php echo $age?>";


        //function
        function greetUser() {
            alert("Hello "+ userName +" Your user ID is: " + userID + "Name mo: " + the_name + "Age mo: " + the_age)
        }
    </script>
</body>
</html>