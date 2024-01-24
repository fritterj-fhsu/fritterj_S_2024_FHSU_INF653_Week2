<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>
        <?php 
        #While Loop 
        $counter = 0; 
        while($counter < 5) {
            echo $counter . "<br>";
            $counter++;
        }
        #For Loop 
        $message = null;
        for($counter = 10; $counter > 0; $counter-- ){
            $message .= $counter . "<br>";
        }
        echo $message;

        #
        #While loop for arrays
        $arr = array('Jon', 'sam', 'paul');
        while ($counter < count($arr)) {
            echo $arr[$counter] . "<br>";
            $counter++; 
        }
        #For loop for arrays
        for($counter = 0; $counter < count($arr); $counter++){
            echo $arr[$counter] . "<br>";
        }

        ?>
    </h1>
</body>
</html>