<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>


    <title>Customer</title>
</head>
<body>

<form id="s" method="get">
    <select name="customer">
        <?php foreach ($allCustomers AS $customerItem): ?>
            <option value="<?php echo $customerItem->getId() ?>" <?php if (isset($_GET["customer"]) && $_GET["customer"] == $customerItem->getId())
                echo "selected='selected'" ?>> <?php echo $customerItem->getName() ?>
            </option>
        <?php endforeach; ?>
    </select>
    <select name="product">
        <?php foreach ($allProducts AS $productItem): ?>
            <option value="<?php echo $productItem->getIdP() ?>" <?php if (isset($_GET["product"]) && $_GET["product"] == $productItem->getIdP())
                echo "selected='selected'" ?>>    <?php echo $productItem->getNameP() ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" name="Submit" value="Send">
</form>


<p><?php echo 'Customer ID : ' . $customer->getId() . "<br> Customer Name : " . $customer->getName() . "<br>" . ' The Group ID : ' . $customer->getGroup() ?> </p>
<br>
<p><?php echo 'Product ID : ' . $product->getIdP() . "<br> Product Name : " . $product->getNameP() . "<br> Product description : " . $product->getDescP() . "<br> Product Price : $" . $product->getPrice() ?> </p>


<br><br>
<?php
if (isset($_POST['Cprod'])) {
    echo $_POST['Cprod'];
}
?>
<br><br>
<?php
/*if (isset($_POST['Groups'])) {
    echo $_POST['Groups'];
}
*/ ?>

<br>
</body>
</html>


