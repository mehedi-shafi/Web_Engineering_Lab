<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Index</title>
</head>
<body>
    <ul>
        <?php 
            $color = ["white", "green", "red", "black"];
            print_r($color);
            sort($color);
            for ($i = 0; $i < sizeof($color); $i++){
        ?>
                <li id="checker"><?php echo $color[$i]; ?></li>
        <?php
            }
        ?>
    </ul>
    <p>Inserting new element</p>
    <?php
        $numeric = [1, 2, 3, 5];
        array_push($numeric, 4);
        sort($numeric);
        print_r($numeric);
    ?>
    <br/>
    <p>Checking if a word exists in String</p>
    <?php 
        $string = "This is fun I am loving it";
        if (strpos($string, "lov")){
            echo "lov exists\n";
        }
    ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>
</html>