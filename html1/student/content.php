<?php
 $hp=$_GET["hp"];
//  echo $hp;exit;
 $conn=mysqli_connect("localhost","root","123456","testdb");
 $query="select * from student where hp='$hp'";
 $rs=mysqli_query($conn,$query);
 $row=mysqli_fetch_array($rs);
?>
<script>
    function del(){
        if(confirm("정말로 삭제하겠습니가")){
            location.href="delete.php?hp=<?php echo $hp?>";
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
        학생상세보기
    </tr>
</td>
    <tr>
    <td>전화번호</td>
    <td><?php echo $row["hp"]?></td>
    </tr>
    <tr>
    <td>이름</td>
    <td><?php echo $row["name"]?></td>
    </tr>
    <tr>
    <td>성별</td>
    <td><?php echo $row["gendar"]?></td>
    </tr>
    <tr>
    <td>나이</td>
    <td><?php echo $row["age"]?></td>
    </tr>
    <tr>
    <td>주소</td>
    <td><?php echo $row["addr"]?></td>
    </tr>
    <tr>
    <td>이메일</td>
    <td><?php echo $row["email"]?></td>
    </tr>
    <tr>
    <td>최종학력</td>
    <td><?php echo $row["grade"]?></td>
    </tr>
    <tr>
    <td>전공</td>
    <td><?php echo $row["major"]?></td>
    </tr>
    <tr>
    <td>홈페이지</td>
    <td><?php echo $row["homep"]?></td>
    </tr>
    <tr>
        <td colspan="2" align="center"> 
        <input type="button" value="수정" class="bt" onclick="location.href='edit.php?hp=<?php echo $hp ?>'">
        <input type="button" value="삭제" class="bt" onclick="del()">
    </td>
    </tr>
</table> 
</form>   
</body>
</html>