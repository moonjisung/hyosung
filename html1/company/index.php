<?php
    //db 서버에 접속하는 문법
    $conn=mysqli_connect("localhost","root","123456","testdb");
    $query="select * from company";
    //$conn,$query는 변수이다.
    $rs=mysqli_query($conn,$query);
    $cnt=mysqli_num_rows($rs);
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <tr>
            <td>사원번호</td>
            <td>이름</td>
            <td>부서명</td>
            <td>직급</td>
            <td>전화번호</td>
            <td>주소</td>
            <td>이메일</td>
            <td>혼인여부</td>
            <td>성별</td>
            <td>연봉</td>
            <td>생년월일</td>
            <td>경력여부</td>
            <td>최종학력</td>
            <td>전공</td>
        </tr>
        <?php
        while($row=mysqli_fetch_array($rs)){
            ?>
        <tr>
            <td><?php echo $row["nb"]?></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["dp"]?></td>
            <td><?php echo $row["ranks"]?></td>
            <td><?php echo $row["tel"]?></td>
            <td><?php echo $row["addr"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["marry"]?></td>
            <td><?php echo $row["gendar"]?></td>
            <td><?php echo $row["money"]?></td>
            <td><?php echo $row["br"]?></td>
            <td><?php echo $row["g"]?></td>
            <td><?php echo $row["grade"]?></td>
            <td><?php echo $row["major"]?></td>
        </tr>
        <?php }?>
        <tr>
            <td colspan="14" align="center">
                <input type="button" value="회사원 추가" class="bt"
                onclick="location.href='write.php'"class="bt">
            </td>
        </tr>
        <tr>
        <td colspan="14" align="right"><font color="red">
            <b><?php echo $cnt ?></b></font>건의 데이터가 검색되었습니다.</td>
    </tr>
    </table>
</body>
</html>