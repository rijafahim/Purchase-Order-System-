<?php ob_start() ?>
<html>
<body>
<head>
	<style type ="text/css">
	html{
	
	background: url(b.jpg) no-repeat center fixed;
	background-size: cover;
}

		#box{	
			margin: 280px;
			 padding:0px;
		}
		.bo{
			border:#666666 solid 2px;
			width: 300px;
			height: 41px;
			
		}
		
		#box2{
			
			margin: -265px;
			 padding:0px;
		}
		</style>
		</head>
<?php
	$conn=oci_connect("scott","tiger","localhost/dani");
	If (!conn)
		echo "Failed to connect to Oracle";
	else 
		echo "Succesfully connected with Oracle DB :-)";
	
	
	$aprv=$_POST["aprove"];
	

	$query = "UPDATE Requisition set approved_by='true' where req_id='$aprv'";
	$stid = oci_parse($conn,$query);
	oci_execute($stid);

	$count=0;
	
	while (($t1 = oci_fetch_array($stid, OCI_BOTH)) != false)
	{
		//$count++;
		//echo $t1[5];
		//$dept=$t1[5];
	}
	
		//echo $desig;
		$red='http://localhost/HOD.php';
		header('Location:'.$red);
	
	
	ob_end_clean();
?>

<div align = "center" >
	<form action="http://localhost/pending.php" method="">
		
	
			<div id="button">
			
			<input type="image"" name="LOGIN" src="button2.png" class="button2 button1"/>			

			</div>
	</form>
</body>
</html>