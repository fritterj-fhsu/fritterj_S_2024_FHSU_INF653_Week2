<?php 
// phpinfo() 
 #
/* */ 
//
$name = "Sam"; //String 
$age = 22;
$isStudent = true;
$height = 5.11;
$classes = ['back-1', 'front-2', 'mobile2'];
$greeting = "Hello "; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>
    <?php echo $name ?>
    <?php echo $age;
    echo "<br>"
    ?>
    <?= $height ?>

<?= $classes[2] ?>

 <!-- Concatenation -->
 <h1><?php echo $greeting . $name ?></h1>
 <h1><?php echo "my name is " . $name . "<br>" ?></h1>
 <h1><?php $greeting .= "How are you {$name}";
 echo $greeting
 ?></h1>


<?php echo $age +=10 ?> 
<?php echo $age *=10 ?> 
</body>
</html>