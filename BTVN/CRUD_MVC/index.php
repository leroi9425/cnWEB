<!--  -->
<?php 
    // echo '111';
    require ("Controller/ProductController.php");
    if(isset($_GET['action'])){
        if($_GET['action'] == 'create'){
            $Pcontroller = new ProductController();
            $Pcontroller->createProduct();
        }
        elseif($_GET['action'] == 'delete'){
            $Pcontroller = new ProductController();
            $Pcontroller->deleteProduct();
        }
        elseif ($_GET['action'] == 'edit'){
            $Pcontroller = new ProductController();
            $Pcontroller->editProduct();
        }
        elseif ($_GET['action'] == 'edited'){
            $Pcontroller = new ProductController();
            $Pcontroller->editedProduct();
        }
    }
    else{
        $Pcontroller = new ProductController();
        $Pcontroller->showHome();
    }   
?>
