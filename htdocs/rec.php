<?php 
/*	$conn=oci_connect("scott","tiger","localhost/dani");
	If (!conn)
		echo "Failed to connect to Oracle";
	else 
		echo "Succesfully connected with Oracle DB :-)";
	
	
			
	*/			
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>req_form</title>
<style type="text/css">
<!--
.style3 {
	font-family: "Trajan Pro";
	font-weight: bold;
	font-size: 40px;
}
body {
	background-image: url(1.jpg);
	background-size: cover;
}
.style6 {
	font-size: 20px;
	font-family: Arial, Helvetica, sans-serif;
}

table {
    border-collapse: collapse;
  
}
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
.button {
    background-color: #4CAF50; /* Green */
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
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
tr:hover{background-color:#f5f5f5}
.styledrop{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 20em;
	height: 37px;
	float: left;
}
.styleditmNO{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 70px;
	height: 2em;
	float: left;
}

.styledEMPNANE{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: center;
	cursor: pointer;
	width: 300px;
	height: 2em;
	float: left;
}
.styledTEXTAREA{
	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 28em;
	height: 2em;
	float: left;
}
.style9 {font-family: "Roboto Lt"; font-weight: bold; color: #FFFFFF; }
.style12 {font-family: "Roboto Lt"; color: #FFFFFF; }
.button1 {    background-color: #4CAF50; /* Green */
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
<label>
<div align="center">
  <h1 class="style3">REQUISITION FORM </h1>
</div>
</label>
<form id="form1" name="form1" method="get" action="http://localhost/rec_next.php">
  <label></label><span class="style6"><label>
  </label>
</span><span class="style6">
<label></label>
  <label> </label>
  <label></label>
  </span>
  <p>
  <label></label>
  <span class="style6">
  <label></label>
  </span><span class="style6"><label><br />
  <br />
  </label>
  </span></p>
  <table width="638" border="0" align="center">
    <tr bgcolor="#333333">
      <th width="314" scope="col"><div align="center"><span class="style12">Employee Name </span></div></th>
      <th width="314" scope="col"><div align="center"><span class="style12">Employee ID</span></div></th>
    </tr>
    <tr>
      <td><input name="emp_name" type="text" class="styledEMPNANE" value="" size="10" /></td>
      <td><input name="emp_no" type="text" class="styledEMPNANE" size="10" /></td>
    </tr>
  </table>
  <p>
    <label></label>
  </p>
  <table width="434" border="0" align="center" bordercolor="#FFFFFF">
    <tr bordercolor="#FFFF00" bgcolor="#333333">
      <th width="349" bordercolor="#999999" scope="col"><div align="center" class="style9">Item Name </div></th>
      <th width="75" bordercolor="#999999" scope="col"><div align="center" class="style9"> 
        <div align="center">Quantity</div>
      </div></th>
    </tr>
    <tr bordercolor="#999999" bgcolor="#CCCCCC">
      <td><select name="itm_id1" class="styledrop">
	  <option value="">Choose</option>
					
						<?php 
						$query = 'select * from ITEMS';
						$stid = oci_parse($conn,$query);
						oci_execute($stid);	
						
							
						while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
						{ 		
							
								echo "<option value= $row[0]>" . htmlspecialchars($row[1]) . '</option>';
								
								
								
						}
						var_dump($row[1])
						?>
      </select>      </td>
      <td><input name="qt1" type="text" class="styleditmNO" size="10" /></td>
    </tr>
    <tr bordercolor="#999999" bgcolor="#CCCCCC">
      <td><select name="itm_id2" size="1" class="styledrop">
	  <option value="">Choose</option>
					
						<?php 
						$query = 'select * from ITEMS';
						$stid = oci_parse($conn,$query);
						oci_execute($stid);	
						
							
						while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
						{ 		
							
								echo "<option value= $row[0]>" . htmlspecialchars($row[1]) . '</option>';
								
								
								
						}
						var_dump($row[1])
						?>
      </select></td>
      <td><input name="qt2" type="text" class="styleditmNO" size="10" /></td>
    </tr>
    <tr bordercolor="#999999" bgcolor="#CCCCCC">
      <td><select name="itm_id3" size="1" class="styledrop">
	  <option value="">Choose</option>
					
						<?php 
						$query = 'select * from ITEMS';
						$stid = oci_parse($conn,$query);
						oci_execute($stid);	
			
						while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
						{ 		
								echo "<option value= $row[0]>" . htmlspecialchars($row[1]) . '</option>';			
						}
						var_dump($row[1])
						?>
      </select></td>
      <td><input name="qt3" type="text" class="styleditmNO" size="10" /></td>
    </tr>
    <tr bordercolor="#999999" bgcolor="#CCCCCC">
      <td><select name="itm_id4" size="1" class="styledrop">
	  <option value="">Choose</option>
					
						<?php 
						$query = 'select * from ITEMS';
						$stid = oci_parse($conn,$query);
						oci_execute($stid);	
			
						while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
						{ 		
								echo "<option value= $row[0]>" . htmlspecialchars($row[1]) . '</option>';			
						}
						var_dump($row[1])
						?>
      </select></td>
      <td><input name="qt4" type="text" class="styleditmNO" size="10" /></td>
    </tr>
    <tr bordercolor="#999999" bgcolor="#CCCCCC">
      <td><select name="itm_id5" size="1" class="styledrop">
	  <option value="">Choose</option>
					
						<?php 
						$query = 'select * from ITEMS';
						$stid = oci_parse($conn,$query);
						oci_execute($stid);	
			
						while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
						{ 		
								echo "<option value= $row[0]>" . htmlspecialchars($row[1]) . '</option>';			
						}
						var_dump($row[1])
						?>
      </select></td>
      <td><input name="qt5" type="text" class="styleditmNO" size="10" /></td>
    </tr>
    <tr bordercolor="#999999" bgcolor="#CCCCCC">
      <td><select name="itm_id6" size="1" class="styledrop">
	  <option value="">Choose</option>
					
						<?php 
						$query = 'select * from ITEMS';
						$stid = oci_parse($conn,$query);
						oci_execute($stid);	
			
						while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
						{ 		
								echo "<option value= $row[0]>" . htmlspecialchars($row[1]) . '</option>';			
						}
						var_dump($row[1])
						?>
      </select></td>
      <td><input name="qt6" type="text" class="styleditmNO" size="10" /></td>
    </tr>
  </table>
  <table width="328" border="0" align="center" class="style12">
    <tr>
      <td width="318"> <input name="Submit" type="submit" class="button button2" value="Submit"  align="right" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>
    <label></label>
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>
