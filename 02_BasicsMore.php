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

        $languages = array("Python", "C++", "Java", "JavaScript", "Php");
        // echo count($languages);
        // echo $languages[0];

        // loops
        echo "<br>";
        $a = 0;
        while ($a <= 10) {
            echo "<br>The value of a is:";
            echo $a;
            $a++;
        }
        // Iterating arrays in php using while loop 
        echo "<br>";
        $a = 0;
        while ($a < count($languages)) {
            echo "<br>The value of languages is:";
            echo $languages[$a];
            $a++;
        }

        // do while loop 
        echo "<br>";
        $a = 20;
        do{
            echo "<br>The value of a is:";
            echo $a;
            $a++;
        }while($a < 10);

        // for loop 
         echo "<br>";
        for ($a=0; $a< 10; $a++) { 
            echo "<br> The value of a from for loop is: ";
            echo $a;
        }

        // for each loops
         echo "<br>";
        foreach($languages as $value){
            echo " <br> The value from for each loop is : <br> " ;
            echo $value;
        }
        
        ?>
    </div>
</body>
</html>