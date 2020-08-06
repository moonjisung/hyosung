<?php
$hark=$_GET["hark"];
$conn=mysqli_connect("localhost","root","123456","testdb");
$query="select *from school where hark='$hark'";
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
    <td>학번</td>
    <td><input type="text" name="hark" size="25" value="<?php echo $row["hark"]?>"readonly>[수정불가]</td>
    </tr>
    <tr>
    <td>이름</td>
    <td><input type="text" name="name" size="25" value="<?php echo $row["name"]?>"></td>
    </tr>
    <tr>
    <td>국어</td>
    <td><input type="text" name="kor" size="25" value="<?php echo $row["kor"]?>"></td>
    </tr>
    </tr>
    <tr>
    <td>영어</td>
    <td><input type="text" name="en" value="<?php echo $row["en"]?>"></td>
    </tr>
    <tr>
    <td>수학</td>
    <td><input type="text" name="math" size="25" value="<?php echo $row["math"]?>"></td>
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