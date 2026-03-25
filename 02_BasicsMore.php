<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(205, 40, 40);
        margin: auto;
        padding: 23px;
    }
    </style>
<body>
    <div class="container">
        <h1>Lets learn about php </h1>
        <p?>Your party status is here:</p>
        <?php
        $age = 3;
        if($age>18){
            echo "you can go to party";
        }else if($age==7){
            echo "you are 7 years old";
        }else if($age==6){
            echo "you are 6 years old";
        }
        else{
            echo "you can not go to party";
        }
        ?>
    </div>
</body>
</html>