<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF Else</title>
</head>
<body>
    <?php #Variables 
    $name = "Sam"; //String 
    $age = 22;
    $isStudent = true; 
    $height = 5.11;
    ?>

    <!-- Equal, not Equal, Strict Equal, Strict Not Equal -->
<h1><?php 
if($name == "sam"){
    echo "Equal";
} else {
    echo "Not Equal";
}
?></h1>

<h1>
    <?php if($name == "sam"){ ?>
        Equal
    <?php } else { ?>
        Not Equal
    <?php } ?>
</h1>
<!-- Get Type -->
<h1><?php 
    if(gettype ($age) == "integer"){
        echo "Equal";
    } else {
        echo "Not Equal";
    }
?></h1>

<h1><?php 
    if(is_numeric($age) == "integer"){
        echo "Equal";
    } else {
        echo "Not Equal";
    }
?></h1>

<?php $amount = "one" ?>
<h1><?php 
if(empty($amount)) {
    $message = "Amount is required!";
} else if (!is_numeric($amount)){
    $message = "Amount must be numeric";
} else if ($amount < 0) {
    $message = "Amount must be grater than Zero";
} else {
    $message = "Valid amount!";
}
?>
<?php echo $message ?>
</h1>


<h1><h1><?php 
if(empty($amount) || !is_numeric($amount) || $amount < 0 ){
    $message = "Amount is not Valid!";
} else {
    $message = "Valid amount!";
}
?>
<?php echo $message ?></h1>
</body>
</html>