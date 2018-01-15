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
<title>hod</title>
<style type="text/css">
div {
    background-color: lightgrey;
    width: 300px;
    padding: 25px;
    border: 25px solid navy;
    margin: 25px;
}
<!--
body {
	background-image: url(orange_purple_gaussian_blur_gradient_ultra_3840x2160_hd-wallpaper-2753564.jpg);
	background-size: cover;
}
.header1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 18px;
	color: #FFFFFF;
	background-color: #333333;
}
.header2 {
	color: #666666;
}
.header3 {
	background-color: #330000;
}
.styledrop {	margin: 0;
	padding: 0;
	list-style-type: none;
	font-size: 100%;
	position: relative;
	text-align: left;
	cursor: pointer;
	width: 451px;
	height: 45px;
	float: left;
}
.button {    background-color: #4CAF50; /* Green */
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
.button1 {background-color: #4CAF50; /* Green */
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
.style3 {font-size: 40px; font-family: "Trajan Pro";}
-->
</style>
</head>

<body>
<p align="center" class="style3">Requisition Approval </p>
<p>&nbsp;</p>
<p align="center"><img src="info-marketing-site-homepage.png" width="156" height="157" /></p>
<table width="451" border="1" align="center" cellpadding="0" cellspacing="1">
  <tr class="header1">
    <th width="445" height="168" bordercolor="#000000" scope="col">
    <form id="form1" name="form1" method="post" action="http://localhost/pending_next.php">
      <p>
        <select name="aprove" class="styledrop">
          <option value="">Choose</option>
          <?php 
						$query = "SELECT * from Requisition where approved_by='0'";
						$stid = oci_parse($conn,$query);
						oci_execute($stid);	
						
							
						while (($row = oci_fetch_array($stid, OCI_BOTH)) != false)
						{ 		
							
								echo "<option value= $row[0]>" . htmlspecialchars($row[0]) . '</option>';		
						}
						var_dump($row[1])
						?>
        </select>
      </p>
      <p>
        <input name="Submit" type="submit" class="button button1" value="Submit"  align="right" />      
        </p>
    </form>
      <p>&nbsp;</p>
    </th>
  </tr>
</table>
<p align="center">&nbsp; </p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp; </p>
<p align="center">&nbsp;</p>
</body>
</html>
