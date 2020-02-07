<?php

$link=mysqli_connect("localhost","root","solbox", "noc" );
if(!$link){
die("Connection failed: " . mysqli_connect_error());
}

$sql= "SELECT content FROM `notice`;";
$result=mysqli_query($link,$sql);

$row=mysqli_fetch_assoc($result);

$nl2br=nl2br($row['content']);
?>

<meta charset="utf-8">

<h2 style="text-align:center"> 공 지 사 항
<button id="join" onclick="location.href='./modify.php'"> 수정</button><br>
</h2>
<br>
<br>

<?php

echo $nl2br;

?>
