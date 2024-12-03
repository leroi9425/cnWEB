<?php
    require('Model/Product.php');
    class ProductController{
        function showHome(){
            $products = getProducts();
            require('View/WebDecor/navbar.php');
            require('View/Product/show.php');
            require('View/WebDecor/footer.php');
        }
        function createProduct(){
            $name = $_POST['name'];
            $cost = $_POST['cost'];
            
            createProduct($name,$cost);
            header('location: index.php');
        }
        function editProduct(){
            echo '-edit-';
            $products = getProducts();
            $index = $_GET['index'];
            $name = '';
            $cost = '';

            foreach($products as $value){
                if($index == $value['id']){
                    $name = $value['name'];
                    $cost = $value['cost'];
                    break;
                }
            }
            require 'View/Product/edit.php';
        }
        function editedProduct(){
            $index = $_GET['index'];
            $name = $_POST['name'];
            $cost = $_POST['cost'];

            editProduct($index, $name, $cost);
            header('location: index.php');
        }
        function deleteProduct(){
            echo 'delete';
            $key = $_GET['index'];
            deleteProduct($key);
            header('location: index.php');
        }
    }
    
    return;
    
    
    echo 'crtl place';
    // echo '<br>'.$_GET['action'].'<br>'.$_GET['index'];
    if(isset($_GET['action'])){
        
        if($_GET['action'] == 'create'){
            //require('Model/Product.php');
            echo 'create';
            include_once 'View/Product/create.php';
        }

        else if($_GET['action'] == 'edit' && isset($_GET['index'])){
            //require('Model/Product.php');
            echo '-edit-';
            $products = getProducts();
            $index = $_GET['index'];
            $name = '';
            $cost;

            foreach($products as $value){
                if($index == $value['id']){
                    $name = $value['name'];
                    $cost = $value['cost'];
                    break;
                }
            }
            require 'View/Product/edit.php';
        }

        else if($_GET['action'] == 'delete' && isset($_GET['index'])){
            //require('Model/Product.php');
            echo 'delete';
            $key = $_GET['index'];
            deleteProduct($key);
            $products = getProducts();
            header('location: index.php');
        }

        elseif($_GET['action'] == 'created'){
            $name = $_POST['name'];
            $cost = $_POST['cost'];
            createProduct($name, $cost);
            $products = getProducts();
            header('location: index.php');
        }

        elseif($_GET['action'] == 'edited' && isset($_GET['index'])){
            $key = $_GET['index'];
            $name = $_POST['name'];
            $cost = $_POST['cost'];
            editProduct($key ,$name, $cost);
            $products = getProducts();
            header('location: index.php');
        }
    }
    else{
        $products = getProducts();
        require('View/WebDecor/navbar.php');
        require('View/Product/show.php');
        require('View/WebDecor/footer.php');
    }
?>