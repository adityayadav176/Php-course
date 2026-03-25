<?php
    $str = "This";
    echo "the string is: ";
    echo $str."<br>";

    $lenn = strlen($str);
    echo "The length of this string is : ". $lenn  . " Thankyou <br>";
    echo "The number of words in this string is :". str_word_count($str). " Thank you <br>";
    echo "The reversed string is :". strrev($str). "  Thankyou <br>";
    echo "The search for is in this string is : ". strpos($str, "is"). "thankyou <br>";
    echo "the replaced string is ". str_replace("is","at", $str). " Thankyou<br>";
?>