<?php

    require('includes/conn.php');

?>
<html>
    <head>
    </head>
    <body>
        <form method="post" action="">
            <label>Name</label>
            <input type="name" name="name">
            <br />
            <label>password</label>
            <input type="password" name="password">
            <br />
            <button type="submit">Save</button>
        </form>

        <?php
        
            $username = $_POST['name'];
            $password =md5($_POST['password']);
            $firstname = "admin";
            $lastname = "meida";


            echo $username;
            echo $password;
            echo $firstname;
            echo $lastname;
        ?>
    </body>

</html>