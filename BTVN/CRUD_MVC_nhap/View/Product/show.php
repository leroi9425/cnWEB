<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'View/WebDecor/style.php'?>
</head>
<body>
<form action="index.php?action=create" method="post">
    <button class="btnAdd"
    >Them moi</button>
    </form>
    <form action="" method="post">
        <table>
            <tr>
                <th>San pham</th>
                <th>Gia thanh</th>
                <th>Sua</th>
                <th>Xoa</th>
            </tr>
            <?php foreach($products as $key => $value): ?>
                <tr>
                    <td><?= $value["name"]?></th>
                    <td><?= $value["cost"]?></td>
                    <td>
                        <a href="index.php?action=edit&index=<?= $value["id"]?>">
                            <img class="icon" src="image/edit.png" alt="edit" name="edit" style="width: 20px; height: 20px;">
                        </a>
                    </td>
                    <td>
                        <a href="index.php?action=delete&index=<?= $value["id"]?>">
                            <img class="icon" src="image/delete.png" alt="" style="width: 20px; height: 20px;">
                        </a>
                    </td>
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
</body>
</html>