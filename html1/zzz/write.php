<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
    <script>
      function send(){
        document.frm1.submit();
      }
    </script>
  </head>
  <body>
    <form enctype="myltipart/form-data" name="frm1" action="write_ok.php" method="post">
    <table class="table2" >
      <tr>
        <td colspan="2">
          신규 강아지 등록.
        </td>
      </tr>
      <tr>
        <td>품종</td>
        <td> <input type="text" name="dog_name"> </td>
      </tr>
      <tr>
        <td>나이</td>
        <td>
          <select name="bMonth">
            <?php
              for($i=1990;$i<=2020;$i++){
                echo "<option value=$i>$i</option>";
              }
            ?>
          </select>
        </td>
      </tr>
      <tr>
				<td>가격</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>이미지:</td>
				<td><input type="file" name="pic"></td>
			</tr>
      <tr>
				<td>성별</td>
				<td>
          <input type="radio" name="gendar" value="수컷">수컷
          <input type="radio" name="gendar" value="암컷">암컷
        </td>
			</tr>
			<tr>
				<td>특징</td>
				<td><textarea name="memo" cols="70" rows="10"></textarea></td>
			</tr>
      <tr>
				<td colspan="2" align="center">
					<input type="button" class="bt1" value="전송하기" onclick="send()">&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" class="bt1" value="새로작성">
				</td>
			</tr>
    </table>
    </form>
  </body>
</html>
