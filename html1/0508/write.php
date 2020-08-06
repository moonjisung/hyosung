<script>
function tt(){
  document.frm1.submit();

}
</script>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
    </header>
    <section>
      <form name="frm1" method="post" action="write_ok.php">
        <br>
        <table class="table" width=600px>
          <tr>
            <td colspan="2" align="center">공지 추가</td>
          </tr>
          <tr>
            <td>제목</td>
            <td><input type="text" name="title" size="50"></td>
          </tr>
          <tr>
            <td>작성자</td>
            <td><input type="text" name="writer" size="50"></td>
          </tr>
          <tr>
            <td>내용</td>
            <td>
              <textarea name="content" rows="8" cols="80"></textarea>
            </td>
            <tr>
              <td colspan="2" align="center">
                <input type="button" value="추가 완료" class="bt" onclick="tt()">
              </td>
            </tr>
          </tr>
        </table>
    </section>
  </body>
</html>
