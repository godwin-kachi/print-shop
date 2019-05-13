<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'dezzy';
    $db = mysqli_connect ($db_host, $db_user, $db_password, $db_name) or die(mysql_error);

    // if ($db == true) {
    //     # code...
    //     echo "The connection is successfully established";
    //     exit();
    // }else{
    //     mysqli_error($db);

    // }

?>