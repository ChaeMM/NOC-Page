<?php

function type($type)
{
	$link=mysqli_connect("localhost","root","solbox", "noc");
	if(!$link){
	die("Connection failed: " . mysqli_connect_error());
	}

	$sql= "select * from site where Type = '$type'";

	$result=mysqli_query($link, $sql);

	while($row = mysqli_fetch_array($result)){

	$url = $row['Url'];
	$name = $row['Name']; 

	echo "<a href='$url' target=_blank>$name</a>";
	echo "<br>";
	}
}
?>
						
				<div style="width:295px; height:300px; float:left;">
					<h3> <span style="color:red">Streaming Monitoring</span> </h3>
                                        <p>
						<?php type("STM"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red">Live Monitoring</span> </h3>
                                        <p>
						<?php type("LIVE"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red">Solrtmp(Tpot)</span> </h3>
                                        <p>
						<?php type("RTMP"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red">SBS 라이브 릴레이 정보</span> </h3>
                                        <p>
						<?php type("RELAY"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red">SW Player(스트림 테스림)</span> </h3>
                                        <p>
						<?php type("STT"); ?>
                                        </p>
                                </div>
<?php
mysqli_close($link);
?>
