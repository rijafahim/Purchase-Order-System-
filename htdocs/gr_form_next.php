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
		#button
		{
			position: absolute; 
            left: 30px; 
            right: 30px; 
            top: 380px; 
            bottom: 10px; 
		
		}

	.button1 {
    background-color: ; /* Green */
    border: none;
    color: white;
    padding: ;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: ;
	width:;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
	</style>	
</head>	
<?php


 $conn=oci_connect("scott","tiger","localhost/dani");
	If (!conn)
		echo "Failed to connect to Oracle";
	else 
		echo "Connected with Oracle DB";
	
	
	$var1=$_GET[emp_name];
	$var2=$_GET[emp_no];
	
	$pid1=$_GET["pid1"];
	$pid2=$_GET["pid2"];
	$pid3=$_GET["pid3"];
	$pid4=$_GET["pid4"];
	$pid5=$_GET["pid5"];
	$pid6=$_GET["pid6"];
	
	$q1=$_GET["q1"];
	$q2=$_GET["q2"];
	$q3=$_GET["q3"];
	$q4=$_GET["q4"];
	$q5=$_GET["q5"];
	$q6=$_GET["q6"];
	
	$up1=$_GET["up1"];
	$up2=$_GET["up2"];
	$up3=$_GET["up3"];
	$up4=$_GET["up4"];
	$up5=$_GET["up5"];
	$up6=$_GET["up6"];
	
	$a1=$_GET["a1"];
	$a2=$_GET["a2"];
	$a3=$_GET["a3"];
	$a4=$_GET["a4"];
	$a5=$_GET["a5"];
	$a6=$_GET["a6"];
	
	$reqid=rand(1500,5000);
	
	$query = "insert into requisition( req_id, req_user_id, req_user_name) 
			  values ('$reqid','$var2','$var1')";
	$stid = oci_parse($conn,$query);
	$r= oci_execute($stid);
	$count=0;
	
	
	if ($pid1)
	{
		$rid=rand(10,1000);
		$query="insert into RequisitionDescription( rd_item_id, rd_quantity, rd_id, req_id ) 
		values ('$var_ID1', '$var_qt1','$rid','$reqid')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid2)
	{
		$rid=rand(10,1000);
		$query="insert into RequisitionDescription( rd_item_id, rd_quantity, rd_id, req_id ) 
		values ('$var_ID2', '$var_qt2','$rid','$reqid')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid3)
	{
		$rid=rand(10,1000);
		$query="insert into RequisitionDescription( rd_item_id, rd_quantity, rd_id, req_id ) 
		values ('$var_ID3', '$var_qt3','$rid','$reqid')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid4)
	{
		$rid=rand(10,1000);
		$query="insert into RequisitionDescription( rd_item_id, rd_quantity, rd_id, req_id ) 
		values ('$var_ID4', '$var_qt4','$rid','$reqid')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid5)
	{
		$rid=rand(10,1000);
		$query="insert into RequisitionDescription( rd_item_id, rd_quantity, rd_id, req_id ) 
		values ('$var_ID5', '$var_qt5','$rid','$reqid')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid6)
	{
		$rid=rand(10,1000);
		$query="insert into RequisitionDescription( rd_item_id, rd_quantity, rd_id, req_id ) 
		values ('$var_ID6', '$var_qt6','$rid','$reqid')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	

	
?>
<div align = "center" >
	<form action="http://localhost/rec1.php" method="">
		
	
			<div id="button">
			
			<input type="image"" name="LOGIN" src="button2.png" class="button2 button1"/>			

			</div>
	</form>
</div>	

</body>
</html>	