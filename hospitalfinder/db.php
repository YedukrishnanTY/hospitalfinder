<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
class db
{
	var $con,$res;
	function connection()
	{
		$this->con=mysqli_connect("localhost","root","");
	mysqli_select_db($this->con,"hospital_finder");
	
	}
	function exe($sql)
	{
	$this->connection();
	return $this->res=mysqli_query($this->con,$sql);	
	}
}
?>
</body>
</html>
