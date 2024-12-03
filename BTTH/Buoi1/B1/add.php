<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .textarea{
            width: 300px;
            height: 200px;
        }
        label{
            font-size: 20px;
        }
        .btn-add{
            padding: 30px;
            border-radius: 5px;
            background-color: gray;
            margin: 20px;
        }
    </style>
</head>
<body>
    <form action="submit.php" method="post" enctype="multipart/form-data">
        <label for="">Tên hoa</label>
        <input type="text" name="flower-name">
        <label for="">Mô tả</label>
        <input class="textarea" type="text" id="" name="flower-detail"></textarea>
        <label for="textarea">Ảnh</label>
        <input type="file" name="up-load">
        <input class="btn-add" type="submit" value="Luu">
    </form>
</body>
</html>
