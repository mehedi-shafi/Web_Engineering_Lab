<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Form</title>
</head>
<body>
    <div class="content">
        <h1>Enter your details to continue</h1>
        <div class="form">
            <form action="#" method="post">
                <div class="input-group">
                    <span>User Name: </span>
                    <input class="form-control" type="text" placeholder="Enter your name" required name="username">
                </div>
                <div class="input-group">
                    <span>Password: </span>
                    <input class="form-control" type="password" placeholder="password" required name="password">
                </div>
                <div class="input-group">
                    <span>Confirm Password: </span>
                    <input class="form-control" type="password" placeholder="Confirm Password" name="con_pass" required>
                </div>
                <div class="input-group">
                    <span>Gender:</span>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                </div>

                <div class="input-group">
                    <span>Birthday</span>
                    <input class="form-control" type="date" name="bday">
                </div>
                <div class="input-group">
                    <span>Game Time:</span>
                    <input class="form-control" type="time" name="game_time">
                </div>

                <div class="input-group">
                    <span>Email:</span>
                    <input class="form-control" type="email" name="email" required>
                </div>


                <div class="input-group">
                    <span>Website</span>
                    <input class="form-control" class="form-control" type="url" name="website">
                </div>

                <div class="input-group">
                    <span>Phone:</span>
                    <input class="form-control" type="text" name="phone">
                </div>

                <div class="input-group">
                    <span>Cost:</span>
                    <input class="form-control" type="number" name="cost">
                </div>

                <div class="input-group">
                    <span>Comment:</span>
                    <textarea name="comment" id="" cols="100" rows="5"></textarea>
                </div>

                <div class="input-group">
                    <input type="submit" id="submit-button" class="btn btn-success" value="Submit!">
                    <input type="reset" id="clear_button" class="btn btn-danger" value="Clear">
                </div>
            </form>
        </div>
        <hr>
        <div style="border: 1px solid black;">
            <pre border="1px solid black">
            <?php
                if (!empty($_POST)){
                    //validation
                    //check if password matches.
                    if ($_POST["password"] == $_POST["con_pass"]){
                        echo '<h4 style=\"background-color: #f45c42;\">Password Matched</h4>';
                        ?>
                        <pre>
                            <?php
                                foreach ($_POST as $key => $value) {
                                    # code...
                                    echo "{$key} : {$value}<br/>";
                                }
                            ?>
                        </pre>
                        <?php
                    }
                    else{
                        echo "<h4>Password Didn't Matched</h4>";
                    }
                }
            ?>
            </pre>
        </div>
    </div>
    <script src="js/jquery.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
