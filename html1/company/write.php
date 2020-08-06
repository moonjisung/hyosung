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
            <td colspan="2" align="center">회사원 추가 폼</td>
        </tr>
        <tr>
            <td>사원번호</td>
            <td><input type="text" name="nb" size="25"></td>
        </tr>
        <tr>
            <td>이름</td>
            <td><input type="text" name="nb" size="25"></td>
        </tr>
        <tr>
            <td>부서명</td>
            <td><select name="dp">
            <option value="인사과">인사과</option>
            <option value="영업과">영업과</option>
            <option value="총무과">총무과</option>
            <option value="개발팀">개발팀</option>
            </select>
        </td>
        </tr>
        <tr>
            <td>직급</td>
            <td><input type="text" name="nb" size="25"></td>
        </tr>
        <tr>
            <td>전화번호</td>
            <td><input type="text" name="nb" size="25"></td>
        </tr>
        <tr>
            <td>주소</td>
            <td><input type="text" name="nb" size="25"></td>
        </tr>
        <tr>
            <td>이메일</td>
            <td><input type="text" name="nb" size="25"></td>
        </tr>
        <tr>
            <td>혼인여부</td>
            <td><input type="radio" name="radio1" value="미혼">미혼
            <input type="radio" name="radio1" value="기혼">기혼
            </td>
        </tr>
        <tr>
            <td>성별</td>
            <td><select name="gendar">
            <option value="m">남성</option>
            <option value="f">여성</option>
            </select></td>
        </tr>
        <tr>
            <td>연봉</td>
            <td><input type="text" name="nb" size="25"></td>
        </tr>
        <tr>
            <td>생년월일</td>
            <td><input type="text" name="nb" size="25"></td>
        </tr>
        <tr>
            <td>경력여부</td>
            <td><input type="text" name="nb" size="25"></td>
        </tr>
        <tr>
            <td>최종학력</td>
            <td><input type="text" name="nb" size="25"></td>
        </tr>
        <tr>
            <td>전공</td>
            <td><input type="text" name="nb" size="25"></td>
        </tr>
        </tr>
        <td colspan="2" align="center"> 
        <input type="button" value="작성완료" class="bt" onclick="send()">
    </td>
    </tr>
    </table>
</body>
</html>