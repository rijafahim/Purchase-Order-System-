<html>
<body>
<head>
	<style type="text/css">
		html{
	background: url(b.jpg) no-repeat center fixed;
	background-size: cover;
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
#button
		{
			position: absolute; 
            left: 30px; 
            right: 30px; 
            top: 380px; 
            bottom: 10px; 
		
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
	
	$reqid=rand(12,500);
	
	$dat=$_GET[date];
	$reqid=$_GET[req];
	$addr=$_GET[address];
	$quot=$_GET[quot_id];
	$po_id=rand(11,500);
	$ven=$_GET[ven_name];

		$query="insert into PurchaseOrder (purchase_order_id, requisition_id, vendor_id,shippingaddress, date_generated, quotation_id) values ('$po_id','$reqid','$ven','$addr','$dat','$quot')";

	$stid = oci_parse($conn,$query);
	$r= oci_execute($stid);
	$count=0;
	
	
	if ($pid1)
	{
	
		$query="insert into PurchaseOrderDescription (  pod_order_id, pod_item_id, pod_quantity ) 
		values ('$po_id', '$pid1','$q1')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid2)
	{
		$query="insert into PurchaseOrderDescription (  pod_order_id, pod_item_id, pod_quantity ) 
		values ('$po_id', '$pid2','$q2')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid3)
	{
		$query="insert into PurchaseOrderDescription (  pod_order_id, pod_item_id, pod_quantity ) 
		values ('$po_id', '$pid3','$q3')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid4)
	{
		$query="insert into PurchaseOrderDescription (  pod_order_id, pod_item_id, pod_quantity ) 
		values ('$po_id', '$pid4','$q4')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid5)
	{
		$query="insert into PurchaseOrderDescription (  pod_order_id, pod_item_id, pod_quantity ) 
		values ('$po_id', '$pid5','$q5')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid6)
	{
		$query="insert into PurchaseOrderDescription (  pod_order_id, pod_item_id, pod_quantity ) 
		values ('$po_id', '$pid6','$q6')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	

	
?>
<div align = "center" >
	<form action="http://localhost/po_form_first.php" method="">
		
	
			<div id="button">
			
			<input type="image"" name="LOGIN" src="button2.png" class="button2 button1"/>			

			</div>
	</form>
</div>
</body>
</html>	