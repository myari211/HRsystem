<?php
        include 'includes/conn.php';
        
        $username = $_POST['name'];
        $password =md5($_POST['password']);
        $firstname = "admin";
        $lastname = "meida";

        $query = "INSERT INTO admin (id, username, password, firstname, lastname) VALUES ('', '.$name.', '.$password.', '.$firstname.', '.$lastname.')";
        $sql = mysqli_query($conn, $query);

        if(!$sql){
            echo "Gagal";
        }
        else
        {
            header('location:index.php');
        }
    ?>