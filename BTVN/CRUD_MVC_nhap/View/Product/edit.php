<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nhap thong tin va an them</p>
    <form action="index.php?action=edited&index=<?=$index?>" method="post">
        <label for="">Ten san pham</label>
        <input type="text" name="name" value="<?= $name?>">
        <label for="">Gia</label>
        <input type="text" name="cost" value="<?= $cost?>">
        <input type="submit">
    </form>
</body>
</html>