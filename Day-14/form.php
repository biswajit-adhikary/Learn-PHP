<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World!</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>My First Form</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non, qui?</p>
                <p>
                    <?php
                        $fname;
                        $lname;
                        $checked;
                    ?>
                    <?php if(isset($_POST['fname']) && !empty($_POST['fname'])){
                        // $fname = htmlspecialchars($_POST['fname']);
                        $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_SPECIAL_CHARS);
                    } ?>
                    <?php if(isset($_POST['lname']) && !empty($_POST['lname'])){
                        // $lname = htmlspecialchars($_POST['lname']);
                        $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_SPECIAL_CHARS);
                    } ?>
                    <?php if(isset($_POST['cb1']) && !empty($_POST['cb1'])){
                        $checked = "checked";
                    } ?>
                    <?php
                        function isFruitsCheck($value){
                            if(isset($_POST['fruits']) && is_array($_POST['fruits']) && in_array($value,$_POST['fruits'])){
                                echo " checked ";
                            }
                        }
                    ?>
                    First Name: <?php echo $fname; ?>
                    <br>
                    Last Name: <?php echo $lname; ?>
                    <br>
                    One Checkbox: <?php echo $checked; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value=<?php echo $fname ?>>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value=<?php echo $lname ?>>
                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value="cb1" <?php echo $checked ?>>
                        <label for="cb1" class="label-inline">One checkbox</label>
                    </div>
                    <div>
                        <label>Select some checkbox</label>
                        <input type="checkbox" name="fruits[]" id="orange" value="orange" <?php isFruitsCheck('orange') ?>>
                        <label for="orange" class="label-inline">Orange</label><br>
                        <input type="checkbox" name="fruits[]" id="mango" value="mango" <?php isFruitsCheck('mango') ?>>
                        <label for="mango" class="label-inline">Mango</label><br>
                        <input type="checkbox" name="fruits[]" id="banana" value="banana" <?php isFruitsCheck('banana') ?>>
                        <label for="banana" class="label-inline">Banana</label><br>
                        <input type="checkbox" name="fruits[]" id="lemon" value="lemon" <?php isFruitsCheck('lemon') ?>>
                        <label for="lemon" class="label-inline">Lemon</label><br>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>  
        </div>
    </div>
</body>
</html>