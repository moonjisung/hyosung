<script>
    function send(){
        //무결성 체크...
        //무결성 체크 후 포스트 방식으로 write._ok.php이도
        document.frm1.submit();
    }
    </script>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form name="frm1" method="post" action="write_ok.php">
    <br><br>
    <table class="table" width="600px">
    <tr>
        <td colspan="2" align="center">
        학생추가폼
    </tr>
</td>
    <tr>
    <td>전화번호</td>
    <td><input type="text" name="hp" size="25"></td>
    </tr>
    <tr>
    <td>이름</td>
    <td><input type="text" name="name" size="25"></td>
    </tr>
    <tr>
    <td>성별</td>
    <td>
    <select name="gendar">
        <option value="m">남성</option>
        <option value="f">여성</option>
    </select>
    </td>
    </tr>
    <tr>
    <td>나이</td>
    <td><input type="text" name="age"></td>
    </tr>
    <tr>
    <td>주소</td>
    <td><input type="text" name="addr" size="25"></td>
    </tr>
    <tr>
    <td>이메일</td>
    <td><input type="text" name="email" size="25"></td>
    </tr>
    <tr>
    <td>최종학력</td>
    <td><select name="grade">
        <option value="대학원졸">대학원졸</option>
        <option value="대졸">대졸</option>
        <option value="초대졸">초대졸</option>
        <option value="고졸">고졸</option>
        <option value="중졸">중졸</option>
    </select>
    </td>
    </tr>
    <tr>
    <td>전공</td>
    <td><input type="text" name="major"></td>
    </tr>
    <tr>
    <td>홈페이지</td>
    <td><input type="text" name="homep" size="25"></td>
    <tr>
        <td colspan="2" align="center"> 
        <input type="button" value="작성완료" class="bt" onclick="send()">
    </td>
    </tr>
</table> 
</form>   
</body>
</html>