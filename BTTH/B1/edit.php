<?php 
    session_start();

    if(isset($_GET['index'])){
        $index = $_GET['index']; 
        $name = $_SESSION['flowers'][$index]["name"];
        $detail = $_SESSION['flowers'][$index]["detail"];
        $image = $_SESSION['flowers'][$index]["image"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* .textarea{
            width: 300px;
            height: 200px;
        } */
        label{
            font-size: 20px;
        }
        .btn-add{
            padding: 20px;
            border-radius: 5px;
            background-color: rgb(23, 218, 81);
            margin: 10px;
        }
        img{
            width: 500px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Chỉnh sửa dữ liệu</h1>
    <form action="submit.php?index=<?= $_GET['index'] ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="">Tên hoa</label></td>
                <td><input type="text" name="flower-name" value="<?= $name?>" style="width: 500px; padding: 10px;"></td>
            </tr>
            <tr>
                <td><label for="">Mô tả</label></td>
                <td><textarea name="flower-detail" style="width: 500px; height: 100px; padding: 10px;" ><?= $detail?></textarea></td>
            </tr>
            <tr>
                <td><label for="textarea">Ảnh hiện tại</label></td>
                <td><img src="<?= $image?>" alt=""></td>
            </tr>
        </table>
        <input type="file" name="up-load" value="<?= $image?>"><br>
        <input class="btn-add" type="submit" value="Lưu thay đổi">
    </form>
</body>
</html>