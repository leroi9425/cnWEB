<?php 
    $id = $_GET['idsp'];
    $name = $_GET['tensp'];
    $price = $_GET['giasp'];
    echo $id.$name.$price;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nhap thong tin va an sua</p>
    <form action="index.php" method="post">
        <label for="">Ten san pham</label>
        <input type="text" name="name">
        <label for="">Gia</label>
        <input type="text" name="price">
        <input type="submit" value="Sua">
    </form>
</body>
</html>