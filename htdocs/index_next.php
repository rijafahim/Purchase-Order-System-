<?php ob_start() ?>
<html>
<body>
<?php
	$conn=oci_connect("scott","tiger","localhost/dani");
	If (!conn)
		echo "Failed to connect to Oracle";
	else 
		echo "Succesfully connected with Oracle DB :-)";
	
	
	$q1=$_POST["name"];
	$q2=$_POST["password"];
	//echo $q1;
	//echo $q2;
	$dept_type=$_POST["select"];
	
	$query = "select * from UserTable where user_username='$q1' and user_password='$q2'";
	$stid = oci_parse($conn,$query);
	oci_execute($stid);

	$count=0;
	
	while (($t1 = oci_fetch_array($stid, OCI_BOTH)) != false)
	{
		$count++;
		//echo $t1[5];
		$dept=$t1[5];
	}
	
	if($count==1 && $dept=="Head of Department")
	{
		
		//echo $desig;
		$red='http://localhost/HOD.php';
		header('Location:'.$red);
	}
	else if ($count==1 && $dept=="Director") 
	{
		echo "YERRRR!";
		//echo $desig;
		$red='http://localhost/HOD.php';
		header('Location:'.$red); 
	}
	else if ($count==1 && $dept=="Employee") 
	{
		echo "yes!";
		//echo $desig;
		$red='http://localhost/rec1.php'; //change
		header('Location:'.$red); 
	}
	else if ($count==1 && $dept=="Purchase Department") 
	{
		echo "yes!";
		//echo $desig;
		$red='http://localhost/pd.html'; //change
		header('Location:'.$red); 
	}
	else
	{
		echo "Incorrect username/password!";
		$red2='http://localhost/error_pg.html';
		header('Location:'.$red2);
	}
	
	ob_end_clean();
	
?>
</body>
</html>