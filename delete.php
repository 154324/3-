<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8');

	$db = new mysqli("localhost", "pkw961027", "pkw89463795!", "pkw961027");
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
  $bno = $_GET['id'];
  $sql = mq("delete from board where id='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/" />
