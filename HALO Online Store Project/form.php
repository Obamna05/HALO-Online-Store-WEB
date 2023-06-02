<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma</title>
</head>
<body>
    <form action="addToJson.php" method = "post" enctype="multipart/form-data">
        <div>
            <label for = "itemName">Item Name: </label>
            <input type = "text" name = "itemName" id = "itemName">
        </div>
        <div>
            <label for = "itemPrice">Item Price: </label>
            <input type = "number" name = "itemPrice" id = "itemPrice">
        </div>
        <div>
            <label for = "itemImage">Item Image: </label>
            <input type = "file" name = "itemImage" id = "itemImage">
        </div>
        <button type = "submit">Submit</button>
    </form>
</body>
</html>