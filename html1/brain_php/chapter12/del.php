<?
	//������ ���̽� �����ϱ�
	include "db_info.php";

	$query = "SELECT pass FROM $board WHERE id=$_GET[id]";
	$result=mysql_query($query, $conn);
	$row=mysql_fetch_array($result);

	if ($_POST[pass]==$row[pass] )
	{
		$query = "DELETE FROM $board WHERE id=$_GET[id] ";
		$result=mysql_query($query, $conn);
	}
	else
	{
		echo ("
		<script>
		alert('��й�ȣ�� Ʋ���ϴ�.');
		history.go(-1);
		</script>
		");
		exit;
	}
?>
<center>
<meta http-equiv='Refresh' content='1; URL=list.php'>
<FONT size=2 >�����Ǿ����ϴ�.</font>