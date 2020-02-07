<html>

<body topmargin=0 leftmargin=0 text=#464646>

<center>
<BR>

<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action=update.php method=post>

<table width=600 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
	<tr>
		<td height=20 align=center bgcolor=#999999>
		<font color=white><B>공지사항 수정</B></font>
		</td>
	</tr>

<?php
	$conn=mysql_connect("localhost","root","solbox");
	mysql_select_db("noc", $conn);

	$result=mysql_query("select content from notice", $conn);
	$row=mysql_fetch_array($result);
?>

	<tr>
		<td bgcolor=white>&nbsp;
			<table>
				<tr>
					<td width=60>내용</td>
						<td align=left >
							<TEXTAREA name="content" cols=140 rows=40><?php echo $row['content']; ?></TEXTAREA>
						</td>
				</tr>
	<tr>
		<td colspan=10 align=center>
			<INPUT type=submit value="저장">
			&nbsp;&nbsp;
			<INPUT type=button value="취소" onclick="history.back(-1)">
		</td>
	</tr>
			</TABLE>
		</td> 
	</tr>
<!-- 입력 부분 끝 -->
</table>
</form>
</center>
</body>
</html> 
