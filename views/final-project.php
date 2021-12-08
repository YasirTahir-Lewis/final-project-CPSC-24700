<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Final Project CPSC 24700 </title>
</head>
<body>
    <?php
    $storeName = $_POST["storename"];
    $storeCategory = $_POST["storecategory"];
    $item = $_POST["item"];
    $price = $_POST["price"];

    //@$my_db = new mysqli("localhost", "user", "cpsc24700", "storeinventory");

    //if ($my_db->connect_error) {
    //    die("Connect error".$my_db->connect_errorno.": ".$my_db->connect_error);
    //}

    echo "<li><a href = 'includes/logout.inc.php'>Log out</a></li>";
        
    ?>
</body>
</html>