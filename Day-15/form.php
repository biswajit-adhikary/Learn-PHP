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
                <h2>Select/dropdowns</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium eius facere, nam velit blanditiis doloribus sequi quod quidem sapiente corrupti.</p>
                <?php
                    $fruits = ['mango', 'apple', 'Banana', 'orange', 'lemon', 'peach'];
                    function fruitsOptions($options, $selectedValue){
                        foreach($options as $option){
                            $option = strtolower($option);
                            $selected= '';
                            if(in_array($option, $selectedValue)){
                                $selected = 'selected';
                            }
                            printf("<option value='%s' %s>%s</option>\n",$option ,$selected, ucwords($option));
                        }
                    }
                    $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
                    $vfruits = $sfruits ?? array();
                    if(count($vfruits) > 0) {
                        echo "You have selected: ". join(", ", $sfruits);
                    }
                ?>
                <form method="POST">
                    <label for="fruits">Select some fruits</label>
                    <select name="fruits[]" id="fruits" multiple style="height: 150px">
                        <?php fruitsOptions($fruits, $sfruits); ?>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>  
        </div>
    </div>
</body>
</html>