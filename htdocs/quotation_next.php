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

	
	
	$req=$_GET["reqid"];
	$min=$_GET["minorder"];
	$dis=$_GET["discount"];
	$ven=$_GET["ven_name"];
	$pri=$_GET["price"];

	
	
	$id=rand(20,500);
	


		$query="INSERT into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) 
		values ('$id','$ven','$req','$min','$pri','$dis')";


	$stid = oci_parse($conn,$query);
	oci_execute($stid);
	$count=0;
	
?>
<div align = "center" >
	<form action="http://localhost/pd.html" method="">
		
	
			<div id="button">
			
			<input type="image"" name="LOGIN" src="button2.png" class="button2 button1"/>			

			</div>
	</form>
</div>
</body>
</html>	