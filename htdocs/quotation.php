<?php 
	$conn=oci_connect("scott","tiger","localhost/dani");
	If (!conn)
		echo "Failed to connect to Oracle";
	else 
		echo "Connected with Oracle DB";
				
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Quotatition Form</title>
<style type="text/css">
<!--
body {
	background-image: url(wallup-67487.jpg);
	background-size: cover;
}
.style1 {
	font-family: "Trajan Pro";
	color: #FFFFFF;
}
.header {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 18px;
	color: #CCCCCC;
	background-color: #333366;
}
.tablerows {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 18px;
	color: #CCCCCC;
	background-color: #330000;
}
.tablerow2 {
	background-color: #CCCCCC;
}
.submit {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	background-color: #33CC00;
}
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: #CCCCCC; background-color: #333366; }
.styledrop {	margin: 0;
	padding: 2;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 144px;
	height: 35px;
	float: center;
	background-color: #FBFBFB;
}
.button {background-color: #4CAF50; /* Green */
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
    padding: ;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: ;
	width 80:;
	height: 40:;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
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
.style5 {font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
}
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<h1 align="center" class="style1"> QUOTATION FORM	</h1>
<p>&nbsp;</p>
<form id="form1" name="form1" method="get" action="http://localhost/quotation_next.php">
  <div align="center">
    <p>&nbsp;</p>
    <table width="471" border="1" align="center" cellpadding="0" cellspacing="1" class="header">
      <tr>
        <th width="480" height="217" scope="col"><h2 class="style2">Choose Requisition  
          
          ID to generate Vendor Quotation </h2>
            <h2>
              <select name="reqid" class="styledrop">
                <option value="" selected="selected"><?php echo $_GET['ven_name']?> </option>
                <?php 
						$query = "SELECT * from Requisition where approved_by='true'";
						$stid = oci_parse($conn,$query);
						oci_execute($stid);	
						
							
						while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
						{ 		
							
								echo "<option value= $row[0]>" . htmlspecialchars($row[0]) . '</option>';
						}
						
						var_dump($row[0])
						?>
              </select>
          </h2>
            <p>Vendor Name </p>
            <p>
              <select name="ven_name" class="styledrop">
                <option value="" selected="selected"><?php echo $_GET['ven_name']?> </option>
                <?php 
						$query = 'select * from VENDOR';
						$stid = oci_parse($conn,$query);
						oci_execute($stid);	
						
							
						while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
						{ 		
							
								echo "<option value= $row[0]>" . htmlspecialchars($row[1]) . '</option>';
						}
						
						var_dump($row[0])
						?>
              </select>
</p></th>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="446" border="1" align="center" cellpadding="0" cellspacing="1">
      <tr class="tablerows">
        <th width="144" height="25" scope="col">Min.Orders</th>
        <th width="144" scope="col">Price</th>
        <th width="146" scope="col">Discount</th>
      </tr>
      <tr class="tablerow2">
        <td height="24"><input name="minorder" type="text" id="minorder" /></td>
        <td><input name="price" type="text" id="price" /></td>
        <td><input name="discount" type="text" id="discount" /></td>
      </tr>
    </table>
    <p><span class="style5">
      <input name="Submit3" type="submit" class="button1 button2 button" value="Submit"  align="right" />
    </span></p>
  </div>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2>&nbsp;</h2>
</body>
</html>
