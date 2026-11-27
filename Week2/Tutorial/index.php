<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 - Advanced PHP</title>
</head>
<body>
    <h1>Week 2 - Advanced PHP</h1>
    <p>Full Stack Web Development - Week 2 Tutorial</p>
     <h2>Exercise 1</h2>
    <?php
        // Your remaining PHP code will go here.
    $categories = ["Laptops", "Phones", "Accessories", "Audio"];
    foreach ($categories as $i) {
    	echo $i ."<br>";
    }
    ?>
    <br>

    <h2>Exercise 2</h2>
    <?php
    $product = [
    "name" => "Wireless Mouse",
    "price" => 850,
    "stock" => 12
	];
	foreach ($product as $key => $value) {
		echo "$key : $value ". "<br>";	
	}
    ?>
    <br>

    <h3>Exercise 3 & 4</h3>
    <?php
    $products = [
    ["id"=>101, "name"=>"Wireless Mouse", "category"=>"Accessories", "price"=>850, "stock"=>12],
    ["id"=>102, "name"=>"USB-C Cable", "category"=>"Accessories", "price"=>350, "stock"=>25],
    ["id" =>103, "name"=>"Moniter", "category"=> "Accessories", "price"=> 450, "stock"=>32],
    ["id" =>104, "name"=>"Speaker", "category"=> "Accessories", "price"=> 950, "stock"=>10],
    ["id" =>105, "name"=>"Keyboard", "category"=> "Accessories", "price"=> 555, "stock"=>18]
	];

    foreach ($products as $product) {
    	echo "<br>" ."id:" . $product["id"] . "<br>";
    	echo "name:" . $product["name"] . "<br>";
    	echo "category:" . $product["category"] . "<br>";
    	echo "price:" . $product["price"] . "<br>";
    	echo "stock:" . $product["stock"] . "<br>";
    }
    ?>

    <h3>Exercise 5</h3>
    <?php
    $products = [
    ["id"=>101, "name"=>"Wireless Mouse", "category"=>"Accessories", "price"=>850, "stock"=>12],
    ["id"=>102, "name"=>"USB-C Cable", "category"=>"Accessories", "price"=>350, "stock"=>25],
    ["id" =>103, "name"=>"Moniter", "category"=> "Accessories", "price"=> 450, "stock"=>32],
    ["id" =>104, "name"=>"Speaker", "category"=> "Accessories", "price"=> 950, "stock"=>10],
    ["id" =>105, "name"=>"Keyboard", "category"=> "Accessories", "price"=> 555, "stock"=>18]
	];
	$i = array_filter($products, 
		fn($product) => $product["price"]>500);
	foreach ($i as $product) {
		echo $product["name"] . " - " . $product["price"] . "<br>";
		// code...
	}
    ?>

    <h3>Exercise 6</h3>
    <?php
    $products = [
    ["id"=>101, "name"=>"Wireless Mouse", "category"=>"Accessories", "price"=>850, "stock"=>12],
    ["id"=>102, "name"=>"USB-C Cable", "category"=>"Accessories", "price"=>350, "stock"=>25],
    ["id" =>103, "name"=>"Moniter", "category"=> "Accessories", "price"=> 450, "stock"=>8],
    ["id" =>104, "name"=>"Speaker", "category"=> "Accessories", "price"=> 950, "stock"=>10],
    ["id" =>105, "name"=>"Keyboard", "category"=> "Accessories", "price"=> 555, "stock"=>7]
	];
	$i = array_filter($products, 
		fn($product) => $product["stock"]<10);
	foreach ($i as $product) {
		echo $product["name"] . " - " . $product["stock"] . "<br>";
	}


    ?>

</body>
</html>

