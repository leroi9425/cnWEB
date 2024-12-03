<?php
    session_start();
    // 
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['index'])){
        $index = $_GET['index'];
        $target_dir = "image/";
        $target_file = $target_dir.basename($_FILES['up-load']['name']);

        
        
        if(move_uploaded_file($_FILES['up-load']['tmp_name'], $target_file)){
            $_SESSION['flowers'][$index] = ["name" => $_POST['flower-name'], "detail" => $_POST['flower-detail'], "image" => $target_file];
            header('location: index.php');
        }
        else{
            $old_image = $_SESSION['flowers'][$index]["image"];
            $_SESSION['flowers'][$index] = ["name" => $_POST['flower-name'], "detail" => $_POST['flower-detail'], "image" => $old_image];
            header('location: index.php');
        }
    }
    else if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['flower-name']) && isset($_POST['flower-detail']) &&  isset($_FILES['up-load'])){
        $target_dir = "image/";
        $target_file = $target_dir.basename($_FILES['up-load']['name']);
        $_SESSION['flowers'][] = ["name" => $_POST['flower-name'], "detail" => $_POST['flower-detail'], "image" => $target_file];
        echo $_SESSION['flowers'][count($_SESSION['flowers'])-1]["name"];
        echo $_SESSION['flowers'][0]["name"];
        if(move_uploaded_file($_FILES['up-load']['tmp_name'], $target_file)){
            header('location: index.php');
        }
        else{
            echo 'Co loi xay ra';
        }
        // ktra neu co loi
        foreach($_SESSION['flowers'] as $index => $value){
            echo 'Ten '.$value["name"].' mo ta '.$value["detail"].' link anh '.$value["image"]; 
        }
    }
?>