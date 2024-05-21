<?php
$str = "this";
echo $str;
$len= strlen($str);
echo "<br>".$len;
echo "<br>no of words in the string : ". str_word_count($str).".<br>";
echo "reversed string : ". strrev($str)."<br>";
echo "search 'is' : ". strpos($str,"is")."<br>" ."Thank you";

?>