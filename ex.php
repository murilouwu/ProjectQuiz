<?php
    include('connect.php');
    session_start();
    $sql = 'DELETE FROM user WHERE cd ="'.$_SESSION['cd'].'"';
    $res = $con->query($sql);
    vai('index.php');
    session_destroy();
?>