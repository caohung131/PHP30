<?php
    function isPalindrome($string) {
        $strReverse = strrev($string);
        if($string == $strReverse) {
            echo $string." là chuỗi Palindrome.";
        } else {
            echo $string." không phải chuỗi Palindrome.";
        }
    }

    isPalindrome('ZenttneZ');
    echo "<br/>";
    isPalindrome('ZenttneZss');

?>