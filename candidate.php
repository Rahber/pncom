<?php session_start(); ?>
<?php 
include('functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome To Pairness</title>


</head>

<body>
<h1>Candidate Registration</h1><br><br>
<?php
		
			$parientid = $_SESSION['parientid'];
			$id = $_SESSION['id'];
			if(isset($_POST['submit']))
			{
				
				
				
				$ip = $_SERVER['REMOTE_ADDR'];
				$email =  request_var('email','');
				$username = request_var('username','');
				$password = request_var('password','');
				
				$q = "INSERT INTO candidate (ip,email,username,userpassword,picture) VALUES ('$ip','$email','$username','$password','default.png');";
					
				$mysqli->query($q);
				echo "<h4 class='style9'>Registration Complete</h4><br>";
				$p = $mysqli->query("select * from candidate where( email='$email' & userpassword='$password')");
				while($row= $p->fetch_object())
				{
					
						$idd = $row->id;	
				}
				
			
				
				?>
<form name="candidate" id="candidate" method="post" action="" enctype="multipart/form-data">
  <table width="400" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Your Email:</td>
    <td><input type="text" required="required" placeholder="Enter Your Email" name="email" id="email" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>User Name:</td>
    <td><input type="text" required="required" placeholder="Enter Your User Name" name="username" id="username" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>User Password:</td>
    <td><input type="password" required="required" placeholder="Enter Your Password" name="password" id="password" /></td>
  </tr>
  <tr>
    <td><input type="hidden" name="id" id="id" value="<?php echo $idd;?>"/></td>
    <td><input type="hidden" name="parentid" id="parentid" value="<?php echo $parientid;?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="Submit" />&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" id="reset" value="Reset" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td>&nbsp;</td>
    <td><a href="ajax/next_step.php?email=<?php echo $email; ?>">Next Step</a></td>
  </tr>
  
</table>

</form>

 <?php
				 }//if ends here
				 else
				 {
				 ?>


<form name="candidate" id="candidate" method="post" action="" enctype="multipart/form-data">
<table width="400" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Your Email:</td>
    <td><input type="text" required="required" placeholder="Enter Your Email" name="email" id="email" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>User Name:</td>
    <td><input type="text" required="required" placeholder="Enter Your User Name" name="username" id="username" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>User Password:</td>
    <td><input type="password" required="required" placeholder="Enter Your Password" name="password" id="password" /></td>
  </tr>
  <tr>
    <td><input type="hidden" name="id" id="id" value="<?php echo $idd;?>"/></td>
    <td><input type="hidden" name="parentid" id="parentid" value="<?php echo $parientid;?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="Submit" />&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" id="reset" value="Reset" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr><tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

</table>

</form>
 <?php
				 }//else ends here
				 ?>
                 <div id="result" style="width:500px; height:auto;"><br></div>

</body>
</html>