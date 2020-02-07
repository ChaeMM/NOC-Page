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
					<h3> <span style="color:red">KTCDN 2.0</span> </h3>
                                        <p>
						<?php type("KT2.0SLB"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red">KTCDN 3.0</span> </h3>
                                        <p>
						<?php type("KT3.0SLB"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red">LGCDN</span> </h3>
                                        <p>
						<?php type("LG2.0SLB"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red">SKCDN</span> </h3>
                                        <p>
						<?php type("SK3.0SLB"); ?>
                                        </p>
                                </div>
                                <div style="width:295px; height:300px; float:left;">
                                        <h3> <span style="color:red">LGCDN3.0</span> </h3>
                                        <p>
						<?php type("LG3.0SLB"); ?>
                                        </p>
                                </div>
<?php
mysqli_close($link);
?>
