<?php
//검색하고 싶은 번호는 [4~49]
$result1=preg_match("/4.-49/u","확실히 49-46 이었습니다.");

//결과출력하기 : var_dump
var_dump($result1);
var_dump($result2);
var_dump($result3);
echo("<br>");
echo("<hr>");
//결과출력하기 : echo
echo($result1);
echo($result2);
echo($result3);
echo("<br>");
echo("<hr>");
//결과출력하기 : printf_r
print_r($result1);
print_r($result2);
print_r($result3);
echo("<br>");
echo("<hr>");
?>