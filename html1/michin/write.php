<script>
   function send(){
     document.frm1.submit();
   }
</script>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form name="frm1" method="post" action="write_ok.php">
<br><br>
<table class="table" width="600px">
<tr>
    <td colspan="2" align="center">추가 근무</td>
</tr>
<tr>
    <td>사원번호</td>
    <td><input type="text" name="num" size="25"></td>
</tr>
<tr>
    <td>이름</td>
    <td><input type="text" name="name" size="25"></td>
</tr>
<tr>
    <td>직급</td>
    <td>
    <select name="rk">
    <option value="사장">사장</option>
    <option value="부장">부장</option>
    <option value="과장">과장</option>
    <option value="대리">대리</option>
    <option value="사원">사원</option>
    </select>
    </td>
</tr>
<tr>
         <td>추가근무시간</td>
         <td><select name="ad">
         <?php
         $time=0;
         while($time<=60){
         ?>
         <option value="<?php echo $time?>"><?php echo $time ?></option>
         <?php $time++;}?>
         </select>
         </td>
      </tr>

<tr>
    <td colspan="2" align="center">
    <input type="button" value="작성완료" class="bt" onclick="send()">
    </td>
</tr>
</table>
</form>
</body>
</html>
