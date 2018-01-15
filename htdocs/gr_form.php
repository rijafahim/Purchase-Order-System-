<?php 
	$conn=oci_connect("scott","tiger","localhost/dani");
	If (!conn)
		echo "Failed to connect to Oracle";
	else 
		echo "Succesfully connected with Oracle DB :-)";
	
	$var1="$_GETreqid";
	ECHO $var1;
	
	$rec_val=$_GET[pur_id];
	echo $rec_val;
	
	$disp=$_GET['selectdb']; 
		$query = "select * from PurchaseOrder where REQ_ID='$rec_val'";
	
		$stid = oci_parse($conn,$query);
		oci_execute($stid);
		$item_id=array();
		$item_qt=array();
		$itm_disp=array();
		//$row = oci_fetch_array($stid, OCI_BOTH); //getting info from req des
		while (($t1 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			
			$item_id[]=$t1[2]; //rd_id
			$item_qt[]=$t1[1]; //qutantity
			$itm_disp=$t1[0]; //itm id
			
		}
		//echo $result[5];
		
//getting item info here		
	
		$disp=$item_id[0]; 
		$query = "select * from REQUISITIONDESCRIPTION where RD_ID='$disp'";
	
		$stid = oci_parse($conn,$query);
		$r=oci_execute($stid);
		//$row = oci_fetch_array($stid, OCI_BOTH); //getting info from req des
		while (($t1 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$qt=$t1[1];
			$itno=$t1[0];
		} 
		
		$query2="select * from ITEMS where item_id='$itno'"; //getting price
		$stid = oci_parse($conn,$query2);
		$x=oci_execute($stid);
		while (($t2 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$pri=$t2[2];
		}
	
	if(isset($item_id[1]))
	{
		$disp=$item_id[1]; 
		$query = "select * from REQUISITIONDESCRIPTION where RD_ID='$disp'";
	
		$stid = oci_parse($conn,$query);
		$r=oci_execute($stid);
		//$row = oci_fetch_array($stid, OCI_BOTH); //getting info from req des
		while (($t1 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$qt2=$t1[1];
			$itno2=$t1[0];
		} 
		
		$query2="select * from ITEMS where item_id='$itno2'"; //getting price
		$stid = oci_parse($conn,$query2);
		$x=oci_execute($stid);
		while (($t2 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$pri2=$t2[2];
		}
	
	}
	
	if(isset($item_id[2]))
	{
		$disp=$item_id[2]; 
		$query = "select * from REQUISITIONDESCRIPTION where RD_ID='$disp'";
	
		$stid = oci_parse($conn,$query);
		$r=oci_execute($stid);
		//$row = oci_fetch_array($stid, OCI_BOTH); //getting info from req des
		while (($t1 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$qt3=$t1[1];
			$itno3=$t1[0];
		} 
		
		$query2="select * from ITEMS where item_id='$itno3'"; //getting price
		$stid = oci_parse($conn,$query2);
		$x=oci_execute($stid);
		while (($t2 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$pri3=$t2[2];
		}
	
	}
	
	if(isset($item_id[3]))
	{
		$disp=$item_id[3]; 
		$query = "select * from REQUISITIONDESCRIPTION where RD_ID='$disp'";
	
		$stid = oci_parse($conn,$query);
		$r=oci_execute($stid);
		//$row = oci_fetch_array($stid, OCI_BOTH); //getting info from req des
		while (($t1 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$qt4=$t1[1];
			$itno4=$t1[0];
		} 
		
		$query2="select * from ITEMS where item_id='$itno4'"; //getting price
		$stid = oci_parse($conn,$query2);
		$x=oci_execute($stid);
		while (($t2 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$pri4=$t2[2];
		}
	
	}
	
	if(isset($item_id[4]))
	{
		$disp=$item_id[4];  
		$query = "select * from REQUISITIONDESCRIPTION where RD_ID='$disp'";
	
		$stid = oci_parse($conn,$query);
		$r=oci_execute($stid);
		//$row = oci_fetch_array($stid, OCI_BOTH); //getting info from req des
		while (($t1 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$qt5=$t1[1];
			$itno5=$t1[0];
		} 
		
		$query2="select * from ITEMS where item_id='$itno5'"; //getting price
		$stid = oci_parse($conn,$query2);
		$x=oci_execute($stid);
		while (($t2 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$pri5=$t2[2];
		}
	
	}
	
	if(isset($item_id[5]))
	{
		$disp=$item_id[5];  
		$query = "select * from REQUISITIONDESCRIPTION where RD_ID='$disp'";
	
		$stid = oci_parse($conn,$query);
		$r=oci_execute($stid);
		//$row = oci_fetch_array($stid, OCI_BOTH); //getting info from req des
		while (($t1 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$qt6=$t1[1];
			$itno6=$t1[0];
		} 
		
		$query2="select * from ITEMS where item_id='$itno6'"; //getting price
		$stid = oci_parse($conn,$query2);
		$x=oci_execute($stid);
		while (($t2 = oci_fetch_array($stid, OCI_BOTH)) != false)
		{ 		
			$pri6=$t2[2];
		}
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>po_form</title>
<style type="text/css">
<!--
body {
	background-image: url("white-polygon-backgrounds-2.jpg");
	background-repeat: repeat-x;
}
.style1 {
	font-family: "Trajan Pro";
	font-weight: bold;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
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
.styledTEXTAREA{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 365px;
	height: 37px;
	float: left;
	background-color: #FBFBFB;
}
.styledTEXTAREA2{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	height: 40px;
	float: left;
	background-color: #FBFBFB;
}

.styledTEXTAREA3{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 541px;
	height: 45px;
	float: left;
	background-color: #FBFBFB;
}

.styledTEXTAREA4{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 1083px;
	height: 48px;
	float: left;
	background-color: #FBFBFB;
}
.styledTEXTAREA4{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 1083px;
	height: 48px;
	float: left;
	background-color: #FBFBFB;
}
tr:nth-child(odd){background-color: #f2f2f2}
th {
    background-color: #536DFE;
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
.style12 {font-family: "Roboto Lt"; font-style: italic; font-weight: bold; }
.styledEMPNANE {	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: center;
	cursor: pointer;
	width: 1083;
	height: 2em;
	float: left;
}
.style16 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
}
.style19 {font-family: "Roboto Lt"; font-style: italic; }
.style21 {font-family: "Roboto Lt"; font-style: italic; font-weight: bold; font-size: 20px; }
.style23 {font-weight: bold; font-family: "Roboto Lt";}
.button {    background-color: #536DFE; /* Green */
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
.button1 {background-color: ; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	width: 40px;
	height: 30px;
    cursor: pointer;
}
.button2 {background-color: #4CAF50; /* Green */
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
<h1 align="center"><span class="style1">Goods Receipt  </span></h1>
<h1 align="center" class="style5">425 American Ash Junction, USA<br />
  Tel No: 2321684<br />
Website: www.abc.com
</p>
</h1>

  <p>&nbsp;</p>
  <form id="form1" name="form1" method="get" action="http://localhost/gr_form_next.php">
    <table width="370" border="1" align="left" cellpadding="1" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#EDEDEB">
      <caption align="center">
      <span class="style16">Vendor </span>
      </caption>
      <tr bgcolor="#333333">
        <th width="364" bordercolor="1" scope="col"><div align="center"><span class="style12">Vendor Name </span></div></th>
      </tr>
      <tr>
        <td bordercolor="1"><select name="ven_name" class="styledrop">
            <option value=""><?php echo $_GET['ven_name']?> </option>
            <?php 
						$query = 'select * from VENDOR';
						$stid = oci_parse($conn,$query);
						oci_execute($stid);	
						
							
						while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
						{ 		
							
								echo "<option value= $row[3]>" . htmlspecialchars($row[0]) . '</option>';
						}
						
						var_dump($row[0])
						?>
        </select></td>
      </tr>
    </table>
    <table width="370" border="1" align="right" cellpadding="1" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#EDEDEB">
      <caption align="center">
      <span class="style16">Purchase Order No </span>
      </caption>
      <tr bgcolor="#333333">
        <th width="364" height="23" bordercolor="1" scope="col"><div align="center">PO No. </div></th>
      </tr>
      <tr>
        <td height="35" bordercolor="1"> <input type="text" name="po_no" value="<?php echo $rec_val; ?>" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p></p>
    <p>&nbsp;</p>
    <p>&nbsp; </p>
    <p>&nbsp;</p>
    <table width="594" height="391" border="1" align="center" cellspacing="0" bordercolor="#000000">
      <tr>
        <th width="144" height="34" scope="col"><div align="left"><span class="style23">Product ID </span></div></th>
        <th width="144" scope="col"><div align="left"><span class="style23">Quantity</span></div></th>
        <th width="144" scope="col"><div align="left"><span class="style23">Unit Price </span></div></th>
        <th width="144" bgcolor="#999999" scope="col"><div align="left"><span class="style23">Amount</span></div></th>
      </tr>
      <tr>
        <td height="47"><input name="pid1" type="text" class="styledTEXTAREA2" id="pid1" value="<?php echo $itno; ?>"/></td>
        <td><input name="q1" type="text" class="styledTEXTAREA2" id="q1" value="<?php echo $qt;  ?>" /></td>
        <td><input name="up1" type="text" class="styledTEXTAREA2" id="up1" value="<?php echo $pri; ?>" /></td>
        <td bgcolor=""><input name="a1" type="text" class="styledTEXTAREA2" value="<?php echo $qt*$pri; ?>" /></td>
      </tr>
      <tr>
        <td><input name="pid2" type="text" class="styledTEXTAREA2" id="pid2" value="<?php echo $itno2; ?>"/></td>
        <td><input name="q2" type="text" class="styledTEXTAREA2" id="q2" value="<?php echo $qt2; ?>" /></td>
        <td><input name="up2" type="text" class="styledTEXTAREA2" id="up2" value="<?php echo $pri2; ?>" /></td>
        <td bgcolor=""><input name="a2" type="text" class="styledTEXTAREA2" id="a2" value="<?php echo $qt2*$pri2; ?>" /></td>
      </tr>
      <tr>
        <td><input name="pid3" type="text" class="styledTEXTAREA2" id="pid3" value="<?php echo $itno3; ?>"/></td>
        <td><input name="q3" type="text" class="styledTEXTAREA2" id="q3" value="<?php echo $qt3; ?>" /></td>
        <td><input name="up3" type="text" class="styledTEXTAREA2" id="up3" value="<?php echo $pri3; ?>" /></td>
        <td bgcolor=""><input name="a3" type="text" class="styledTEXTAREA2" id="a3" value="<?php echo $qt3*$pri3; ?>" /></td>
      </tr>
      <tr>
        <td><input name="pid4" type="text" class="styledTEXTAREA2" id="pid4" value="<?php echo $itno4; ?>"/></td>
        <td><input name="q4" type="text" class="styledTEXTAREA2" id="q4" value="<?php echo $qt4; ?>" /></td>
        <td><input name="up4" type="text" class="styledTEXTAREA2" id="up4" value="<?php echo $pri4; ?>" /></td>
        <td bgcolor=""><input name="a4" type="text" class="styledTEXTAREA2" id="a4" value="<?php echo $qt4*$pri4; ?>" /></td>
      </tr>
      <tr>
        <td><input name="pid5" type="text" class="styledTEXTAREA2" value="<?php echo $itno5; ?>"/></td>
        <td><input name="q5" type="text" class="styledTEXTAREA2" id="q5" value="<?php echo $qt5; ?>" /></td>
        <td><input name="up5" type="text" class="styledTEXTAREA2" id="up5" value="<?php echo $pri5; ?>" /></td>
        <td bgcolor="#999999"><input name="a5" type="text" class="styledTEXTAREA2" id="a5" value="<?php echo $qt5*$pri5; ?>" /></td>
      </tr>
      <tr>
        <td><input name="pid6" type="text" class="styledTEXTAREA2" id="pid6" value="<?php echo $itno6; ?>"/></td>
        <td><input name="q6" type="text" class="styledTEXTAREA2" id="q6" value="<?php echo $qt6; ?>" /></td>
        <td><input name="up6" type="text" class="styledTEXTAREA2" id="up6" value="<?php echo $pri6; ?>" /></td>
        <td bgcolor=""><input name="a6" type="text" class="styledTEXTAREA2" id="a6" value="<?php echo $qt6*$pri6; ?>" /></td>
      </tr>
      <tr bgcolor="#999999">
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#536DFE"><strong>Subtotal:</strong></td>
        <td><input name="subt" type="text" class="styledTEXTAREA2" id="subt" value="<?php echo $pri+$pri2+$pri3+$pri4+$pri5+$pri6 ?>" /></td>
      </tr>
      <tr bgcolor="#999999">
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#536DFE"><strong>Tax:</strong></td>
        <td><input name="taxbx" type="text" class="styledTEXTAREA2" id="taxbx" value="<?php echo ($pri+$pri2+$pri3+$pri4+$pri5+$pri6)*0.17 ?>" /></td>
      </tr>
      <tr bgcolor="#4CAF50">
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#999999">&nbsp;</td>
        <td bgcolor="#536DFE"><strong>Total:</strong></td>
        <td><input name="total" type="text" class="styledTEXTAREA2" id="total" value="<?php echo ($pri+$pri2+$pri3+$pri4+$pri5+$pri6)+(($pri+$pri2+$pri3+$pri4+$pri5+$pri6)*0.17) ?>" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="1089" height="77" border="1" align="center" cellspacing="0" bordercolor="#999999">
      <tr>
        <th width="1083" scope="col"><span class="style19">Comments</span></th>
      </tr>
      <tr>
        <td height="52"><textarea name="comments" class="styledTEXTAREA4"></textarea></td>
      </tr>
    </table>
    <h1 align="center" class="style5">&nbsp;</h1>
    <p align="center" class="style5">
      <input name="Submit" type="submit" class="button" value="Process Receipt"  align="right" />
    </p>
</form>
  <p align="center" class="style5">&nbsp;</p>

<p>&nbsp;</p>
<p align="center" class="style5">&nbsp;</p>
</body>

</html>
