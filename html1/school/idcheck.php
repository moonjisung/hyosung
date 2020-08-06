<?php
    $id=$_GET["id"];
    $conn=mysqli_connect("localhost","root","123456","testdb");
    $jquery="select * from member1 where id='$id'";
    $rs=mysqli_query($conn,$jquery);
?>
<script>
function choice(){
    opener.document.frm1.pw1.focus();
    this.close();
}
</script>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="section.css">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php if(mysqli_num_rows($rs)) { ?>
     <script>
     alert("사용중인 아이디입니다.");
     opener.document.frm1.id.value="";
     opener.document.frm1.id.focus();     
     this.close();
     </script>
    <?php }else{ ?>
    <br><br><br>
     <table class="table">
     <tr>
         <td>사용가능한 아이디입니다.</td>
     </tr>
     <tr>
         <td><input type="button" value="사용하기" onclick="choice()" class="bt"></td>
     </tr>
     </table>
    <?php } ?>
</body>
</html>