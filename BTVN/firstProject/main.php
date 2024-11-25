<?php
    $products = [
        ["name" => 'San pham 1', "price" => 100] ,
        ["name" => 'San pham 2', "price" => 200] ,
        ["name" => 'San pham 3', "price" => 300] ,
        ["name" => 'San pham 4', "price" => 400] ,
    ];

    // xu li input
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["name"]) && isset($_POST["price"]) && $_POST["name"] != "" && $_POST["price"] != ""){
        $a =  $_POST["name"];
        $b = $_POST["price"];
        $products[] = ["name" => $a, "price" => $b];
    }

    // xu li anh
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES["loadIMG"])){
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["loadIMG"]["name"]);
        move_uploaded_file($_FILES["loadIMG"]["tmp_name"], $target_file);
    }
?>
<main>
    <form action="add.php" method="post">
    <button class="btnAdd"
        style=  "padding: 10px 20px;
                background-color: rgb(123, 221, 123);
                border-radius: 3px;
                border: none;
                margin: 10px 10px 10px 0;"
    >Them moi</button>
    </form>
    <form action="index.php" method="post">
        <table>
            <tr>
                <th>San pham</th>
                <th>Gia thanh</th>
                <th>Sua</th>
                <th>Xoa</th>
            </tr>
            <?php foreach($products as $index => $value): ?>
                <tr>
                    <td><?= $value["name"]?></th>
                    <td><?= $value["price"]?></td>
                    <td>
                        <form action="edit.php" method="get">
                            <button type="submit">
                                <input type="text" name="idsp" value=<?= $index ?> style="display: none">
                                <input type="text" name="tensp" value=<?= $value["name"] ?> style="display: none">
                                <input type="text" name="giasp" value=<?= $value["price"] ?> style="display: none">
                                <img class="icon" src="image/edit.png" alt="edit" name="edit" style="width: 20px; height: 20px;">
                            </button>
                        </form>
                    </td>
                    <td><img class="icon" src="image/delete.png" alt="" style="width: 20px; height: 20px;"></td>
                </tr>
            <?php  endforeach?>
        </table>
        <br><br><br>
            <label for="">Ten san pham</label>
            <input type="text" name="name">
            <label for="">Gia</label>
            <input type="text" name="price">
            <input type="submit">
        </form>
        <form action="index.php" method="post" enctype="multipart/form-data">
                <label for="">Chon anh de tai len</label>
                <input type="file" name="loadIMG">
                <input type="submit" name="submit" value="Tai anh">
        </form>
        <?php
            if(isset($_FILES["loadIMG"]["name"])){
                echo '<img src='.$target_file.' style="width:200px; height: 200px;">';
            }
        ?>
</main>
