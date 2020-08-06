<script>
    function send(){
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
            <td colspan="2" align="center">성적추가폼</td>
        </tr>
    <tr>
        <td>학번</td>
        <td><input type="text" name="hark" size="25"></td>
    </tr>
    <tr>
        <td>이름</td>
        <td><input type="text" name="name" size="25"></td>
    </tr>
    <tr>
        <td>국어</td>
        <td><input type="text" name="kor" size="25"></td>
    </tr>
    <tr>
        <td>영어</td>
        <td><input type="text" name="en" size="25"></td>
    </tr>
    <tr>
        <td>수학</td>
        <td><input type="text" name="math" size="25"></td>
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