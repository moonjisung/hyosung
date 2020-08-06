<?php
 $hark=$_GET["hark"];
 $conn=mysqli_connect("localhost","root","123456","testdb");
 $query="select * from school where hark='$hark'";
 $rs=mysqli_query($conn,$query);
 $row=mysqli_fetch_array($rs);
?>
<script>
    function del(){
        if(confirm("정말로 삭제하겠습니가")){
            location.href="delete.php?hark=<?php echo $hark?>";
        }
    }
    </script>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form name="frm1">
    <br><br>
    <table class="table" width="600px">
    <tr>
        <td colspan="2" align="center">
        학생성적보기
    </tr>
</td>
    <tr>
    <td>학번</td>
    <td><?php echo $row["hark"]?></td>
    </tr>
    <tr>
    <td>이름</td>
    <td><?php echo $row["name"]?></td>
    </tr>
    <tr>
    <td>국어</td>
    <td><?php echo $row["kor"]?></td>
    </tr>
    <tr>
    <td>영어</td>
    <td><?php echo $row["en"]?></td>
    </tr>
    <tr>
    <td>수학</td>
    <td><?php echo $row["math"]?></td>
    </tr>
    <tr>
    <tr>
        <td colspan="2" align="center"> 
        <input type="button" value="수정" class="bt" onclick="location.href='edit.php?hark=<?php echo $hark ?>'">
        <input type="button" value="삭제" class="bt" onclick="del()">
    </td>
    </tr>
</table> 
</form>   
</body>
</html>