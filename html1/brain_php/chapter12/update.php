<?
	//������ ���̽� �����ϱ�
	include "db_info.php";

	// ���� ��й�ȣ�� �����´�.
	$result=mysql_query("SELECT pass FROM $board WHERE id='$_GET[id]'", $conn);
	$row=mysql_fetch_array($result);

	//�Էµ� ���� ���Ѵ�.
	if ($_POST[pass]==$row[pass]) { //��й�ȣ�� ��ġ�ϴ� ���
		$query = "UPDATE $board SET name='$_POST[name]', email='$_POST[email]',
		title='$_POST[title]', content='$_POST[content]' WHERE id=$_GET[id]";
		$result=mysql_query($query, $conn);
	}
	else { // ��й�ȣ�� ��ġ���� �ʴ� ���
		echo ("
		<script>
		alert('��й�ȣ�� Ʋ���ϴ�.');
		history.go(-1);
		</script>
		");
		exit;
	}
	//�����ͺ��̽����� ���� ����
	mysql_close($conn);
	//�����ϱ��� ��� ������ �۷�..
	echo ("<meta http-equiv='Refresh' content='1; URL=read.php?id=$_GET[id]'>");
?>
<center>
<font size=2>���������� �����Ǿ����ϴ�.</font>