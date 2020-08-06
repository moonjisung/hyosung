<?php
//echo를 짧게
function p($msg, $debug=true){
    if ($debug == true){
        echo($msg);
    }
}
 //GET 요청 파라미터 값을 받는다.
 $data = $_GEt["data"];
 //URL 디코딩한다.
 $data = rawurldecode($data);
 //XSS대책
 $data = htmlspecialchars($data, ENT_QUOTES,'UTF-8');
 echo "[{$data}]를 받았습니다.";
?>