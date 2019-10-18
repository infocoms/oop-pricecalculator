<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
</head>
<body>
<select>
    <?php foreach($allProducts AS $productItem):?>
        <option value="<?php echo $productItem->getId()?>"><?php echo $productItem->getName()?></option>
    <?php endforeach; ?>
</select>


<h2><?php echo $product->getName()?></h2>
<p>Description: <?php echo $product->getDesc()?></p>
<p>Price $<?php echo $product->getPrice()?></p>
</body>
</html>


