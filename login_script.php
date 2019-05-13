<?php
    //here connects to the database to be used
    require_once "db_connect.php";

    if (isset($_POST['login'])) {
        # code...
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        //check if the name exist with the database

        $sql = "SELECT * FROM admin where username = '$username' && password = '$password'";
        $result = mysqli_query($db, $sql);

        $userCount = mysqli_num_rows($result);

        if ($userCount == 0) {
            # code...
            
            echo "<script type='text/javascript'>";
            echo "alert('Username does not exist, contact the Store Admin to be added as a Store Manager')";
            
            echo "</script>";
            echo 'Click <a href="dashboard/login.php">here</a> to retry';
        }else{
            session_start();
            setcookie('username', $username, time()+(3600*7));
            $_SESSION['username'] = $username;
            header('location: dashboard/index.php');
        }

    }
?>