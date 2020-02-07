<?php

$conn=mysql_connect("localhost","root","solbox");
mysql_select_db("noc", $conn);

$query = "update notice set content='".$_POST['content']."'";
$result=mysql_query($query, $conn);

mysql_close($conn);

	Header("Location:./notice.php"); 


?>
