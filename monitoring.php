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
					<h3> <span style="color:red">ISM</span> </h3>
                                        <p>
						<?php type("ISM"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red"> Grafana </span> </h3>
                                        <p>
						<?php type("Grafana"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red">PRTG</span> </h3>
                                        <p>
						<?php type("PRTG"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red">E2E</span> </h3>
                                        <p>
						<?php type("E2E"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red">AMS</span> </h3>
                                        <p>
						<?php type("AMS"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red">GMS</span> </h3>
                                        <p>
						<?php type("GMS"); ?>
                                        </p>
                                </div>
<?php
mysqli_close($link);
?>
