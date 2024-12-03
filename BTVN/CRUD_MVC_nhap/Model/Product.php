<?php
    echo 'model place';
    function getConn(){
        try{
            $db_hostname = "localhost";
            $db_user = "root";
            $db_pass = "";
            $db_name = "product";
            return $db_conn = mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
        }
        catch(mysqli_sql_exception){
            echo 'err connection to database';
        }
    }
    
    

    function getProducts(){
        $db_conn = getConn();
        $query = "SELECT * FROM products";
        $products = [];

        $result = mysqli_query($db_conn, $query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                // echo $row["id"];
                // echo $row["name"];
                // echo $row["cost"];
                // echo '<br>';
                $products[] = [ "id" => $row["id"], 
                                "name" => $row["name"],
                                "cost" => $row["cost"]];
            }
        }
        else{
            echo 'data is nulllllll';
        }
        // foreach($products as $values){
        //     echo $values["name"];
        //     echo '<br>'.$values["cost"];
        //     echo '<br>';
        // }
        mysqli_close($db_conn);
        return $products;
    }
    function createProduct($Pname, $Pcost){
        $db_conn = getConn();
        $query = "INSERT INTO products (name, cost) VALUES ('".$Pname."', ".$Pcost.");";

        try{
            $result = mysqli_query($db_conn, $query);
        }
        catch(mysqli_sql_exception){
            echo 'create failed';
        }
        mysqli_close($db_conn);    
    }
    function deleteProduct($id){
        $db_conn = getConn();
        $query = "DELETE FROM products WHERE id = ".$id.";";

        try{
            echo 'try delete';
            $result = mysqli_query($db_conn, $query);
        }
        catch(mysqli_sql_exception){
            echo 'delete failed';
        }

        mysqli_close($db_conn);
    }
    function editProduct($id, $name, $cost){
        $db_conn = getConn();
        $query = "UPDATE `products` SET `name` = '".$name."', `cost` = '".$cost."' WHERE `products`.`id` = $id;";

        try{
            echo 'try delete';
            $result = mysqli_query($db_conn, $query);
        }
        catch(mysqli_sql_exception){
            echo 'delete failed';
        }

        mysqli_close($db_conn);
    }
?>