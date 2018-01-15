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
	
	$empid=$_GET[emp_id];
	
	
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
	
	
	
	$totalq=$_GET["t_quan"];
	$total_p=$_GET["total"];
	$a3=$_GET["a3"];
	$a4=$_GET["a4"];
	$a5=$_GET["a5"];
	$a6=$_GET["a6"];
	
	$invid=rand(20,500);
	
	$bilto=$_GET["billl_add"];
	$shipto=$_GET["ship_add"];
	$qot=$_GET["qt_id"];
	$dat=$_GET["date"];
	$poid=$_GET["po_id"];
	$vid=$_GET["venid"];

		$query="insert into Invoice (invoice_id, invoice_purchaseorder, invoice_date, invoice_shipto, invoice_billto, invoice_user_id, invoice_vendorid,invoice_total,invoice_totalquantity) values('$invid','$poid','$dat','$shipto','$bilto','$empid','$vid','$total_p','$totalq')";


	$stid = oci_parse($conn,$query);
	$r= oci_execute($stid);
	$count=0;



	
	if ($pid1)
	{
	
		$query="insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity)
		values ('$invid', '$pid1','$q1')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid2)
	{
		$query="insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity)
		values ('$invid', '$pid2','$q2')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid3)
	{
		$query="insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity)
		values ('$invid', '$pid3','$q3')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid4)
	{
		$query="insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity)
		values ('$invid', '$pid4','$q4')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid5)
	{
		$query="insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity)
		values ('$invid', '$pid5','$q5')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	
	if ($pid6)
	{
		$query="insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity)
		values ('$invid', '$pid6','$q6')";
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
	}
	

	
?>
<div align = "center" >
	<form action="http://localhost/invoice_first.php" method="">
		
	
			<div id="button">
			
			<input type="image"" name="LOGIN" src="button2.png" class="button2 button1"/>			

			</div>
	</form>
</div>
</body>
</html>	