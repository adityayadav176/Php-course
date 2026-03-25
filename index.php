<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my website</title>
</head>
<body>
    <div class="container">
        this is my first php website
    </div>
    <?php
   echo "<h1>php variables</h1>";

    $variable1 = 5;
    $variable2 = 2;
    echo "variable1 is1";
    echo "<br>";
    echo $variable1;
    echo "<br>";
    echo "variable1 is2";
    echo "<br>";
    echo $variable2;

    echo "<br>";
    Echo $variable1 + $variable2;

    // arithmetic operator 
    echo "<br>";
    echo "The value of variable1 and + variable2 ";
    echo "<br>";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of variable1 and - variable2 ";
    echo "<br>";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of variable1 and * variable2 ";
    echo "<br>";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of variable1 and / variable2 ";
    echo "<br>";
    echo $variable1 / $variable2;
    echo "<br>";
    echo "The value of variable1 and % variable2 ";
    echo "<br>";
    echo $variable1 % $variable2;
    echo "<br>";

    echo "<h1>php operator </h1>";
    // assignment operator

    $newVar = $variable1;
    // $newVar += 1;
    // $newVar *= 2;
    // $newVar -= 1;
    // $newVar /= 2;
    echo "the value of new var is";
    echo "<br>";
    echo $newVar;
   

    // comparison operator
    echo "<br>";
    echo "the value of 1 == 4 is";
    echo var_dump(1==4);

    echo "<br>";
    echo "the value of 1 != 4 is";
    echo var_dump(1!=4);
    echo "<br>";
    echo "the value of 1 >= 4 is";
    echo var_dump(1>=4);
    echo "<br>";
    echo "the value of 1 <= 4 is";
    echo var_dump(1<=4);
    
    //increment/ decrement operator 
    echo "<br>";
    // echo $variable1++;
    // echo "<br>";
    // echo $variable1;

    // echo $variable1--;
    // echo "<br>";
    // echo $variable1

    // echo ++$variable1;
    // echo "<br>";
    // echo $variable1
    echo --$variable1;
    echo "<br>";
    echo $variable1;
    echo "<br>";
    //logical operator

    // and (&&)
    // if both conditions are true then return true
    $myVar = (false and true);
    echo $myVar;
    echo "<br>";
     echo var_dump($myVar);

    // or (||)
    // if one condition are true
    $myVar2 = (true or false);
    echo $myVar2;
    echo "<br>";
     echo var_dump($myVar2);

    // xor 

    $myVar3 = (true xor false);
    echo $myVar3;
    echo "<br>";
     echo var_dump($myVar3);
    // !

    $myVar4 = !(true);
    echo $myVar4;
    echo "<br>";
    echo var_dump($myVar4);

    // data types in php

    echo "<br>";
    echo "<h1>Data types</h1>";

    $varString = "this is a string";
    echo var_dump($varString);
    echo "<br>";

    $varNum = 67;
    echo var_dump($varNum);
    echo "<br>";

    $varFloat = 100.23;
    echo var_dump($varFloat);
    echo "<br>";


    $varTrue = true;
    echo var_dump($varTrue);
    echo "<br>";


    ?>
</body>
</html>