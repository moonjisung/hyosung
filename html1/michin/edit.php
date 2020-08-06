<?php
$num=$_GET["num"];
$conn=mysqli_connect("localhost","root","123456","testdb");
$query="select *from michin where num='$num'";
$rs=mysqli_query($conn,$query);
$row=mysqli_fetch_array($rs);
?>
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
    <form name="frm1" method="post" action="edit_ok.php">
    <br><br>
    <table class="table" width="600px">
    <tr>
        <td colspan="2" align="center">
        성적수정폼
    </tr>
</td>
    <tr>
    <td>사원번호</td>
    <td><input type="text" name="num" size="25" value="<?php echo $row["num"]?>"readonly>[수정불가]</td>
    </tr>
    <tr>
    <td>이름</td>
    <td><input type="text" name="name" size="25" value="<?php echo $row["name"]?>"></td>
    </tr>
    <tr>
    <td>직급</td>
    <td><input type="text" name="rk" size="25" value="<?php echo $row["rk"]?>"></td>
    </tr>
    </tr>
    <tr>
    <td>기본급</td>
    <td><input type="text" name="nomal" value="<?php echo $row["nomal"]?>"></td>
    </tr>
    <tr>
    <td>추가수당</td>
    <td><input type="text" name="ad" size="25" value="<?php echo $row["ad"]?>"></td>
    </tr>
    <tr>
    <td>총급여</td>
    <td><input type="text" name="total" size="25" value="<?php echo $row["total"]?>"></td>
    </tr>
    </tr>
        <td colspan="2" align="center">
        <input type="button" value="수정완료" class="bt" onclick="send()">
    </td>
    </tr>
</table>
</form>
</body>
</html>
