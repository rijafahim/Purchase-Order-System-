<?php 
	$conn=oci_connect("scott","tiger","localhost/dani");
	If (!conn)
		echo "Failed to connect to Oracle";
	else 
		echo "Connected with Oracle DB";
	
  
  
	$rec_val=$_GET['reqid'];
	
	
	//$disp=$_GET['selectdb']; 
		$query = "select * from PurchaseOrderDescription where pod_order_id='$rec_val'";
	
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
		$item_id=array();
		$item_qt=array();
		$itm_disp=array();
		//$row = oci_fetch_array($stid, OCI_BOTH); //getting info from req des
		while (($t1 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			
			$item_id[]=$t1[1]; //rd_id
			$item_qt[]=$t1[2]; //qutantity
			//$itm_disp=$t1[0]; //itm id
			
		}
		//echo $result[5];
		
//getting item info here		
	
		$disp=$item_id[0]; 
		$query = "select * from PurchaseOrder where purchase_order_id='$rec_val'";
	
		$stid = oci_parse($conn,$query);
		$r=oci_execute($stid);
		//$row = oci_fetch_array($stid, OCI_BOTH); //getting info from req des
		while (($t1 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$ven=$t1[2];
			$qot=$t1[5];
		} 
		
		$itno=$item_id[0];
		$qt=$item_qt[0];
		echo $itno;
		echo $qt;
		$query2="select * from ITEMS where item_id='$itno'"; //getting price
		$stid = oci_parse($conn,$query2);
		$x=oci_execute($stid);
		while (($t2 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$pri=$t2[3];
		}

	if(isset($item_id[1]))
	{
		// $disp=$item_id[1]; 
		// $query = "select * from REQUISITIONDESCRIPTION where RD_ID='$disp'";
	
		// $stid = oci_parse($conn,$query);
		// $r=oci_execute($stid);
		// //$row = oci_fetch_array($stid, OCI_BOTH); //getting info from req des
		// while (($t1 = oci_fetch_array($stid, OCI_BOTH)) != false)
		// { 		
		// 	$qt2=$t1[1];
		// 	$itno2=$t1[0];
		// } 
		

		$itno2=$item_id[1];
		$qt2=$item_qt[1];

		$query2="select * from ITEMS where item_id='$itno2'"; //getting price
		$stid = oci_parse($conn,$query2);
		$x=oci_execute($stid);
		while (($t2 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$pri2=$t2[3];
		}
	
	}
	
	if(isset($item_id[2]))
	{
		 
		$itno3=$item_id[2];
		$qt3=$item_qt[2];

		$query2="select * from ITEMS where item_id='$itno3'"; //getting price
		$stid = oci_parse($conn,$query2);
		$x=oci_execute($stid);
		while (($t2 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$pri3=$t2[3];
		}
	
	}
	
	if(isset($item_id[3]))
	{
			
		$itno4=$item_id[3];
		$qt4=$item_qt[3];

		$query2="select * from ITEMS where item_id='$itno4'"; //getting price
		$stid = oci_parse($conn,$query2);
		$x=oci_execute($stid);
		while (($t2 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$pri4=$t2[3];
		}
	
	}
	
	if(isset($item_id[4]))
	{
		$itno5=$item_id[4];
		$qt5=$item_qt[4];

		$query2="select * from ITEMS where item_id='$itno5'"; //getting price
		$stid = oci_parse($conn,$query2);
		$x=oci_execute($stid);
		while (($t2 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$pri5=$t2[3];
		}
	
	}
	
	if(isset($item_id[5]))
	{
	
		$itno6=$item_id[5];
		$qt6=$item_qt[5];

		$query2="select * from ITEMS where item_id='$itno6'"; //getting price
		$stid = oci_parse($conn,$query2);
		$x=oci_execute($stid);
		while (($t2 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$pri6=$t2[3];
		}
	}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>invoice</title>
<link href="tables.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(tumblr_static_website_background_light_purple.jpg);
	background-size: cover;
}
.style1 {font-size: 14px}
.HEADERDARKBLUE {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFFFFF;
	background-color: #223066;
}
.GREYROW {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000000;
	background-color: #E6E6E6;
}
.WHITEROW {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000000;
	background-color: #FFFFFF;
}
.button {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 20px;
	color: #000000;
	width: 300px;
	height: 35px;
	
	background-color: #33CC00;
}
.styledTEXTAREA4{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 900px;
	height: 48px;
	float: left;
	background-color: #FBFBFB;
}

.styledTEXTAREA5{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 446px;
	height: 21px;
	float: left;
	background-color: #FBFBFB;
}

.styledTEXTAREA6{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 446px;
	height: 80px;
	float: left;
	background-color: #FBFBFB;
}

.styledTEXTAREA7{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 902px;
	height: 50px;
	float: left;
	background-color: #FBFBFB;
}
.style4 {
	font-family: "Trajan Pro";
	font-weight: bold;
	font-size: 36px;
}
.style12 {
	font-family: "Roboto Lt";
	font-style: italic;
	font-weight: bold;
	color: #FFFFFF;
}
.style16 {	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
}
.styledrop {	margin: 0;
	padding: 2;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 144px;
	height: 20px;
	float: center;
	background-color: #FBFBFB;
}
.style17 {color: #FFFFFF}
-->
</style>
</head>

<body class="tablesss">
<p align="center" class="style4">INVOICE </p>
<table width="259" border="1" align="right" cellpadding="0" cellspacing="1">
  <tr class="HEADERDARKBLUE">
    <th width="132" height="26" class="TABLEONEE" scope="col">INVOICE#</th>
    <th width="118" class="TABLEONEE" scope="col"><input type="text" name="inv_num" value="<?php echo $rec_val; ?>" /></th>
  </tr>
  <tr class="WHITEROW">
    <th><span class="style1">DATE</span></th>
    <th><span class="style1"></span></th>
  </tr>
</table>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<form id="form1" name="form1" method="GET" action="http://localhost/invoice_next.php">
  <table width="214" height="41" border="1" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <th width="221" height="37" class="HEADERDARKBLUE" scope="col">Employee ID
        <select name="emp_id" id="select">
            <option value="">Choose </option>
            <?php 
						$query = 'select * from usertable';
						$stid = oci_parse($conn,$query);
						oci_execute($stid);	
						
							
						while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
						{ 		
							
								echo "<option value= $row[0]>" . htmlspecialchars($row[1]) . '</option>';
						}
						
						var_dump($row[0])
						?>
          </select>
      </th>
    </tr>
  </table>
  <p align="center">
    <input name="Submit" type="submit" class="button" value="Submit" />
  </p>
  <p align="center">&nbsp;</p>
  <table width="893" border="1" align="center" cellpadding="0" cellspacing="1">
    <tr class="HEADERDARKBLUE">
      <th width="455" height="26" class="TABLEONEE" scope="col">BILL TO </th>
      <th width="429" class="TABLEONEE" scope="col">SHIP TO </th>
    </tr>
    <tr class="GREYROW">
      <td height="66"><input name="billl_add" type="text" class="styledTEXTAREA6" id="billl_add" /></td>
      <td><input name="ship_add" type="text" class="styledTEXTAREA6" id="ship_add" /></td>
    </tr>
  </table>
  <table width="597" border="1" align="center" cellpadding="1" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#EDEDEB">
    <caption align="center">
    <span class="style16">Info</span>
    </caption>
    <tr bgcolor="#223066">
      <th width="147" bordercolor="1" scope="col"><span class="style17">PO ID </span></th>
      <th width="144" bordercolor="1" scope="col"><span class="style17">Date</span></th>
      <th width="144" bordercolor="1" scope="col"><span class="style17">Quotation ID</span></th>
      <th width="144" bordercolor="1" scope="col"><div align="center"><span class="style12">Vendor ID </span></div></th>
    </tr>
    <tr>
      <td bordercolor="1"><input name="po_id" type="text" id="po_id" value="<?php echo $rec_val; ?>" /></td>
      <td bordercolor="1"><input name="date" type="text" id="date" value="<?php echo date("Y/m/d"); ?>"/></td>
      <td bordercolor="1"><input name="qt_id" type="text" id="usr_id" value="<?php echo $qot; ?>"/></td>
      <td bordercolor="1"><input name="venid" type="text" id="venid" value="<?php echo $ven; ?>" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="893" border="1" align="center" cellpadding="0" cellspacing="1">
    <tr class="HEADERDARKBLUE">
      <th width="445" height="29" class="TABLEONEE" scope="col">ITEM DESCRIPTION </th>
      <th width="144" class="TABLEONEE" scope="col">QUANTITY</th>
      <th width="144" class="TABLEONEE" scope="col">PRICE</th>
      <th width="145" class="TABLEONEE" scope="col">TOTAL</th>
    </tr>
    <tr class="WHITEROW">
      <td><input name="pid1" type="text" class="styledTEXTAREA5" id="pid1" value="<?php echo $itno; ?>"/></td>
      <td><input name="q1" type="text" id="q1" value="<?php echo $qt;  ?>"/></td>
      <td><input name="pri" type="text" id="pri" value="<?php echo $pri; ?>"/></td>
      <td><input name="ttl" type="text" id="ttl" value="<?php echo $qt*$pri; ?>"/></td>
    </tr>
    <tr class="GREYROW">
      <td class="tab"><input name="pid2" type="text" class="styledTEXTAREA5" id="pid2" value="<?php echo $itno2; ?>" /></td>
      <td class="tab"><input name="q2" type="text" id="q2"  value="<?php echo $qt2;  ?>" /></td>
      <td class="tab"><input name="pri2" type="text" id="pri2" value="<?php echo $pri2; ?>"/></td>
      <td class="tab"><input name="ttl2" type="text" id="ttl2" value="<?php echo $qt2*$pri2; ?>"/></td>
    </tr>
    <tr class="WHITEROW">
      <td><input name="pid3" type="text" class="styledTEXTAREA5" id="pid3" value="<?php echo $itno3; ?>" /></td>
      <td><input name="q3" type="text" id="q3"  value="<?php echo $qt3;  ?>"/></td>
      <td><input name="pri3" type="text" id="pri3" value="<?php echo $pri3; ?>"/></td>
      <td><input name="ttl3" type="text" id="ttl3" value="<?php echo $qt3*$pri3; ?>"/></td>
    </tr>
    <tr class="GREYROW">
      <td class="tab"><input name="pid4" type="text" class="styledTEXTAREA5" id="pid4" value="<?php echo $itno4; ?>" /></td>
      <td class="tab"><input name="q4" type="text" id="q4"  value="<?php echo $qt4;  ?>"/></td>
      <td class="tab"><input name="pri4" type="text" id="pri4" value="<?php echo $pri4; ?>"/></td>
      <td class="tab"><input name="ttl4" type="text" id="ttl4" value="<?php echo $qt4*$pri4; ?>"/></td>
    </tr>
    <tr class="WHITEROW">
      <td><input name="pid5" type="text" class="styledTEXTAREA5" id="pid5"  value="<?php echo $itno5; ?>" /></td>
      <td><input name="q5" type="text" id="q5"  value="<?php echo $qt5;  ?>"/></td>
      <td><input name="pri5" type="text" id="pri5" value="<?php echo $pri5; ?>"/></td>
      <td><input name="ttl5" type="text" id="ttl5" value="<?php echo $qt5*$pri5; ?>" /></td>
    </tr>
    <tr class="GREYROW">
      <td class="tab"><input name="pid6" type="text" class="styledTEXTAREA5" id="pid6" value="<?php echo $itno6; ?>" /></td>
      <td class="tab"><input name="q6" type="text" id="q6"  value="<?php echo $qt6;  ?>"/></td>
      <td class="tab"><input name="pri6" type="text" id="pri6" value="<?php echo $pri6; ?>"/></td>
      <td class="tab"><input name="ttl6" type="text" id="ttl6" value="<?php echo $qt6*$pri6; ?>"/></td>
    </tr>
    <tr class="WHITEROW">
      <td><input name="name17" type="text" class="styledTEXTAREA5" id="name17" /></td>
      <td><input name="qt17" type="text" id="qt17" /></td>
      <td><input name="pri7" type="text" id="pri7" /></td>
      <td><input name="ttl7" type="text" id="ttl7" /></td>
    </tr>
    <tr class="GREYROW">
      <td class="tab"><input name="name18" type="text" class="styledTEXTAREA5" id="name18" /></td>
      <td class="tab"><input name="qt18" type="text" id="qt18" /></td>
      <td class="tab"><input name="pri8" type="text" id="pri8" /></td>
      <td class="tab"><input name="ttl8" type="text" id="ttl8" /></td>
    </tr>
    <tr class="WHITEROW">
      <td bgcolor="#E6E6E6">&nbsp;</td>
      <td bgcolor="#E6E6E6">&nbsp;</td>
      <td bgcolor="#E6E6E6"><div align="center"><strong>Total Quantity </strong></div></td>
      <td><input name="t_quan" type="text" id="ttl9" value="<?php echo ($qt+$qt2+$qt3+$qt4+$qt5+$qt6); ?>" /></td>
    </tr>
    <tr class="GREYROW">
      <td height="29" class="tab">&nbsp;</td>
      <td class="tab">&nbsp;</td>
      <th class="tab">SUBTOTAL</th>
      <td class="tab"><input name="subt" type="text" id="subt" value="<?php echo $pri+$pri2+$pri3+$pri4+$pri5+$pri6 ?>" /></td>
    </tr>
    <tr class="GREYROW">
      <td height="23" class="tab">&nbsp;</td>
      <td class="tab">&nbsp;</td>
      <th class="tab">SALES TAX </th>
      <td class="tab"><input name="tax" type="text" id="tax" value="<?php echo ($pri+$pri2+$pri3+$pri4+$pri5+$pri6)*0.17 ?>"/></td>
    </tr>
    <tr class="HEADERDARKBLUE">
      <td height="26" class="HEADERDARKBLUE">&nbsp;</td>
      <td class="TABLEONEE">&nbsp;</td>
      <th class="TABLEONEE">TOTAL</th>
      <td class="TABLEONEE"><input name="total" type="text" id="total" value="<?php echo ($pri+$pri2+$pri3+$pri4+$pri5+$pri6)+(($pri+$pri2+$pri3+$pri4+$pri5+$pri6)*0.17) ?>" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="908" border="1" align="center" cellpadding="0" cellspacing="1">
    <tr class="HEADERDARKBLUE">
      <th width="902" height="25" class="TABLEONEE" scope="col">NOTES</th>
    </tr>
    <tr class="GREYROW">
      <td height="54"><input name="textfield" type="text" class="styledTEXTAREA7" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>


</html>
