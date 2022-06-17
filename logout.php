<?php
    session_start();
    if(isset($_SESSION['account'])){
        unset($_SESSION['account']);
        unset($_SESSION['cart']);
        unset($_SESSION['paid']);
        unset($_SESSION['addP']);
        unset($_SESSION['sup']);
        header('Location: login.php');
    }
header('Location: sign-in.php');
?> 