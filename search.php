<?php

if(empty($_REQUEST["".$_POST['search'].""])){ // 검색어가 empty일 때 예외처리를 해준다.

$search_word ="";

}else{

$search_word =$_REQUEST["".$_POST['search'].""];

}

        $link=mysqli_connect("localhost","root","solbox", "noc");

        if(!$link){
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql= "select * from site where Name like '%".$_POST['search']."%' OR Type like '%".$_POST['search']."%' ";

        $result=mysqli_query($link, $sql);
	$check = mysqli_fetch_array($result);
	
	if(!$check)
	{
		echo '<script>alert("검색 결과가 없습니다.");</script>';
		echo "<script> self.close(); </script>";
	}


   	$result=mysqli_query($link, $sql);		
        while($row = mysqli_fetch_array($result)){

        $url = $row['Url'];
        $name = $row['Name'];

        echo "<a href='$url' target=_blank>$name</a>";
        echo "<br>";
        }
?>

