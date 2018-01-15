<?php 
	$conn=oci_connect("scott","tiger","localhost/dani");
	If (!conn)
		echo "Failed to connect to Oracle";
	else 
		echo "Succesfully connected with Oracle DB :-)";

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>po_form</title>
<style type="text/css">
<!--
body {
	background-image: url(website_background_shadow_copy_invert_by_mdmbau-d8zmcje.png);
	background-size: cover;
}
.style1 {
	font-family: "Georgia";
	font-weight: bold;
	color: white;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	color: white;
}
.styledrop{
	margin: 0;
	padding: 2;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 356px;
	height: 40px;
	float: center;
	background-color: #FBFBFB;
}

.styledrop2{
	margin: 0;
	padding: 2;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 541px;
	height: 47px;
	float: center;
	background-color: #FBFBFB;
}

.styledrop3{
	margin: 0;
	padding: 2;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 100px;
	height: 40px;
	float: center;
	background-color: #FBFBFB;
}

tr:nth-child(odd){background-color: #212121}
th {
    background-color: #212121;
    color: white;
}
#Layer1 {
	position:absolute;
	left:519px;
	top:247px;
	width:416px;
	height:115px;
	z-index:1;
}

.style24 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
}



.button5111 {background-color: #303F9F; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	width: 300px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
-->
</style>
</head>

<body>

<h1 align="center"><span class="style1">Invoice</span></h1>
<h1 align="center" class="style5">425 American Ash Junction, USA<br />
  Tel No: 2321684<br />
Website: www.abc.com
</p>
</h1>
<form id="form1" name="rec_val" method="get" action="http://localhost/invoice.php">
  <table width="417" border="1" align="center" cellspacing="1" bordercolor="#333333">
    <tr>
      <th width="409" height="36" scope="col"><div align="center">
          <p class="style24">Select Purchase Order </p>
      </div></th>
    </tr>
    <tr>
      <th height="36" bordercolor="#333333" scope="col"><select name="reqid" class="styledrop3">
	  <option value="">Choose</option>		
						<?php 
				
						$query = 'select * from PurchaseOrder';
						$stid = oci_parse($conn,$query);
						oci_execute($stid);	
						
							
						while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
						{ 		
							
								echo "<option value= $row[0]>" . htmlspecialchars($row[0]) . '</option>';
								
								
								
						}
						var_dump($row[1])
						?>
	  
	  
	  
      </select></th>
    </tr>
    <tr>
      <th height="36" scope="col"><input name="Submit" type="submit" class="button5111" value="Submit"  align="center" /></th>
    </tr>
  </table>
</form>
<p><span class="style5">
  
</span></p>
<p align="center" class="style5">&nbsp;</p>
</body>

</html>
