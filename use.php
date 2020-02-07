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

<head> <meta charset="utf8"> </head>

						
				<div style="width:290px; height:300px; float:left;">
					<h3> <span style="color:red">JIRA</span> </h3>
                                        <p>
						<?php type("JIRA"); ?>
                                        </p>
                                </div>
                                <div style="width:290px; height:300px; float:left;">
                                        <h3> <span style="color:red">servicelist</span> </h3>
                                        <p>
						<?php type("SLIST"); ?>
                                        </p>
                                </div>
                                <div style="width:290px; height:300px; float:left;">
                                        <h3> <span style="color:red">ADP</span> </h3>
                                        <p>
						<?php type("ADP"); ?>
                                        </p>
                                </div>
                                <div style="width:290px; height:300px; float:left;">
                                        <h3> <span style="color:red">양방향 ADP</span> </h3>
                                        <p>
						<?php type("CADP"); ?>
                                        </p>
                                </div>
                                <div style="width:290px; height:300px; float:left;">
                                        <h3> <span style="color:red">CSP</span> </h3>
                                        <p>
						<?php type("CSP"); ?>
                                        </p>
                                </div>
                                <div style="width:290px; height:300px; float:left;">
                                        <h3> <span style="color:red">ibat</span> </h3>
                                        <p>
                                                <?php type("IBAT"); ?>
                                        </p>
                                </div>
                                <div style="width:290px; height:300px; float:left;">
                                        <h3> <span style="color:red">KT Hedge(vrc, 전원 이중화관련)</span> </h3>
                                        <p>
                                                <?php type("KTHEDGE"); ?>
                                        </p>
                                </div>
                                <div style="width:290px; height:300px; float:left;">
                                        <h3> <span style="color:red">KT VOD Transcoder</span> </h3>
                                        <p>
                                                <?php type("TRANS"); ?>
                                        </p>
                                </div>
                                <div style="width:290px; height:300px; float:left;">
                                        <h3> <span style="color:red">SMS 발송(SK, LG)</span> </h3>
                                        <p>
                                                <?php type("SMS"); ?>
                                        </p>
                                </div>
<?php
mysqli_close($link);
?>
