<?php
    echo 'delete place'; 
    session_start();

    if(isset($_GET['index'])){
        $index = $_GET['index'];
        unset($_SESSION['flowers'][$index]);
        echo 'xoa thanh cong';
        header('location: index.php');
    }
?>