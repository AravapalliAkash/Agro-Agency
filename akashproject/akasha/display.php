
<?php
include("connection.php");
error_reporting(0);
$query="SELECT *FROM STUDENT1";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo $result['rollno']."".$result['firstname']."".$result['lastname']."".$result['email']."".$result['password']."".$result['conpassword']."<br/>";
	}
}	
else
{
	echo"does not have records";
}












?>