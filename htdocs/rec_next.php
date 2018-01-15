<html>
<body background="C:\xampp\htdocs\b.jpg">
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
	
	$var_ID1=$_GET["itm_id1"];
	$var_ID2=$_GET["itm_id2"];
	$var_ID3=$_GET["itm_id3"];
	$var_ID4=$_GET["itm_id4"];
	$var_ID5=$_GET["itm_id5"];
	$var_ID6=$_GET["itm_id6"];
	
	$var_qt1=$_GET["qt1"];
	$var_qt2=$_GET["qt2"];
	$var_qt3=$_GET["qt3"];
	$var_qt4=$_GET["qt4"];
	$var_qt5=$_GET["qt5"];
	$var_qt6=$_GET["qt6"];
	
	$reqid=rand(1500,5000);
	

	$query = "insert into Requisition(req_id,req_user_id) 
			  values ('$reqid','$var2')";
	$stid = oci_parse($conn,$query);
	$r= oci_execute($stid);
	$count=0;
	
	
	if ($var_ID1)
	{
		$query="insert into RequisitionDescription( rd_item_id, rd_quantity, rd_id) 
		values ('$var_ID1', '$var_qt1','$reqid')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($var_ID2)
	{
		$query="insert into RequisitionDescription( rd_item_id, rd_quantity, rd_id) 
		values ('$var_ID2', '$var_qt2','$reqid')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($var_ID3)
	{
		$query="insert into RequisitionDescription( rd_item_id, rd_quantity, rd_id) 
		values ('$var_ID3', '$var_qt3','$reqid')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($var_ID4)
	{
		$query="insert into RequisitionDescription( rd_item_id, rd_quantity, rd_id) 
		values ('$var_ID4', '$var_qt4','$reqid')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($var_ID5)
	{
		$query="insert into RequisitionDescription( rd_item_id, rd_quantity, rd_id) 
		values ('$var_ID5', '$var_qt5','$reqid')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($var_ID6)
	{
		$query="insert into RequisitionDescription( rd_item_id, rd_quantity, rd_id) 
		values ('$var_ID6', '$var_qt6','$reqid')";
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