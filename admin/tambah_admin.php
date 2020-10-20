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
        </form>

        <?php
        
            $username = $_POST['name'];
            $password =md5($_POST['password']);
            $firstname = "admin";
            $lastname = "meida";

            $query = "INSERT INTO admin VALUES ('', '.$name.', '.$password.', '.$firstname.', '.$lastname.')";
            $sql = mysqli_query($conn, $query);

            if(!$sql){
                echo "Gagal";
            }
            else
            {
                echo "Berhasil";
            }
        ?>
    </body>

</html>