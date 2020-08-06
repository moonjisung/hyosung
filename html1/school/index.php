<?php
    $conn=mysqli_connect("localhost","root","123456","testdb");
    $query="select * from school";
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
    <table class=table width="600px">
    <tr>
        <td>학번</td>
        <td>이름</td>
        <td>국어</td>
        <td>영어</td>
        <td>수학</td>
        <td>총점</td>
        <td>평균</td>
        <td>비고</td>
    </tr>
    <?php
    while($row=mysqli_fetch_array($rs)){ ?>
    <tr>
        <td><?php echo $row["hark"]?></td>
        <td><a href="content.php?hark=<?php echo $row["hark"]?>">
        <?php echo $row["name"]?></a>
        </td>
        <td><?php echo $row["kor"]?></td>
        <td><?php echo $row["en"]?></td>
        <td><?php echo $row["math"]?></td>
        <td><?php echo $row["al"]?></td>
        <td><?php echo $row["av"]?></td>
        <td><?php echo $row["bego"]?></td>
    </tr>
    <?php }?>
    <tr>
        <td colspan="8" align="center">
            <input type="button" value="학생 추가"
            class="bt"
            onclick="location.href='write.php'">
        </td>
    </tr>
    <tr>
        <td colspan="9" align="right"><font color="red">
            <b><?php echo $cnt ?></b></font>건의 데이터가 검색되었습니다.</td>
    </tr>
    </table>
</body>
</html>