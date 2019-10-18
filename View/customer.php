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

<form id="s" method="post">
    <select name="Cname">
        <?php foreach($allCustomers AS $customerItem):?>
            <option value="<?php echo 'Customer ID : '.$customerItem->getId()."<br> Customer Name : ".$customerItem->getName()."<br>".' The Group ID : '.$customerItem->getGroup()?>">
                <?php echo $customerItem->getName()?></option>
        <?php endforeach; ?>
    </select>
    <select name="Cprod">
        <?php foreach($allProducts AS $productItem):?>
            <option value="<?php echo $productItem->getId()?>"><?php echo $productItem->getName()?></option>
        <?php endforeach; ?>
    </select>



    <input type="submit" name="Submit" value="Send">
</form>

<?php
if(isset($_POST['Cname'])) {
    echo $_POST['Cname'];
}
?>
<?php
if(isset($_POST['Cprod'])) {
    echo $_POST['Cprod'];
}
?>




<br>
</body>
</html>


