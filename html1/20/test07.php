<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script>
    var name1=new Array();
    var cr1=new Array();
    var point1=new Array();
    var style1=new Array();
    var sp=new Array();
    var str="";

    var cnt=0;
    function input(){
      name1[cnt]=frm.name.value;
      cr1[cnt]=frm.cr.value;
      point1[cnt]=frm.point.value;
      style1[cnt]=frm.style.value;
      if(document.getElementById("sp1").checked==true){
        str+=document.getElementById("sp1").value;
      }
      if(document.getElementById("sp2").checked==true){
        str+=document.getElementById("sp2").value;
      }
      if(document.getElementById("sp3").checked==true){
        str+=document.getElementById("sp3").value;
      }
      if(document.getElementById("sp4").checked==true){
        str+=document.getElementById("sp4").value;
      }
      if(document.getElementById("sp5").checked==true){
        str+=document.getElementById("sp5").value;
      }
      if(document.getElementById("sp6").checked==true){
        str+=document.getElementById("sp6").value;
      }
      sp[cnt]=str;
      frm.name.value=" ";
      document.getElementById("cr").selectedIndex=0;
      document.getElementById("point").selectedIndex=0;
      document.getElementById("style").selectedIndex=0;
      document.getElementById("sp1").checked=false;
      document.getElementById("sp2").checked=false;
      document.getElementById("sp3").checked=false;
      document.getElementById("sp4").checked=false;
      document.getElementById("sp5").checked=false;
      document.getElementById("sp6").checked=false;
      frm.name.focus();
      cnt++;
    }
    function output(){
      document.write("<table border='1'>");
      document.write("<tr>");
      document.write("<td>이름</td>");
      document.write("<td>구력</td>");
      document.write("<td>점수</td>");
      document.write("<td>스타일</td>");
      document.write("<td>주특기</td>");
      document.write("</tr>");
      for(i=0; i<name1.length;i++){
        document.write("<tr>");
        document.write("<td>");
        document.write(name1[i]);
        document.write("</td>");
        document.write("<td>");
        document.write(cr1[i]);
        document.write("</td>");
        document.write("<td>");
        document.write(point1[i]);
        document.write("</td>");
        document.write("<td>");
        document.write(style1[i]);
        document.write("</td>");
        document.write("<td>");
        document.write(sp[i]);
        document.write("</td>");
        document.write("</tr>");
      }
      document.write("</table>");
    }

    </script>
  </head>
  <body>
    <form name="frm">
      <tr>
      <table border="1">
        <tr>
          <td>이름</td>
          <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <td>구력</td>
          <td>
            <select name="cr" id="cr">
              <?php for($i=1; $i<=10; $i++){?>
              <option value="<?php echo $i?>"><?php echo $i ?></option>
            <?php } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>점수</td>
          <td>
            <select name="point" id="point">
              <option value="30">30</option>
              <option value="50">50</option>
              <option value="80">80</option>
              <option value="100">100</option>
              <option value="120">120</option>
              <option value="150">150</option>
              <option value="200">200</option>
              <option value="250">250</option>
              <option value="300">300</option>
              <option value="400">400</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>스타일</td>
          <td>
            <select name="style" id="style">
              <option value="깔끔">깔끔</option>
              <option value="비매너">비매너</option>
              <option value="지저분">지저분</option>
            </select>
            <tr>
              <td>주특기</td>
              <td>
              <input type="checkbox" name="sp1" id="sp1" value="히끼">히끼
              <input type="checkbox" name="sp2" id="sp2" value=",우라마시">우라마시
              <input type="checkbox" name="sp3" id="sp3" value=",오마시">오마시
              <input type="checkbox" name="sp4" id="sp4" value=",맛세이">맛세이
              <input type="checkbox" name="sp5" id="sp5" value=",기리까시">기리까시
              <input type="checkbox" name="sp6" id="sp6" value=",오시">오시
              </td>
            </tr>
          </td>
          <td colspan="2" align="center">
          <input type="button" value="입력" onclick="input()">
          <input type="button" value="출력" onclick="output()"></td>
        </tr>
      </table>
      </tr>
    </form>
  </body>
</html>
