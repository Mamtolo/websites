<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php

include_once('functions-page.php');


// Reading information from the database

if (isset($_POST['add_to_cart'])) {
    $id = $_POST['id'];
    
    // this is the query to insert into database
    $query ="SELECT `id` FROM `products` WHERE `id` = '$id';";
    
    // runs query to database
    $result = mysqli_query($conn, $query);

    // checks number of rows returned if not "0" makes email = $value 
    $row = mysqli_num_rows($result);
	if ($row == 0) {
		echo ("Product $id is not found");
	} else {
        while ($row = mysqli_fetch_assoc($result)) {
            $value = $row["id"];
        }  
        
        $name = return_info($conn, 'products', 'name', 'id', $id);
        $id = return_info($conn, 'products', 'id', 'id', $id);
        $price = return_info($conn, 'products', 'price', 'id', $id);
        $description = return_info($conn, 'products', 'description', 'id', $id);
        $status = return_info($conn, 'products', 'status', 'id', $id);

        $_SESSION["p$id"] = "yes";
        $session = ''.$_SESSION["p$id"];
        
        echo ("ID of product is Id: $id <br>Name: $name <br>Price: $price <br>Description: $description <br>Session: $session");
        echo("<br>");
        echo("<br>");
        echo("Product ID's selected or in cart");
        echo("<br>");
        
        include("calculate-total.php");
        redirect_back();

    }
}


if (isset($_POST['checkout'])) {
    // foreach ($_SESSION as $key=>$val)
    // echo $key." ".$val."<br/>";
    include_once('check-out.php');
}

if (isset($_POST['remove_from_cart'])) {
    $id = $_POST['id'];
    unset($_SESSION["p$id"]);

    include("calculate-total.php");
    redirect_back();
    
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>