<?php session_start(); ?>
<?php
include('../functions.php');
$familyid = $_SESSION['familyid'];
$id = $_SESSION['id'];
$value = request_var('value','');
$email = request_var('email','');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome To Pariness</title>

<link rel="stylesheet" type="text/css" href="../assets/css/tcal.css" />
	<script type="text/javascript" src="../assets/js/tcal.js"></script>
</head>
<body>
<?php

$p = $mysqli->query("SELECT * from pairness_family WHERE familyemailaddress = '$email'");
		  
		  
		  
		  while($row= $p->fetch_object())
				{
					
				$id = $row->id;
				$ip = $row->ip;
				$familyid = $row->familyid;
				$familyfullname = $row->familyfullname;				
				$familyemailaddress = $row->familyemailaddress;
				$username = $row->username;				
				$familypassword = $row->familypassword;
				$familygender = $row->familygender;
				$familyseekinggender = $row->familyseekinggender;
				$familydateofbirth = $row->familydateofbirth;
				$familycountry = $row->familycountry;
				$familystate = $row->familystate;
				$familycity = $row->familycity;
				$familyterms = $row->familyterms;
				$familyfirstname = $row->familyfirstname;
				$familylastname = $row->familylastname;
				$familyphone = $row->familyphone;
				$familycell = $row->familycell;
				$familyprofileimage = $row->familyprofileimage;
				$familyprofiledate = $row->familyprofiledate;
				$familyprofiletime = $row->familyprofiletime;
				$familyhaircolor = $row->familyhaircolor;
				$familyhairtype = $row->familyhairtype;
				$familyeyecolor = $row->familyeyecolor;
				$familyeyewear = $row->familyeyewear;
				$familyheight = $row->familyheight;
				$familyweight = $row->familyweight;
				$familybodytype = $row->familybodytype;
				$familyappearance = $row->familyappearance;
				$familyfacialhair = $row->familyfacialhair;
				$familyphysicalstatus = $row->familyphysicalstatus;
				$familymaritalstatus = $row->familymaritalstatus;
				$familyhavechildrens = $row->familyhavechildrens;
				$familyvalues = $row->familyvalues;
				$familylivingsituation = $row->familylivingsituation;
				$familylikes = $row->familylikes;
				$familydislikes = $row->familydislikes;
				$familyzodiachormony = $row->familyzodiachormony;
				$familyfoodhabits = $row->familyfoodhabits;
				$familyeducation = $row->familyeducation;
				$familyoccupation = $row->familyoccupation;
				$familyrelocate = $row->familyrelocate;
				$familyreligion = $row->familyreligion;
				$familybornreverted = $row->familybornreverted;
				$familyreligiousvalues = $row->familyreligiousvalues;
				$familyattendreligiousservices = $row->familyattendreligiousservices;
				$familymothertongue = $row->familymothertongue;
				$familyethnicity = $row->familyethnicity;
				$familycast = $row->familycast;
				$familynationality = $row->familynationality;
				$familyplaceofbirth = $row->familyplaceofbirth;
				$familylanguagesspoken = $row->familylanguagesspoken;
				$familyambition = $row->familyambition;
				$familyhobbies = $row->familyhobbies;
				$familydreams = $row->familydreams;
				$familygetmarried = $row->familygetmarried;
				$familywantmorechildrens = $row->familywantmorechildrens;
				$familydowry = $row->familydowry;
				$familycnicnumber = $row->familycnicnumber;
				$familycnicimage = $row->familycnicimage;
				
				
												
				
				
				}	// while ends here
				
				if(isset($_POST['submit']))
			{
				
				
				//-----------image1 uploading code here---------------------------------

$profile_picture = $_FILES['profile_picture']['name'];
//echo property_image."<br>";
if ($_FILES['profile_picture']['error'] == 0) 
{
  // check for file format/extension
  $profile_picture = basename ($_FILES['profile_picture']['name']);
    if(($_FILES['profile_picture']['type'] == "image/gif")
        || ($_FILES['profile_picture']['type'] == "image/jpeg")
        || ($_FILES['profile_picture']['type'] == "image/pjpeg")
		|| ($_FILES['profile_picture']['type'] == "image/png")
		|| ($_FILES['profile_picture']['type'] == "image/jpg")
		|| ($_FILES['profile_picture']['type'] == "image/bmp"))

  {
		    //get the path where file is to be saved
			//$filepath=dirname (__FILE__).'/images/';
			$new_file_name = '../upload_images/'.$profile_picture;
			//echo $new_file_name;
			//checking for file name duplication on server
	     if ( ! file_exists ( $new_file_name ) )
	   {
			   //move uploaded file to permanent place on server
		      if ( ( move_uploaded_file ( $_FILES ['profile_picture']['tmp_name'] , $new_file_name) ) )
		   {
		          $profile_picture = $profile_picture;
			      //echo 'File data has been Successfully saved as '.$new_file_name;
		   }
		      else
		   {
			      //echo 'Error uploading file </br>';      
		   }
	    }	   
	      else
		   {
		          //echo 'Error: file '.$_FILES['image_upload']['name'].' Already Exists </br>';
		   }
    }
  	else
	{
		       //echo 'Error: files with formats jpg , jpeg , png , gif , bmp </br>';                       
    } 
	}
else
{
	     //echo "Thank you:No file uploaded<br>";
	}
	
	//-----------image1 uploading code Ends here---------------------------------
	
	
	//-----------image2 uploading code here---------------------------------

$family_image = $_FILES['family_image']['name'];
//echo property_image."<br>";
if ($_FILES['family_image']['error'] == 0) 
{
  // check for file format/extension
  $filename_two = basename ($_FILES['family_image']['name']);
    if(($_FILES['family_image']['type'] == "image/gif")
        || ($_FILES['family_image']['type'] == "image/jpeg")
        || ($_FILES['family_image']['type'] == "image/pjpeg")
		|| ($_FILES['family_image']['type'] == "image/png")
		|| ($_FILES['family_image']['type'] == "image/jpg")
		|| ($_FILES['family_image']['type'] == "image/bmp"))

  {
		    //get the path where file is to be saved
			//$filepath=dirname (__FILE__).'/images/';
			$new_file_name = '../upload_images/'.$filename_two;
			//echo $new_file_name;
			//checking for file name duplication on server
	     if ( ! file_exists ( $new_file_name ) )
	   {
			   //move uploaded file to permanent place on server
		      if ( ( move_uploaded_file ( $_FILES ['family_image']['tmp_name'] , $new_file_name) ) )
		   {
		          $family_image = $filename_two;
			      //echo 'File data has been Successfully saved as '.$new_file_name;
		   }
		      else
		   {
			      //echo 'Error uploading file </br>';      
		   }
	    }	   
	      else
		   {
		          //echo 'Error: file '.$_FILES['image_upload']['name'].' Already Exists </br>';
		   }
    }
  	else
	{
		       //echo 'Error: files with formats jpg , jpeg , png , gif , bmp </br>';                       
    } 
	}
else
{
	     //echo "Thank you:No file uploaded<br>";
	}
	
	//-----------image2 uploading code Ends here---------------------------------
				
				
				
				
				
				
				
				$id = request_var('id','');
				$ip = $_SERVER['REMOTE_ADDR'];
				$parientid = request_var('parientid','');
				$username =  request_var('username','');
				$email =  request_var('email','');
				$password = request_var('password','');
				$gender = request_var('gender','');
				$seeking_gender = request_var('seeking_gender','');
				$dateofbirth = request_var('dateofbirth','');
				$country = request_var('country','');
				$state = request_var('state','');
				$city = request_var('city','');
				$terms = request_var('terms','');
				$first_name = request_var('first_name','');
				$last_name = request_var('last_name','');
				$phone = request_var('phone','');
				$mobile = request_var('mobile','');
				//$profile_picture = request_var('profile_picture','');
				$profile_date = request_var('profile_date','');
				$profile_time = request_var('profile_time','');
				$haircolor = request_var('haircolor','');
				$hairtype = request_var('hairtype','');
				$eyecolor = request_var('eyecolor','');
				$eyewear = request_var('eyewear','');
				$height = request_var('height','');
				$weight = request_var('weight','');
				$bodytype = request_var('bodytype','');
				$appearance = request_var('appearance','');
				$facialhair = request_var('facialhair','');
				$physicalstatus = request_var('physicalstatus','');
				$maritalstatus = request_var('maritalstatus','');
				$children = request_var('children','');
				$familyvalues = request_var('familyvalues','');
				$livingsituation = request_var('livingsituation','');
				$likes = request_var('likes','');
				$dislikes = request_var('dislikes','');
				$zodiachormony = request_var('zodiachormony','');
				$foodhabits = request_var('foodhabits','');
				$education = request_var('education','');
				$occupation = request_var('occupation','');
				$relocate = request_var('relocate','');
				$religion = request_var('religion','');
				$bornreverted = request_var('bornreverted','');
				$religiousvalues = request_var('religiousvalues','');
				$religiousservices = request_var('religiousservices','');
				$mother_language = request_var('mother_language','');
				$ethnicity = request_var('ethnicity','');
				$cast = request_var('cast','');
				$nationality = request_var('nationality','');
				$placeofbirth = request_var('placeofbirth','');
				$languagesspoken = request_var('languagesspoken','');
				$ambition = request_var('ambition','');
				$hobbies = request_var('hobbies','');
				$dreams = request_var('dreams','');
				$getmarried = request_var('getmarried','');
				$morechildren = request_var('morechildren','');
				$dowry = request_var('dowry','');
				$cnic = request_var('cnic','');
				//$family_image = request_var('family_image','');
				
				
				
				$q = "UPDATE pairness_family SET id = '$id', ip = '$ip', familyid = '$parientid', familyfullname = '$username', familyemailaddress = '$email', familypassword = '$password', familygender = '$gender', familyseekinggender = '$seeking_gender', familydateofbirth = '$dateofbirth', familycountry = '$country', familystate = '$state', familycity = '$city', familyterms = '$terms', familyfirstname = '$first_name', familylastname = '$last_name', familyphone = '$phone', familycell = '$mobile', familyprofileimage = '$profile_picture', familyprofiledate = '$profile_date', familyprofiletime = '$profile_time', familyhaircolor = '$haircolor', familyhairtype = '$hairtype', familyeyecolor = '$eyecolor', familyeyewear = '$eyewear', familyheight = '$height', familyweight = '$weight', familybodytype = '$bodytype', familyappearance = '$appearance', familyfacialhair = '$facialhair', familyphysicalstatus = '$physicalstatus', familymaritalstatus = '$maritalstatus', familyhavechildrens = '$children', familyvalues = '$familyvalues', familylivingsituation = '$livingsituation', familylikes = '$likes', familydislikes = '$dislikes', familyzodiachormony = '$zodiachormony', familyfoodhabits = '$foodhabits', familyeducation = '$education', familyoccupation = '$occupation', familyrelocate = '$relocate', familyreligion = '$religion', familybornreverted = '$bornreverted', familyreligiousvalues = '$religiousvalues', familyattendreligiousservices = '$religiousservices', familymothertongue = '$mother_language', familyethnicity = '$ethnicity', familycast = '$cast', familynationality = '$nationality', familyplaceofbirth = '$placeofbirth', familylanguagesspoken = '$languagesspoken', familyambition = '$ambition', familyhobbies = '$hobbies', familydreams = '$dreams', familygetmarried = '$getmarried', familywantmorechildrens = '$morechildren', familydowry = '$dowry', familycnicnumber = '$cnic', familycnicimage = '$family_image' WHERE familyemailaddress = '$email';";
				
				$mysqli->query($q);
				echo "<h4 class='style9'>Second Step Complete</h4><br>";			
  
	 
	?>	
	<form action="" method="post" name="nextstep" id="nextstep" enctype="multipart/form-data">
	<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>ID:</td>
    <td><input type="text" name="id" id="id" value="<?php echo $id ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>IP:</td>
    <td><input type="text" name="ip" id="ip" value="<?php echo $ip ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Familyid:</td>
    <td><input type="text" name="parientid" id="parientid" value="<?php echo $familyid ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input type="text" name="email" id="email" value="<?php echo $familyemailaddress ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>UserName:</td>
    <td><input type="text" name="username" id="username" value="<?php echo $familyfullname ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>UserPassword:</td>
    <td><input type="password" name="password" id="password" value="<?php echo $familypassword ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Gender:</td>
    <td><select name="gender" id="gender">
  <option value="">Select Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 <tr>
    <td>Seeking Gender:</td>
    <td><select name="seeking_gender" id="seeking_gender">
  <option value="">Select Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Date of Birth:</td>
    <td><input type="text" name="dateofbirth" id="dateofbirth" value="<?php echo $familydateofbirth ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Country:</td>
    <td><input type="text" name="country" id="country" value="<?php echo $familycountry ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>State:</td>
    <td><input type="text" name="state" id="state" value="<?php echo $familystate ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>City:</td>
    <td><input type="text" name="city" id="city" value="<?php echo $familycity ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Terms:</td>
    <td><textarea name="terms" id="terms" cols="30" rows="5">Enter some text about Family Terms...
</textarea>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>First Name:</td>
    <td><input type="text" name="first_name" id="first_name" value="<?php echo $familyfirstname ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td><input type="text" name="last_name" id="last_name" value="<?php echo $familylastname ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phone:</td>
    <td><input type="text" name="phone" id="phone" value="<?php echo $familyphone ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Mobile:</td>
    <td><input type="text" name="mobile" id="mobile" value="<?php echo $familycell ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Profile Picture:</td>
    <td><input type="file" name="profile_picture" id="profile_picture"  value="<?php echo $familyprofileimage ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Profile Date:</td>
    <td><input type="text" name="profile_date" id="profile_date" class="tcal" value="" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Profile Time:</td>
    <td><input type="text" name="profile_time" id="profile_time" value="<?php echo $familyprofiletime ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Hair Color:</td>
    <td><select name="haircolor" id="haircolor"> 
    <option value="" >Select Hair Color</option>
    <option value="375" >Bald / Shaved</option>                        
    <option value="371" >Black</option>
    <option value="373" >Blonde</option>
    <option value="370" >Brown</option>
    <option value="374" >Grey / White</option>
    <option value="369" >Light Brown</option>
    <option value="372" >Red</option>
    <option value="377" >Changes frequently</option>
    <option value="252" >Other</option>
    <option value="251" >Prefer not to say</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Hair Type:</td>
    <td><select name="hairtype" id="hairtype"> 
    <option value="" >Select Hair Type</option>
    <option value="384" >Straight</option>
    <option value="385" >Wavy</option>
    <option value="386" >Curly</option>
    <option value="252" >Other</option>
    <option value="251" >Prefer not to say</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Eye Color:</td>
    <td><select name="eyecolor" id="eyecolor"> 
    <option value="" >Select Eye Color</option>
    <option value="355" >Black</option>
    <option value="352" >Blue</option>
    <option value="354" >Brown</option>
    <option value="356" >Green</option>
    <option value="353" >Grey</option>
    <option value="357" >Hazel</option>
    <option value="252" >Other</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Eye Wear:</td>
    <td><select name="eyewear" id="eyewear"> 
    <option value="" >Select Eye Wear</option>
    <option value="360" >Contacts</option>
    <option value="359" >Glasses</option>
    <option value="358" >None</option>
    <option value="252" >Other</option>
    <option value="251" >Prefer not to say</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Height:</td>
    <td><select name="height" id="height"> 
    <option value="" >Select Your Height</option>
    <option value="140" >4'7" (140 cm)</option>
    <option value="143" >4'8" (143 cm)</option>
    <option value="145" >4'9" (145 cm)</option>
    <option value="148" >4'10" (148 cm)</option>
    <option value="150" >4'11" (150 cm)</option>
    <option value="153" >5' (153 cm)</option>
    <option value="155" >5'1" (155 cm)</option>
    <option value="158" >5'2" (158 cm)</option>
    <option value="161" >5'3" (161 cm)</option>
    <option value="163" >5'4" (163 cm)</option>
    <option value="166" >5'5" (166 cm)</option>
    <option value="168" >5'6" (168 cm)</option>
    <option value="171" >5'7" (171 cm)</option>
    <option value="173" >5'8" (173 cm)</option>
    <option value="176" >5'9" (176 cm)</option>
    <option value="178" >5'10" (178 cm)</option>
    <option value="181" >5'11" (181 cm)</option>
    <option value="183" >6' (183 cm)</option>
    <option value="186" >6'1" (186 cm)</option>
    <option value="188" >6'2" (188 cm)</option>
    <option value="191" >6'3" (191 cm)</option>
    <option value="194" >6'4" (194 cm)</option>
    <option value="196" >6'5" (196 cm)</option>
    <option value="199" >6'6" (199 cm)</option>
    <option value="201" >6'7" (201 cm)</option>
    <option value="204" >6'8" (204 cm)</option>
    <option value="206" >6'9 (206 cm)</option>
    <option value="209" >6'10" (209 cm)</option>
    <option value="211" >6'11" (211 cm)</option>
    <option value="214" >7' (214 cm)</option>
    <option value="216" >7'1" (216 cm)</option>
    <option value="219" >7'2" (219 cm)</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Weight:</td>
    <td><select name="weight" id="weight"> 
    <option value="" >Select Your Weight</option>
    <option value="40" >40 kg (88 lb)</option>
    <option value="41" >41 kg (90 lb)</option>
    <option value="42" >42 kg (93 lb)</option>
    <option value="43" >43 kg (95 lb)</option>
    <option value="44" >44 kg (97 lb)</option>
    <option value="45" >45 kg (99 lb)</option>
    <option value="46" >46 kg (101 lb)</option>
    <option value="47" >47 kg (104 lb)</option>
    <option value="48" >48 kg (106 lb)</option>
    <option value="49" >49 kg (108 lb)</option>
    <option value="50" >50 kg (110 lb)</option>
    <option value="51" >51 kg (112 lb)</option>
    <option value="52" >52 kg (115 lb)</option>
    <option value="53" >53 kg (117 lb)</option>
    <option value="54" >54 kg (119 lb)</option>
    <option value="55" >55 kg (121 lb)</option>
    <option value="56" >56 kg (123 lb)</option>
    <option value="57" >57 kg (126 lb)</option>
    <option value="58" >58 kg (128 lb)</option>
    <option value="59" >59 kg (130 lb)</option>
    <option value="60" >60 kg (132 lb)</option>
    <option value="61" >61 kg (134 lb)</option>
    <option value="62" >62 kg (137 lb)</option>
    <option value="63" >63 kg (139 lb)</option>
    <option value="64" >64 kg (141 lb)</option>
    <option value="65" >65 kg (143 lb)</option>
    <option value="66" >66 kg (146 lb)</option>
    <option value="67" >67 kg (148 lb)</option>
    <option value="68" >68 kg (150 lb)</option>
    <option value="69" >69 kg (152 lb)</option>
    <option value="70" >70 kg (154 lb)</option>
    <option value="71" >71 kg (157 lb)</option>
    <option value="72" >72 kg (159 lb)</option>
    <option value="73" >73 kg (161 lb)</option>
    <option value="74" >74 kg (163 lb)</option>
    <option value="75" >75 kg (165 lb)</option>
    <option value="76" >76 kg (168 lb)</option>
    <option value="77" >77 kg (170 lb)</option>
    <option value="78" >78 kg (172 lb)</option>
    <option value="79" >79 kg (174 lb)</option>
    <option value="80" >80 kg (176 lb)</option>
    <option value="81" >81 kg (179 lb)</option>
    <option value="82" >82 kg (181 lb)</option>
    <option value="83" >83 kg (183 lb)</option>
    <option value="84" >84 kg (185 lb)</option>
    <option value="85" >85 kg (187 lb)</option>
    <option value="86" >86 kg (190 lb)</option>
    <option value="87" >87 kg (192 lb)</option>
    <option value="88" >88 kg (194 lb)</option>
    <option value="89" >89 kg (196 lb)</option>
    <option value="90" >90 kg (198 lb)</option>
    <option value="91" >91 kg (201 lb)</option>
    <option value="92" >92 kg (203 lb)</option>
    <option value="93" >93 kg (205 lb)</option>
    <option value="94" >94 kg (207 lb)</option>
    <option value="95" >95 kg (209 lb)</option>
    <option value="96" >96 kg (212 lb)</option>
    <option value="97" >97 kg (214 lb)</option>
    <option value="98" >98 kg (216 lb)</option>
    <option value="99" >99 kg (218 lb)</option>
    <option value="100" >100 kg (220 lb)</option>
    <option value="101" >101 kg (223 lb)</option>
    <option value="102" >102 kg (225 lb)</option>
    <option value="103" >103 kg (227 lb)</option>
    <option value="104" >104 kg (229 lb)</option>
    <option value="105" >105 kg (231 lb)</option>
    <option value="106" >106 kg (234 lb)</option>
    <option value="107" >107 kg (236 lb)</option>
    <option value="108" >108 kg (238 lb)</option>
    <option value="109" >109 kg (240 lb)</option>
    <option value="110" >110 kg (243 lb)</option>
    <option value="111" >111 kg (245 lb)</option>
    <option value="112" >112 kg (247 lb)</option>
    <option value="113" >113 kg (249 lb)</option>
    <option value="114" >114 kg (251 lb)</option>
    <option value="115" >115 kg (254 lb)</option>
    <option value="116" >116 kg (256 lb)</option>
    <option value="117" >117 kg (258 lb)</option>
    <option value="118" >118 kg (260 lb)</option>
    <option value="119" >119 kg (262 lb)</option>
    <option value="120" >120 kg (265 lb)</option>
    <option value="121" >121 kg (267 lb)</option>
    <option value="122" >122 kg (269 lb)</option>
    <option value="123" >123 kg (271 lb)</option>
    <option value="124" >124 kg (273 lb)</option>
    <option value="125" >125 kg (276 lb)</option>
    <option value="126" >126 kg (278 lb)</option>
    <option value="127" >127 kg (280 lb)</option>
    <option value="128" >128 kg (282 lb)</option>
    <option value="129" >129 kg (284 lb)</option>
    <option value="130" >130 kg (287 lb)</option>
    <option value="131" >131 kg (289 lb)</option>
    <option value="132" >132 kg (291 lb)</option>
    <option value="133" >133 kg (293 lb)</option>
    <option value="134" >134 kg (295 lb)</option>
    <option value="135" >135 kg (298 lb)</option>
    <option value="136" >136 kg (300 lb)</option>
    <option value="137" >137 kg (302 lb)</option>
    <option value="138" >138 kg (304 lb)</option>
    <option value="139" >139 kg (306 lb)</option>
    <option value="140" >140 kg (309 lb)</option>
    <option value="141" >141 kg (311 lb)</option>
    <option value="142" >142 kg (313 lb)</option>
    <option value="143" >143 kg (315 lb)</option>
    <option value="144" >144 kg (317 lb)</option>
    <option value="145" >145 kg (320 lb)</option>
    <option value="146" >146 kg (322 lb)</option>
    <option value="147" >147 kg (324 lb)</option>
    <option value="148" >148 kg (326 lb)</option>
    <option value="149" >149 kg (328 lb)</option>
    <option value="150" >150 kg (331 lb)</option>
    <option value="151" >151 kg (333 lb)</option>
    <option value="152" >152 kg (335 lb)</option>
    <option value="153" >153 kg (337 lb)</option>
    <option value="154" >154 kg (340 lb)</option>
    <option value="155" >155 kg (342 lb)</option>
    <option value="156" >156 kg (344 lb)</option>
    <option value="157" >157 kg (346 lb)</option>
    <option value="158" >158 kg (348 lb)</option>
    <option value="159" >159 kg (351 lb)</option>
    <option value="160" >160 kg (353 lb)</option>
    <option value="161" >161 kg (355 lb)</option>
    <option value="162" >162 kg (357 lb)</option>
    <option value="163" >163 kg (359 lb)</option>
    <option value="164" >164 kg (362 lb)</option>
    <option value="165" >165 kg (364 lb)</option>
    <option value="166" >166 kg (366 lb)</option>
    <option value="167" >167 kg (368 lb)</option>
    <option value="168" >168 kg (370 lb)</option>
    <option value="169" >169 kg (373 lb)</option>
    <option value="170" >170 kg (375 lb)</option>
    <option value="171" >171 kg (377 lb)</option>
    <option value="172" >172 kg (379 lb)</option>
    <option value="173" >173 kg (381 lb)</option>
    <option value="174" >174 kg (384 lb)</option>
    <option value="175" >175 kg (386 lb)</option>
    <option value="176" >176 kg (388 lb)</option>
    <option value="177" >177 kg (390 lb)</option>
    <option value="178" >178 kg (392 lb)</option>
    <option value="179" >179 kg (395 lb)</option>
    <option value="180" >180 kg (397 lb)</option>
    <option value="181" >181 kg (399 lb)</option>
    <option value="182" >182 kg (401 lb)</option>
    <option value="183" >183 kg (403 lb)</option>
    <option value="184" >184 kg (406 lb)</option>
    <option value="185" >185 kg (408 lb)</option>
    <option value="186" >186 kg (410 lb)</option>
    <option value="187" >187 kg (412 lb)</option>
    <option value="188" >188 kg (414 lb)</option>
    <option value="189" >189 kg (417 lb)</option>
    <option value="190" >190 kg (419 lb)</option>
    <option value="191" >191 kg (421 lb)</option>
    <option value="192" >192 kg (423 lb)</option>
    <option value="193" >193 kg (425 lb)</option>
    <option value="194" >194 kg (428 lb)</option>
    <option value="195" >195 kg (430 lb)</option>
    <option value="196" >196 kg (432 lb)</option>
    <option value="197" >197 kg (434 lb)</option>
    <option value="198" >198 kg (437 lb)</option>
    <option value="199" >199 kg (439 lb)</option>
    <option value="200" >200 kg (441 lb)</option>
    <option value="201" >201 kg (443 lb)</option>
    <option value="202" >202 kg (445 lb)</option>
    <option value="203" >203 kg (448 lb)</option>
    <option value="204" >204 kg (450 lb)</option>
    <option value="205" >205 kg (452 lb)</option>
    <option value="206" >206 kg (454 lb)</option>
    <option value="207" >207 kg (456 lb)</option>
    <option value="208" >208 kg (459 lb)</option>
    <option value="209" >209 kg (461 lb)</option>
    <option value="210" >210 kg (463 lb)</option>
    <option value="211" >211 kg (465 lb)</option>
    <option value="212" >212 kg (467 lb)</option>
    <option value="213" >213 kg (470 lb)</option>
    <option value="214" >214 kg (472 lb)</option>
    <option value="215" >215 kg (474 lb)</option>
    <option value="216" >216 kg (476 lb)</option>
    <option value="217" >217 kg (478 lb)</option>
    <option value="218" >218 kg (481 lb)</option>
    <option value="219" >219 kg (483 lb)</option>
    <option value="220" >220 kg (485 lb)</option>
                            
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Body Type:</td>
    <td><select name="bodytype" id="bodytype"> 
    <option value="" >Select Your Body Type</option>
    <option value="275" >Petite</option>
    <option value="276" >Slim</option>
    <option value="278" >Athletic</option>
    <option value="277" >Average</option>
    <option value="279" >Few Extra Pounds</option>
    <option value="280" >Full Figured</option>
    <option value="281" >Large and Lovely</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Appearance:</td>
    <td><select name="appearance" id="appearance"> 
    <option value="" >Select Your Appearance</option>
    <option value="258" >Below average</option>
    <option value="257" >Average</option>
    <option value="256" >Attractive</option>
    <option value="255" >Very attractive</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Facialhair:</td>
    <td><select name="facialhair" id="facialhair"> 
    <option value="" >Select Your Facialhair</option>
    <option value="368" >Clean Shaven</option>
    <option value="367" >Sideburns</option>
    <option value="365" >Mustache</option>
    <option value="366" >Goatee</option>
    <option value="362" >Short Beard</option>
    <option value="363" >Medium Beard</option>
    <option value="364" >Long Beard</option>
    <option value="252" >Other</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Physical Status:</td>
    <td><select name="physicalstatus" id="physicalstatus"> 
    <option value="" >Select Your Physical Status</option>
    <option value="922" >Normal</option>
    <option value="925" >Minor Health Issues</option>
    <option value="926" >Serious Health Issues</option>
    <option value="923" >Minor Physical Disability</option>
    <option value="924" >Major Physical Disability</option>
    <option value="251" >Prefer not to say</option>                            
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Marital Status:</td>
    <td><select name="maritalstatus" id="maritalstatus"> 
    <option value="" >Select Your Marital Status</option>
    <option value="556" >Single</option>
    <option value="557" >Separated</option>
    <option value="559" >Widowed</option>
    <option value="558" >Divorced</option>
    <option value="560" >Married</option>                            
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Childrens:</td>
    <td><select name="children" id="children"> 
    <option value="" >Select Your Children</option>
    <option value="285" >No</option>
    <option value="284" >Yes - don't live at home</option>
    <option value="283" >Yes - sometimes live at home</option>
    <option value="282" >Yes - live at home</option>                            
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Family Values:</td>
    <td><select name="familyvalues" id="familyvalues"> 
    <option value="" >Select Your Family Values</option>
   <option value="822" >Traditional</option>
   <option value="823" >Moderate</option>
   <option value="824" >Liberal</option>                            
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Living Situation:</td>
    <td><select name="livingsituation" id="livingsituation"> 
    <option value="" >Select Your Living Situation</option>
   	<option value="551" >Live Alone</option>
    <option value="552" >Live with friends</option>
    <option value="553" >Live with family</option>
    <option value="554" >Live with kids</option>
    <option value="555" >Live with spouse</option>
    <option value="252" >Other</option>
    <option value="251" >Prefer not to say</option>                        
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Likes:</td>
    <td><textarea name="likes" id="likes" cols="30" rows="5">Enter some text about Family Likes...
</textarea>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Dislikes:</td>
    <td><textarea name="dislikes" id="dislikes" cols="30" rows="5">Enter some text about Family Dislikes...
</textarea>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Zodiac Hormony:</td>
    <td><input type="text" name="zodiachormony" id="zodiachormony" placeholder="Enter Your Family Zodia Chormony"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Food Habits:</td>
    <td><select name="foodhabits" id="foodhabits"> 
    <option value="" >Select Your Food Habits</option>
   	<option value="299" >Halal foods always</option>
    <option value="300" >Halal foods when I can</option>
    <option value="307" >No special restrictions</option>                    
</select></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Education:</td>
    <td><select name="education" id="education"> 
    <option value="" >Select Your Education</option>
   	<option value="312" >Primary (Elementary) School</option>
    <option value="313" >Middle School / Junior High</option>
    <option value="314" >High School</option>
    <option value="315" >Vocational College</option>
    <option value="316" >Bachelors Degree</option>
    <option value="317" >Masters Degree</option>
    <option value="318" >PhD or Doctorate</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Occupation:</td>
    <td><select name="occupation" id="occupation"> 
    <option value="" >Select Your Occupation</option>
   	<option value="563" >Administrative / Secretarial / Clerical</option>
    <option value="564" >Advertising / Media</option>
    <option value="565" >Artistic / Creative / Performance</option>
    <option value="566" >Construction / Trades</option>
    <option value="567" >Domestic Helper</option>
    <option value="568" >Education / Academic</option>
    <option value="1510" >Entertainment / Media</option>
    <option value="569" >Executive / Management / HR</option>
    <option value="570" >Farming / Agriculture</option>
    <option value="572" >Finance / Banking / Real Estate</option>
    <option value="571" >Fire / law enforcement / security</option>
    <option value="1509" >Hair Dresser / Personal Grooming</option>
    <option value="573" >IT / Communications</option>
    <option value="574" >Laborer / Manufacturing</option>
    <option value="575" >Legal</option>
    <option value="576" >Medical / Dental / Veterinary</option>
    <option value="1620" >Military</option>
    <option value="577" >Nanny / Child care</option>
    <option value="588" >No occupation / Stay at home</option>
    <option value="578" >Non-profit / clergy / social services</option>
    <option value="579" >Political / Govt / Civil Service</option>
    <option value="580" >Retail / Food services</option>
    <option value="581" >Retired</option>
    <option value="582" >Sales / Marketing</option>
    <option value="1511" >Self Employed</option>
    <option value="583" >Sports / recreation</option>
    <option value="584" >Student</option>
    <option value="585" >Technical / Science / Engineering</option>
    <option value="1508" >Transportation</option>
    <option value="586" >Travel / Hospitality</option>
    <option value="587" >Unemployed</option>
    <option value="252" >Other</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Relocate:</td>
    <td><select name="relocate" id="relocate"> 
    <option value="" >Select Your Relocate</option>
   	<option value="701" >Willing to relocate within my country</option>
    <option value="700" >Willing to relocate to another country</option>
    <option value="702" >Not willing to relocate</option>
    <option value="703" >Not sure about relocating</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Religion:</td>
    <td><select name="religion" id="religion"> 
    <option value="" >Select Your Religion</option>
   	<option value="644" >Islam - Sunni</option>
    <option value="645" >Islam - Shiite</option>
    <option value="646" >Islam - Sufism</option>
    <option value="647" >Islam - Ahmadiyya</option>
    <option value="648" >Islam - Other</option>
    <option value="670" >Willing to revert</option>
    <option value="252" >Other</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Born Reverted:</td>
    <td><select name="bornreverted" id="bornreverted"> 
    <option value="" >Select Born Reverted</option>
   	<option value="822" >Born a muslim</option>
    <option value="823" >Reverted to Islam</option>
    <option value="824" >Plan to revert to Islam</option>                    
</select></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Religious Values:</td>
    <td><select name="religiousvalues" id="religiousvalues"> 
    <option value="" >Select Religious Values</option>
   	<option value="697" >Very Religious</option>
    <option value="698" >Religious</option>
    <option value="699" >Not Religious</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Religious Services:</td>
    <td><select name="religiousservices" id="religiousservices"> 
    <option value="" >Select Your Religious Services</option>
   	<option value="683" >Daily</option>
    <option value="693" >Only on Jummah / Fridays</option>
    <option value="691" >Sometimes</option>
    <option value="695" >Only During Ramadan</option>
    <option value="688" >Never</option>                
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Mother Language:</td>
    <td><select name="mother_language" id="mother_language"> 
    <option value="" >Select Your Mother Language</option>
   	<option value="81">Indonesian</option>
		<option value="84">Javanese</option>
		<option value="96">Sundanese</option>
		<option value="97">Balinese</option>
		<option value="98">Mandarin Chinese</option>
		<option value="15">Arabic</option>
		<option value="3">Urdu</option>
		<option value="44">Malay</option>
		<option value="99">Pashtu</option>
		<option value="74">Farsi (Persian)</option>
		<option value="100">Arminian</option>
		<option value="101">Kurdish</option>
		<option value="102">Berber</option>
		<option value="103">Uzbek</option>
		<option value="104">Balochi</option>
		<option value="105">Pashai</option>
		<option value="27">French</option>
		<option value="106">Luri</option>
		<option value="107">Assyrian</option>
		<option value="108">Armenian</option>
		<option value="79">Hebrew</option>
		<option value="1">Hindi</option>
		<option value="114">Baluchi</option>
		<option value="5">Punjabi</option>
		<option value="12">Sindhi</option>
		<option value="110">Siraiki</option>
		<option value="111">Aramaic</option>
		<option value="112">Circassi</option>
		<option value="78">Greek</option>
		<option value="113">Nubian</option>
		<option value="0">-------------</option>
		<option value="17">Aka</option>
		<option value="15">Arabic</option>
		<option value="111">Aramaic</option>
		<option value="108">Armenian</option>
		<option value="100">Arminian</option>
		<option value="19">Assamese</option>
		<option value="107">Assyrian</option>
		<option value="20">Awadhi</option>
		<option value="97">Balinese</option>
		<option value="104">Balochi</option>
		<option value="114">Baluchi</option>
		<option value="21">Bengali</option>
		<option value="102">Berber</option>
		<option value="22">Bhojpuri</option>
		<option value="23">Bhutia</option>
		<option value="67">Bulgarian</option>
		<option value="68">Cambodian</option>
		<option value="69">Cantonese</option>
		<option value="24">Chatlisgarhi</option>
		<option value="25">Chinese</option>
		<option value="112">Circassi</option>
		<option value="70">Croatian</option>
		<option value="71">Czech</option>
		<option value="72">Danish</option>
		<option value="26">Dogri</option>
		<option value="73">Dutch</option>
		<option value="4">English</option>
		<option value="74">Farsi (Persian)</option>
		<option value="76">Finnish</option>
		<option value="27">French</option>
		<option value="28">Garhwali</option>
		<option value="77">German</option>
		<option value="78">Greek</option>
		<option value="2">Gujarati</option>
		<option value="31">Haryanvi</option>
		<option value="79">Hebrew</option>
		<option value="1">Hindi</option>
		<option value="80">Hungarian</option>
		<option value="81">Indonesian</option>
		<option value="82">Italian</option>
		<option value="83">Japanese</option>
		<option value="84">Javanese</option>
		<option value="32">Kakbarak</option>
		<option value="33">Kanauji</option>
		<option value="11">Kannada</option>
		<option value="34">Kashmiri</option>
		<option value="36">Khasi</option>
		<option value="37">Konkani</option>
		<option value="85">Korean</option>
		<option value="38">Koshali</option>
		<option value="39">Kumoani</option>
		<option value="101">Kurdish</option>
		<option value="40">Kutchi</option>
		<option value="86">Latin</option>
		<option value="41">Lepcha</option>
		<option value="106">Luri</option>
		<option value="42">Magahi</option>
		<option value="43">Maithili</option>
		<option value="44">Malay</option>
		<option value="9">Malayalam</option>
		<option value="98">Mandarin Chinese</option>
		<option value="46">Manipuri</option>
		<option value="7">Marathi</option>
		<option value="48">Marwari</option>
		<option value="49">Miji</option>
		<option value="50">Mizo</option>
		<option value="51">Monpa</option>
		<option value="52">Nepali</option>
		<option value="87">Norwegian</option>
		<option value="113">Nubian</option>
		<option value="14">Oriya</option>
		<option value="105">Pashai</option>
		<option value="99">Pashtu</option>
		<option value="54">Persian</option>
		<option value="75">Persian (Farsi)</option>
		<option value="88">Polish</option>
		<option value="89">Portuguese</option>
		<option value="5">Punjabi</option>
		<option value="56">Rajasthani</option>
		<option value="57">Russian</option>
		<option value="58">Sanskrit</option>
		<option value="59">Santhali</option>
		<option value="90">Serbian</option>
		<option value="12">Sindhi</option>
		<option value="110">Siraiki</option>
		<option value="61">Spanish</option>
		<option value="96">Sundanese</option>
		<option value="91">Swahili</option>
		<option value="62">Swedish</option>
		<option value="64">Tagalog</option>
		<option value="6">Tamil</option>
		<option value="8">Telugu</option>
		<option value="92">Thai</option>
		<option value="65">Tulu</option>
		<option value="93">Turkish</option>
		<option value="94">Ukrainian</option>
		<option value="3">Urdu</option>
		<option value="103">Uzbek</option>
		<option value="95">Vietnamese</option>
		<option value="66">--Other--</option>                
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ethnicity:</td>
    <td><select name="ethnicity" id="ethnicity"> 
    <option value="" >Select Ethnicity</option>
<option value="5">African American</option>
		<option value="8">African Other</option>
		<option value="17">American</option>
		<option value="4">Asian</option>
		<option value="14">Australian</option>
		<option value="16">Canadian</option>
		<option value="6">Caucasian</option>
		<option value="11">East European</option>
		<option value="9">French</option>
		<option value="1">Indian</option>
		<option value="18">Mexican</option>
		<option value="3">Middle Eastern</option>
		<option value="13">Native American</option>
		<option value="7">North African</option>
		<option value="19">Other</option>
		<option value="2">Pakistani</option>
		<option value="12">Russian</option>
		<option value="10">Spanish</option>
		<option value="15">West European</option>
		<option value="19">Other</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Cast:</td>
    <td><input type="text" name="cast" id="cast" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nationality:</td>
    <td><select name="nationality" id="nationality"> 
    <option value="" >Select Your Nationality</option>
	<option value="4" >Afghanistan</option>
    <option value="7" >Albania</option>
    <option value="5" >Algeria</option>
    <option value="11" >American Samoa</option>
    <option value="9" >Andorra</option>
    <option value="10" >Angola</option>
    <option value="15" >Anguilla</option>
    <option value="16" >Antarctica</option>
    <option value="2" >Antigua and Barbuda</option>
    <option value="12" >Argentina</option>
    <option value="8" >Armenia</option>
    <option value="1" >Aruba</option>
    <option value="13" >Australia</option>
    <option value="14" >Austria</option>
    <option value="6" >Azerbaijan</option>
    <option value="22" >Bahamas</option>
    <option value="17" >Bahrain</option>
    <option value="23" >Bangladesh</option>
    <option value="18" >Barbados</option>
    <option value="28" >Belarus</option>
    <option value="21" >Belgium</option>
    <option value="24" >Belize</option>
    <option value="27" >Benin</option>
    <option value="20" >Bermuda</option>
    <option value="31" >Bhutan</option>
    <option value="26" >Bolivia</option>
    <option value="25" >Bosnia & Herzegovina</option>
    <option value="19" >Botswana</option>
                            
                                
                                <option value="33" >Bouvet Island</option>
                            
                                
                                <option value="30" >Brazil</option>
                            
                                
                                <option value="104" >British Indian Ocean</option>
                            
                                
                                <option value="34" >Brunei</option>
                            
                                
                                <option value="32" >Bulgaria</option>
                            
                                
                                <option value="224" >Burkina Faso</option>
                            
                                
                                <option value="35" >Burundi</option>
                            
                                
                                <option value="37" >Cambodia</option>
                            
                                
                                <option value="46" >Cameroon</option>
                            
                                
                                <option value="36" >Canada</option>
                            
                                
                                <option value="53" >Cape Verde</option>
                            
                                
                                <option value="44" >Cayman Islands</option>
                            
                                
                                <option value="51" >Central African Rep.</option>
                            
                                
                                <option value="38" >Chad</option>
                            
                                
                                <option value="43" >Chile</option>
                            
                                
                                <option value="42" >China</option>
                            
                                
                                <option value="119" >Christmas Island</option>
                            
                                
                                <option value="45" >Cocos (Keeling) Is.</option>
                            
                                
                                <option value="48" >Colombia</option>
                            
                                
                                <option value="47" >Comoros</option>
                            
                                
                                <option value="41" >Congo, Dem. Rep</option>
                            
                                
                                <option value="40" >Congo, Republic</option>
                            
                                
                                <option value="54" >Cook Islands</option>
                            
                                
                                <option value="50" >Costa Rica</option>
                            
                                
                                <option value="108" >Cote d'Ivoire</option>
                            
                                
                                <option value="98" >Croatia</option>
                            
                                
                                <option value="52" >Cuba</option>
                            
                                
                                <option value="55" >Cyprus</option>
                            
                                
                                <option value="68" >Czech Republic</option>
                            
                                
                                <option value="56" >Denmark</option>
                            
                                
                                <option value="57" >Djibouti</option>
                            
                                
                                <option value="58" >Dominica</option>
                            
                                
                                <option value="59" >Dominican Republic</option>
                            
                                
                                <option value="213" >East Timor</option>
                            
                                
                                <option value="60" >Ecuador</option>
                            
                                
                                <option value="61" >Egypt</option>
                            
                                
                                <option value="66" >El Salvador</option>
                            
                                
                                <option value="63" >Equatorial Guinea</option>
                            
                                
                                <option value="65" >Eritrea</option>
                            
                                
                                <option value="64" >Estonia</option>
                            
                                
                                <option value="67" >Ethiopia</option>
                            
                                
                                <option value="72" >Falkland Islands</option>
                            
                                
                                <option value="74" >Faroe Islands</option>
                            
                                
                                <option value="71" >Fiji</option>
                            
                                
                                <option value="70" >Finland</option>
                            
                                
                                <option value="76" >France</option>
                            
                                
                                <option value="77" >French Antarctic</option>
                            
                                
                                <option value="69" >French Guiana</option>
                            
                                
                                <option value="75" >French Polynesia</option>
                            
                                
                                <option value="79" >Gabon</option>
                            
                                
                                <option value="78" >Gambia</option>
                            
                                
                                <option value="80" >Georgia</option>
                            
                                
                                <option value="86" >Germany</option>
                            
                                
                                <option value="81" >Ghana</option>
                            
                                
                                <option value="82" >Gibraltar</option>
                            
                                
                                <option value="89" >Greece</option>
                            
                                
                                <option value="85" >Greenland</option>
                            
                                
                                <option value="83" >Grenada</option>
                            
                                
                                <option value="87" >Guadeloupe</option>
                            
                                
                                <option value="88" >Guam</option>
                            
                                
                                <option value="90" >Guatemala</option>
                            
                                
                                <option value="84" >Guernsey</option>
                            
                                
                                <option value="91" >Guinea</option>
                            
                                
                                <option value="175" >Guinea-Bissau</option>
                            
                                
                                <option value="92" >Guyana</option>
                            
                                
                                <option value="94" >Haiti</option>
                            
                                
                                <option value="96" >Heard & McDonald Is</option>
                            
                                
                                <option value="232" >Holy See (Vatican City)</option>
                            
                                
                                <option value="97" >Honduras</option>
                            
                                
                                <option value="95" >Hong Kong</option>
                            
                                
                                <option value="99" >Hungary</option>
                            
                                
                                <option value="100" >Iceland</option>
                            
                                
                                <option value="103" >India</option>
                            
                                
                                <option value="101" >Indonesia</option>
                            
                                
                                <option value="105" >Iran</option>
                            
                                
                                <option value="109" >Iraq</option>
                            
                                
                                <option value="62" >Ireland</option>
                            
                                
                                <option value="102" >Isle of Man</option>
                            
                                
                                <option value="106" >Israel</option>
                            
                                
                                <option value="107" >Italy</option>
                            
                                
                                <option value="112" >Jamaica</option>
                            
                                
                                <option value="110" >Japan</option>
                            
                                
                                <option value="111" >Jersey</option>
                            
                                
                                <option value="113" >Jordan</option>
                            
                                
                                <option value="121" >Kazakhstan</option>
                            
                                
                                <option value="114" >Kenya</option>
                            
                                
                                <option value="117" >Kiribati</option>
                            
                                
                                <option value="116" >Korea, North</option>
                            
                                
                                <option value="118" >Korea, South</option>
                            
                                
                                <option value="120" >Kuwait</option>
                            
                                
                                <option value="115" >Kyrgyzstan</option>
                            
                                
                                <option value="122" >Laos</option>
                            
                                
                                <option value="124" >Latvia</option>
                            
                                
                                <option value="123" >Lebanon</option>
                            
                                
                                <option value="129" >Lesotho</option>
                            
                                
                                <option value="126" >Liberia</option>
                            
                                
                                <option value="131" >Libya</option>
                            
                                
                                <option value="128" >Liechtenstein</option>
                            
                                
                                <option value="125" >Lithuania</option>
                            
                                
                                <option value="130" >Luxembourg</option>
                            
                                
                                <option value="134" >Macau</option>
                            
                                
                                <option value="140" >Macedonia (FYR)</option>
                            
                                
                                <option value="132" >Madagascar</option>
                            
                                
                                <option value="139" >Malawi</option>
                            
                                
                                <option value="150" >Malaysia</option>
                            
                                
                                <option value="148" >Maldives</option>
                            
                                
                                <option value="141" >Mali</option>
                            
                                
                                <option value="146" >Malta</option>
                            
                                
                                <option value="178" >Marshall Islands</option>
                            
                                
                                <option value="133" >Martinique</option>
                            
                                
                                <option value="145" >Mauritania</option>
                            
                                
                                <option value="144" >Mauritius</option>
                            
                                
                                <option value="136" >Mayotte</option>
                            
                                
                                <option value="149" >Mexico</option>
                            
                                
                                <option value="73" >Micronesia</option>
                            
                                
                                <option value="135" >Moldova</option>
                            
                                
                                <option value="142" >Monaco</option>
                            
                                
                                <option value="137" >Mongolia</option>
                            
                                
                                <option value="138" >Montserrat</option>
                            
                                
                                <option value="143" >Morocco</option>
                            
                                
                                <option value="151" >Mozambique</option>
                            
                                
                                <option value="242" >Myanmar</option>
                            
                                
                                <option value="233" >Namibia</option>
                            
                                
                                <option value="161" >Nauru</option>
                            
                                
                                <option value="160" >Nepal</option>
                            
                                
                                <option value="158" >Netherlands</option>
                            
                                
                                <option value="163" >Netherlands Antilles</option>
                            
                                
                                <option value="152" >New Caledonia</option>
                            
                                
                                <option value="165" >New Zealand</option>
                            
                                
                                <option value="164" >Nicaragua</option>
                            
                                
                                <option value="155" >Niger</option>
                            
                                
                                <option value="157" >Nigeria</option>
                            
                                
                                <option value="153" >Niue</option>
                            
                                
                                <option value="154" >Norfolk Island</option>
                            
                                
                                <option value="49" >Northern Mariana Is.</option>
                            
                                
                                <option value="159" >Norway</option>
                            
                                
                                <option value="147" >Oman</option>
                            
                                
                                <option value="169" selected>Pakistan</option>
                            
                                
                                <option value="174" >Palau</option>
                            
                                
                                <option value="93" >Palestine</option>
                            
                                
                                <option value="171" >Panama</option>
                            
                                
                                <option value="173" >Papua New Guinea</option>
                            
                                
                                <option value="166" >Paraguay</option>
                            
                                
                                <option value="168" >Peru</option>
                            
                                
                                <option value="180" >Philippines</option>
                            
                                
                                <option value="167" >Pitcairn Islands</option>
                            
                                
                                <option value="170" >Poland</option>
                            
                                
                                <option value="172" >Portugal</option>
                            
                                
                                <option value="181" >Puerto Rico</option>
                            
                                
                                <option value="176" >Qatar</option>
                            
                                
                                <option value="177" >Reunion</option>
                            
                                
                                <option value="179" >Romania</option>
                            
                                
                                <option value="182" >Russia</option>
                            
                                
                                <option value="183" >Rwanda</option>
                            
                                
                                <option value="190" >Saint Helena</option>
                            
                                
                                <option value="197" >Saint Lucia</option>
                            
                                
                                <option value="236" >Samoa</option>
                            
                                
                                <option value="193" >San Marino</option>
                            
                                
                                <option value="211" >Sao Tome & Principe</option>
                            
                                
                                <option value="184" >Saudi Arabia</option>
                            
                                
                                <option value="189" >Senegal</option>
                            
                                
                                <option value="238" >Serbia</option>
                            
                                
                                <option value="187" >Seychelles</option>
                            
                                
                                <option value="192" >Sierra Leone</option>
                            
                                
                                <option value="194" >Singapore</option>
                            
                                
                                <option value="127" >Slovakia</option>
                            
                                
                                <option value="191" >Slovenia</option>
                            
                                
                                <option value="29" >Solomon Islands</option>
                            
                                
                                <option value="195" >Somalia</option>
                            
                                
                                <option value="188" >South Africa</option>
                            
                                
                                <option value="201" >South Georgia Island</option>
                            
                                
                                <option value="196" >Spain</option>
                            
                                
                                <option value="39" >Sri Lanka</option>
                            
                                
                                <option value="186" >St Kitts & Nevis</option>
                            
                                
                                <option value="185" >St Pierre &  Miquelon</option>
                            
                                
                                <option value="227" >St Vincent Grenadines</option>
                            
                                
                                <option value="198" >Sudan</option>
                            
                                
                                <option value="162" >Suriname</option>
                            
                                
                                <option value="199" >Svalbard & Jan Mayen</option>
                            
                                
                                <option value="237" >Swaziland</option>
                            
                                
                                <option value="200" >Sweden</option>
                            
                                
                                <option value="203" >Switzerland</option>
                            
                                
                                <option value="202" >Syria</option>
                            
                                
                                <option value="216" >Taiwan</option>
                            
                                
                                <option value="206" >Tajikistan</option>
                            
                                
                                <option value="218" >Tanzania</option>
                            
                                
                                <option value="205" >Thailand</option>
                            
                                
                                <option value="210" >Togo</option>
                            
                                
                                <option value="208" >Tokelau</option>
                            
                                
                                <option value="209" >Tonga</option>
                            
                                
                                <option value="204" >Trinidad and Tobago</option>
                            
                                
                                <option value="212" >Tunisia</option>
                            
                                
                                <option value="214" >Turkey</option>
                            
                                
                                <option value="217" >Turkmenistan</option>
                            
                                
                                <option value="207" >Turks & Caicos Is.</option>
                            
                                
                                <option value="215" >Tuvalu</option>
                            
                                
                                <option value="219" >Uganda</option>
                            
                                
                                <option value="222" >Ukraine</option>
                            
                                
                                <option value="3" >United Arab Emirates</option>
                            
                                
                                <option value="220" >United Kingdom</option>
                            
                                
                                <option value="223" >United States</option>
                            
                                
                                <option value="225" >Uruguay</option>
                            
                                
                                <option value="221" >US Minor Outlying Is</option>
                            
                                
                                <option value="226" >Uzbekistan</option>
                            
                                
                                <option value="156" >Vanuatu</option>
                            
                                
                                <option value="228" >Venezuela</option>
                            
                                
                                <option value="230" >Vietnam</option>
                            
                                
                                <option value="229" >Virgin Islands (British)</option>
                            
                                
                                <option value="231" >Virgin Islands (US)</option>
                            
                                
                                <option value="234" >Wallis and Futuna</option>
                            
                                
                                <option value="235" >Western Sahara</option>
                            
                                
                                <option value="239" >Yemen</option>
                            
                                
                                <option value="240" >Zambia</option>
                            
                                
                                <option value="241" >Zimbabwe</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Place of Birth:</td>
    <td><select name="placeofbirth" id="placeofbirth"> 
    <option value="" >Select Your Place of Birth</option>
   	<option value="4" >Afghanistan</option>
                            
                                
                                <option value="7" >Albania</option>
                            
                                
                                <option value="5" >Algeria</option>
                            
                                
                                <option value="11" >American Samoa</option>
                            
                                
                                <option value="9" >Andorra</option>
                            
                                
                                <option value="10" >Angola</option>
                            
                                
                                <option value="15" >Anguilla</option>
                            
                                
                                <option value="16" >Antarctica</option>
                            
                                
                                <option value="2" >Antigua and Barbuda</option>
                            
                                
                                <option value="12" >Argentina</option>
                            
                                
                                <option value="8" >Armenia</option>
                            
                                
                                <option value="1" >Aruba</option>
                            
                                
                                <option value="13" >Australia</option>
                            
                                
                                <option value="14" >Austria</option>
                            
                                
                                <option value="6" >Azerbaijan</option>
                            
                                
                                <option value="22" >Bahamas</option>
                            
                                
                                <option value="17" >Bahrain</option>
                            
                                
                                <option value="23" >Bangladesh</option>
                            
                                
                                <option value="18" >Barbados</option>
                            
                                
                                <option value="28" >Belarus</option>
                            
                                
                                <option value="21" >Belgium</option>
                            
                                
                                <option value="24" >Belize</option>
                            
                                
                                <option value="27" >Benin</option>
                            
                                
                                <option value="20" >Bermuda</option>
                            
                                
                                <option value="31" >Bhutan</option>
                            
                                
                                <option value="26" >Bolivia</option>
                            
                                
                                <option value="25" >Bosnia & Herzegovina</option>
                            
                                
                                <option value="19" >Botswana</option>
                            
                                
                                <option value="33" >Bouvet Island</option>
                            
                                
                                <option value="30" >Brazil</option>
                            
                                
                                <option value="104" >British Indian Ocean</option>
                            
                                
                                <option value="34" >Brunei</option>
                            
                                
                                <option value="32" >Bulgaria</option>
                            
                                
                                <option value="224" >Burkina Faso</option>
                            
                                
                                <option value="35" >Burundi</option>
                            
                                
                                <option value="37" >Cambodia</option>
                            
                                
                                <option value="46" >Cameroon</option>
                            
                                
                                <option value="36" >Canada</option>
                            
                                
                                <option value="53" >Cape Verde</option>
                            
                                
                                <option value="44" >Cayman Islands</option>
                            
                                
                                <option value="51" >Central African Rep.</option>
                            
                                
                                <option value="38" >Chad</option>
                            
                                
                                <option value="43" >Chile</option>
                            
                                
                                <option value="42" >China</option>
                            
                                
                                <option value="119" >Christmas Island</option>
                            
                                
                                <option value="45" >Cocos (Keeling) Is.</option>
                            
                                
                                <option value="48" >Colombia</option>
                            
                                
                                <option value="47" >Comoros</option>
                            
                                
                                <option value="41" >Congo, Dem. Rep</option>
                            
                                
                                <option value="40" >Congo, Republic</option>
                            
                                
                                <option value="54" >Cook Islands</option>
                            
                                
                                <option value="50" >Costa Rica</option>
                            
                                
                                <option value="108" >Cote d'Ivoire</option>
                            
                                
                                <option value="98" >Croatia</option>
                            
                                
                                <option value="52" >Cuba</option>
                            
                                
                                <option value="55" >Cyprus</option>
                            
                                
                                <option value="68" >Czech Republic</option>
                            
                                
                                <option value="56" >Denmark</option>
                            
                                
                                <option value="57" >Djibouti</option>
                            
                                
                                <option value="58" >Dominica</option>
                            
                                
                                <option value="59" >Dominican Republic</option>
                            
                                
                                <option value="213" >East Timor</option>
                            
                                
                                <option value="60" >Ecuador</option>
                            
                                
                                <option value="61" >Egypt</option>
                            
                                
                                <option value="66" >El Salvador</option>
                            
                                
                                <option value="63" >Equatorial Guinea</option>
                            
                                
                                <option value="65" >Eritrea</option>
                            
                                
                                <option value="64" >Estonia</option>
                            
                                
                                <option value="67" >Ethiopia</option>
                            
                                
                                <option value="72" >Falkland Islands</option>
                            
                                
                                <option value="74" >Faroe Islands</option>
                            
                                
                                <option value="71" >Fiji</option>
                            
                                
                                <option value="70" >Finland</option>
                            
                                
                                <option value="76" >France</option>
                            
                                
                                <option value="77" >French Antarctic</option>
                            
                                
                                <option value="69" >French Guiana</option>
                            
                                
                                <option value="75" >French Polynesia</option>
                            
                                
                                <option value="79" >Gabon</option>
                            
                                
                                <option value="78" >Gambia</option>
                            
                                
                                <option value="80" >Georgia</option>
                            
                                
                                <option value="86" >Germany</option>
                            
                                
                                <option value="81" >Ghana</option>
                            
                                
                                <option value="82" >Gibraltar</option>
                            
                                
                                <option value="89" >Greece</option>
                            
                                
                                <option value="85" >Greenland</option>
                            
                                
                                <option value="83" >Grenada</option>
                            
                                
                                <option value="87" >Guadeloupe</option>
                            
                                
                                <option value="88" >Guam</option>
                            
                                
                                <option value="90" >Guatemala</option>
                            
                                
                                <option value="84" >Guernsey</option>
                            
                                
                                <option value="91" >Guinea</option>
                            
                                
                                <option value="175" >Guinea-Bissau</option>
                            
                                
                                <option value="92" >Guyana</option>
                            
                                
                                <option value="94" >Haiti</option>
                            
                                
                                <option value="96" >Heard & McDonald Is</option>
                            
                                
                                <option value="232" >Holy See (Vatican City)</option>
                            
                                
                                <option value="97" >Honduras</option>
                            
                                
                                <option value="95" >Hong Kong</option>
                            
                                
                                <option value="99" >Hungary</option>
                            
                                
                                <option value="100" >Iceland</option>
                            
                                
                                <option value="103" >India</option>
                            
                                
                                <option value="101" >Indonesia</option>
                            
                                
                                <option value="105" >Iran</option>
                            
                                
                                <option value="109" >Iraq</option>
                            
                                
                                <option value="62" >Ireland</option>
                            
                                
                                <option value="102" >Isle of Man</option>
                            
                                
                                <option value="106" >Israel</option>
                            
                                
                                <option value="107" >Italy</option>
                            
                                
                                <option value="112" >Jamaica</option>
                            
                                
                                <option value="110" >Japan</option>
                            
                                
                                <option value="111" >Jersey</option>
                            
                                
                                <option value="113" >Jordan</option>
                            
                                
                                <option value="121" >Kazakhstan</option>
                            
                                
                                <option value="114" >Kenya</option>
                            
                                
                                <option value="117" >Kiribati</option>
                            
                                
                                <option value="116" >Korea, North</option>
                            
                                
                                <option value="118" >Korea, South</option>
                            
                                
                                <option value="120" >Kuwait</option>
                            
                                
                                <option value="115" >Kyrgyzstan</option>
                            
                                
                                <option value="122" >Laos</option>
                            
                                
                                <option value="124" >Latvia</option>
                            
                                
                                <option value="123" >Lebanon</option>
                            
                                
                                <option value="129" >Lesotho</option>
                            
                                
                                <option value="126" >Liberia</option>
                            
                                
                                <option value="131" >Libya</option>
                            
                                
                                <option value="128" >Liechtenstein</option>
                            
                                
                                <option value="125" >Lithuania</option>
                            
                                
                                <option value="130" >Luxembourg</option>
                            
                                
                                <option value="134" >Macau</option>
                            
                                
                                <option value="140" >Macedonia (FYR)</option>
                            
                                
                                <option value="132" >Madagascar</option>
                            
                                
                                <option value="139" >Malawi</option>
                            
                                
                                <option value="150" >Malaysia</option>
                            
                                
                                <option value="148" >Maldives</option>
                            
                                
                                <option value="141" >Mali</option>
                            
                                
                                <option value="146" >Malta</option>
                            
                                
                                <option value="178" >Marshall Islands</option>
                            
                                
                                <option value="133" >Martinique</option>
                            
                                
                                <option value="145" >Mauritania</option>
                            
                                
                                <option value="144" >Mauritius</option>
                            
                                
                                <option value="136" >Mayotte</option>
                            
                                
                                <option value="149" >Mexico</option>
                            
                                
                                <option value="73" >Micronesia</option>
                            
                                
                                <option value="135" >Moldova</option>
                            
                                
                                <option value="142" >Monaco</option>
                            
                                
                                <option value="137" >Mongolia</option>
                            
                                
                                <option value="138" >Montserrat</option>
                            
                                
                                <option value="143" >Morocco</option>
                            
                                
                                <option value="151" >Mozambique</option>
                            
                                
                                <option value="242" >Myanmar</option>
                            
                                
                                <option value="233" >Namibia</option>
                            
                                
                                <option value="161" >Nauru</option>
                            
                                
                                <option value="160" >Nepal</option>
                            
                                
                                <option value="158" >Netherlands</option>
                            
                                
                                <option value="163" >Netherlands Antilles</option>
                            
                                
                                <option value="152" >New Caledonia</option>
                            
                                
                                <option value="165" >New Zealand</option>
                            
                                
                                <option value="164" >Nicaragua</option>
                            
                                
                                <option value="155" >Niger</option>
                            
                                
                                <option value="157" >Nigeria</option>
                            
                                
                                <option value="153" >Niue</option>
                            
                                
                                <option value="154" >Norfolk Island</option>
                            
                                
                                <option value="49" >Northern Mariana Is.</option>
                            
                                
                                <option value="159" >Norway</option>
                            
                                
                                <option value="147" >Oman</option>
                            
                                
                                <option value="169" selected>Pakistan</option>
                            
                                
                                <option value="174" >Palau</option>
                            
                                
                                <option value="93" >Palestine</option>
                            
                                
                                <option value="171" >Panama</option>
                            
                                
                                <option value="173" >Papua New Guinea</option>
                            
                                
                                <option value="166" >Paraguay</option>
                            
                                
                                <option value="168" >Peru</option>
                            
                                
                                <option value="180" >Philippines</option>
                            
                                
                                <option value="167" >Pitcairn Islands</option>
                            
                                
                                <option value="170" >Poland</option>
                            
                                
                                <option value="172" >Portugal</option>
                            
                                
                                <option value="181" >Puerto Rico</option>
                            
                                
                                <option value="176" >Qatar</option>
                            
                                
                                <option value="177" >Reunion</option>
                            
                                
                                <option value="179" >Romania</option>
                            
                                
                                <option value="182" >Russia</option>
                            
                                
                                <option value="183" >Rwanda</option>
                            
                                
                                <option value="190" >Saint Helena</option>
                            
                                
                                <option value="197" >Saint Lucia</option>
                            
                                
                                <option value="236" >Samoa</option>
                            
                                
                                <option value="193" >San Marino</option>
                            
                                
                                <option value="211" >Sao Tome & Principe</option>
                            
                                
                                <option value="184" >Saudi Arabia</option>
                            
                                
                                <option value="189" >Senegal</option>
                            
                                
                                <option value="238" >Serbia</option>
                            
                                
                                <option value="187" >Seychelles</option>
                            
                                
                                <option value="192" >Sierra Leone</option>
                            
                                
                                <option value="194" >Singapore</option>
                            
                                
                                <option value="127" >Slovakia</option>
                            
                                
                                <option value="191" >Slovenia</option>
                            
                                
                                <option value="29" >Solomon Islands</option>
                            
                                
                                <option value="195" >Somalia</option>
                            
                                
                                <option value="188" >South Africa</option>
                            
                                
                                <option value="201" >South Georgia Island</option>
                            
                                
                                <option value="196" >Spain</option>
                            
                                
                                <option value="39" >Sri Lanka</option>
                            
                                
                                <option value="186" >St Kitts & Nevis</option>
                            
                                
                                <option value="185" >St Pierre &  Miquelon</option>
                            
                                
                                <option value="227" >St Vincent Grenadines</option>
                            
                                
                                <option value="198" >Sudan</option>
                            
                                
                                <option value="162" >Suriname</option>
                            
                                
                                <option value="199" >Svalbard & Jan Mayen</option>
                            
                                
                                <option value="237" >Swaziland</option>
                            
                                
                                <option value="200" >Sweden</option>
                            
                                
                                <option value="203" >Switzerland</option>
                            
                                
                                <option value="202" >Syria</option>
                            
                                
                                <option value="216" >Taiwan</option>
                            
                                
                                <option value="206" >Tajikistan</option>
                            
                                
                                <option value="218" >Tanzania</option>
                            
                                
                                <option value="205" >Thailand</option>
                            
                                
                                <option value="210" >Togo</option>
                            
                                
                                <option value="208" >Tokelau</option>
                            
                                
                                <option value="209" >Tonga</option>
                            
                                
                                <option value="204" >Trinidad and Tobago</option>
                            
                                
                                <option value="212" >Tunisia</option>
                            
                                
                                <option value="214" >Turkey</option>
                            
                                
                                <option value="217" >Turkmenistan</option>
                            
                                
                                <option value="207" >Turks & Caicos Is.</option>
                            
                                
                                <option value="215" >Tuvalu</option>
                            
                                
                                <option value="219" >Uganda</option>
                            
                                
                                <option value="222" >Ukraine</option>
                            
                                
                                <option value="3" >United Arab Emirates</option>
                            
                                
                                <option value="220" >United Kingdom</option>
                            
                                
                                <option value="223" >United States</option>
                            
                                
                                <option value="225" >Uruguay</option>
                            
                                
                                <option value="221" >US Minor Outlying Is</option>
                            
                                
                                <option value="226" >Uzbekistan</option>
                            
                                
                                <option value="156" >Vanuatu</option>
                            
                                
                                <option value="228" >Venezuela</option>
                            
                                
                                <option value="230" >Vietnam</option>
                            
                                
                                <option value="229" >Virgin Islands (British)</option>
                            
                                
                                <option value="231" >Virgin Islands (US)</option>
                            
                                
                                <option value="234" >Wallis and Futuna</option>
                            
                                
                                <option value="235" >Western Sahara</option>
                            
                                
                                <option value="239" >Yemen</option>
                            
                                
                                <option value="240" >Zambia</option>
                            
                                
                                <option value="241" >Zimbabwe</option>                    
</select></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Languages Spoken:</td>
    <td><select name="languagesspoken" id="languagesspoken"> 
    <option value="" >Select Your Languages Spoken</option>
   	<option value="1419" >Afrikaans</option>
                            
									
                                
                                
                                <option value="1420" >Albanian</option>
                            
									
                                
                                
                                <option value="1421" >Amharic</option>
                            
									
                                
                                
                                <option value="1422" >Arabic</option>
                            
									
                                
                                
                                <option value="1423" >Armenian</option>
                            
									
                                
                                
                                <option value="1424" >Assyrian</option>
                            
									
                                
                                
                                <option value="1425" >Azerbaijani</option>
                            
									
                                
                                
                                <option value="1426" >Bahasa Malay / Indonesian</option>
                            
									
                                
                                
                                <option value="1427" >Belorussian</option>
                            
									
                                
                                
                                <option value="932" >Bengali</option>
                            
									
                                
                                
                                <option value="2445" >Berber</option>
                            
									
                                
                                
                                <option value="1429" >Bulgarian</option>
                            
									
                                
                                
                                <option value="1430" >Burmese</option>
                            
									
                                
                                
                                <option value="1431" >Cebuano</option>
                            
									
                                
                                
                                <option value="1432" >Chinese (Cantonese)</option>
                            
									
                                
                                
                                <option value="1433" >Chinese (Mandarin)</option>
                            
									
                                
                                
                                <option value="1434" >Creole</option>
                            
									
                                
                                
                                <option value="1435" >Croatian</option>
                            
									
                                
                                
                                <option value="1436" >Czech</option>
                            
									
                                
                                
                                <option value="1437" >Danish</option>
                            
									
                                
                                
                                <option value="1438" >Dutch</option>
                            
									
                                
                                
                                <option value="938" >English</option>
                            
									
                                
                                
                                <option value="1440" >Eritrean</option>
                            
									
                                
                                
                                <option value="1441" >Estonian</option>
                            
									
                                
                                
                                <option value="1442" >Farsi</option>
                            
									
                                
                                
                                <option value="1443" >Finnish</option>
                            
									
                                
                                
                                <option value="939" >French</option>
                            
									
                                
                                
                                <option value="1445" >Georgian</option>
                            
									
                                
                                
                                <option value="1446" >German</option>
                            
									
                                
                                
                                <option value="1447" >Greek</option>
                            
									
                                
                                
                                <option value="942" >Gujarati</option>
                            
									
                                
                                
                                <option value="1449" >Hausa</option>
                            
									
                                
                                
                                <option value="1450" >Hebrew</option>
                            
									
                                
                                
                                <option value="945" >Hindi</option>
                            
									
                                
                                
                                <option value="1452" >Hungarian</option>
                            
									
                                
                                
                                <option value="1453" >Icelandic</option>
                            
									
                                
                                
                                <option value="1454" >Iilocano</option>
                            
									
                                
                                
                                <option value="1455" >Inuktitut</option>
                            
									
                                
                                
                                <option value="1456" >Italian</option>
                            
									
                                
                                
                                <option value="1457" >Japanese</option>
                            
									
                                
                                
                                <option value="1458" >Kazakh</option>
                            
									
                                
                                
                                <option value="1459" >Khmer</option>
                            
									
                                
                                
                                <option value="1460" >Kirgiz</option>
                            
									
                                
                                
                                <option value="1461" >Korean</option>
                            
									
                                
                                
                                <option value="1462" >Kurdish</option>
                            
									
                                
                                
                                <option value="954" >Kutchi</option>
                            
									
                                
                                
                                <option value="1463" >Kyrgiz</option>
                            
									
                                
                                
                                <option value="1464" >Laotian</option>
                            
									
                                
                                
                                <option value="1465" >Latvian</option>
                            
									
                                
                                
                                <option value="1466" >Lithuanian</option>
                            
									
                                
                                
                                <option value="1467" >Macedonian</option>
                            
									
                                
                                
                                <option value="1468" >Malagasy</option>
                            
									
                                
                                
                                <option value="959" >Malayalam</option>
                            
									
                                
                                
                                <option value="1470" >Maldivian</option>
                            
									
                                
                                
                                <option value="1471" >Maltese</option>
                            
									
                                
                                
                                <option value="961" >Marathi</option>
                            
									
                                
                                
                                <option value="1473" >Mongolian</option>
                            
									
                                
                                
                                <option value="966" >Nepali</option>
                            
									
                                
                                
                                <option value="1475" >Norwegian</option>
                            
									
                                
                                
                                <option value="1476" >Pashto</option>
                            
									
                                
                                
                                <option value="1477" >Persian</option>
                            
									
                                
                                
                                <option value="1478" >Pidgin</option>
                            
									
                                
                                
                                <option value="1479" >Polish</option>
                            
									
                                
                                
                                <option value="1480" >Portuguese</option>
                            
									
                                
                                
                                <option value="1481" >Quechua</option>
                            
									
                                
                                
                                <option value="1482" >Romanian</option>
                            
									
                                
                                
                                <option value="1483" >Russian</option>
                            
									
                                
                                
                                <option value="1484" >Serbian</option>
                            
									
                                
                                
                                <option value="974" >Sindhi</option>
                            
									
                                
                                
                                <option value="1486" >Sinhala</option>
                            
									
                                
                                
                                <option value="1487" >Slovak</option>
                            
									
                                
                                
                                <option value="1488" >Slovene</option>
                            
									
                                
                                
                                <option value="1489" >Somali</option>
                            
									
                                
                                
                                <option value="1490" >Spanish</option>
                            
									
                                
                                
                                <option value="1491" >Swahili</option>
                            
									
                                
                                
                                <option value="1492" >Swedish</option>
                            
									
                                
                                
                                <option value="1493" >Tagalog</option>
                            
									
                                
                                
                                <option value="976" >Tamil</option>
                            
									
                                
                                
                                <option value="977" >Telugu</option>
                            
									
                                
                                
                                <option value="1496" >Thai</option>
                            
									
                                
                                
                                <option value="1497" >Tibetan</option>
                            
									
                                
                                
                                <option value="1498" >Tongan</option>
                            
									
                                
                                
                                <option value="1499" >Turkish</option>
                            
									
                                
                                
                                <option value="1500" >Turkmen</option>
                            
									
                                
                                
                                <option value="1501" >Ugaritic</option>
                            
									
                                
                                
                                <option value="1502" >Ukrainian</option>
                            
									
                                
                                
                                <option value="980" >Urdu</option>
                            
									
                                
                                
                                <option value="1504" >Uzbek</option>
                            
									
                                
                                
                                <option value="1505" >Vietnamese</option>
                            
									
                                
                                
                                <option value="1506" >Welsh</option>
                            
									
                                
                                
                                <option value="252" >Other</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ambition:</td>
    <td><input type="text" name="ambition" id="ambition" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Hobbies:</td>
    <td><input type="text" name="hobbies" id="hobbies" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Dreams:</td>
    <td><input type="text" name="dreams" id="dreams" /></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Get Married:</td>
    <td><select name="getmarried" id="getmarried"> 
    <option value="" >Select Get Married</option>
   	<option value="822" >After 3 months</option>
    <option value="823" >After 6 months</option>
    <option value="824" >After 1 year</option>
	<option value="825" >After 2 years</option>
	<option value="826" >Other</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>More Children:</td>
    <td><select name="morechildren" id="morechildren"> 
    <option value="" >Select Want More Children</option>
   	<option value="288" >Yes</option>
    <option value="290" >Not Sure</option>
    <option value="289" >No</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Dowry:</td>
    <td><select name="dowry" id="dowry"> 
    <option value="" >Select Dowry</option>
   	<option value="822" >Never interested</option>
   	<option value="823" >interested</option>
    <option value="824" >prefer not to say</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>CNIC:</td>
    <td><input type="text" name="cnic" id="cnic" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Family Image:</td>
    <td><input type="file" name="family_image" id="family_image" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="Submit" />&nbsp;&nbsp;&nbsp;<input type="reset" name="rest" id="rest" value="Reset" /></td>
  </tr>
</table>
</form>
<?php 

} // If ends here

else
{

?>
<br><br>
<form action="" method="post" name="nextstep" id="nextstep" enctype="multipart/form-data">
	<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>ID:</td>
    <td><input type="text" name="id" id="id" value="<?php echo $id ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>IP:</td>
    <td><input type="text" name="ip" id="ip" value="<?php echo $ip ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Familyid:</td>
    <td><input type="text" name="parientid" id="parientid" value="<?php echo $familyid ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input type="text" name="email" id="email" value="<?php echo $familyemailaddress ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>UserName:</td>
    <td><input type="text" name="username" id="username" value="<?php echo $familyfullname ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>UserPassword:</td>
    <td><input type="password" name="password" id="password" value="<?php echo $familypassword ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Gender:</td>
    <td><select name="gender" id="gender">
  <option value="">Select Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 <tr>
    <td>Seeking Gender:</td>
    <td><select name="seeking_gender" id="seeking_gender">
  <option value="">Select Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Date of Birth:</td>
    <td><input type="text" name="dateofbirth" id="dateofbirth" value="<?php echo $familydateofbirth ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Country:</td>
    <td><input type="text" name="country" id="country" value="<?php echo $familycountry ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>State:</td>
    <td><input type="text" name="state" id="state" value="<?php echo $familystate ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>City:</td>
    <td><input type="text" name="city" id="city" value="<?php echo $familycity ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Terms:</td>
    <td><textarea name="terms" id="terms" cols="30" rows="5">Enter some text about Family Terms...
</textarea>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>First Name:</td>
    <td><input type="text" name="first_name" id="first_name" value="<?php echo $familyfirstname ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td><input type="text" name="last_name" id="last_name" value="<?php echo $familylastname ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Phone:</td>
    <td><input type="text" name="phone" id="phone" value="<?php echo $familyphone ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Mobile:</td>
    <td><input type="text" name="mobile" id="mobile" value="<?php echo $familycell ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Profile Picture:</td>
    <td><input type="file" name="profile_picture" id="profile_picture"  value="<?php echo $familyprofileimage ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Profile Date:</td>
    <td><input type="text" name="profile_date" id="profile_date" class="tcal" value="" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Profile Time:</td>
    <td><input type="text" name="profile_time" id="profile_time" value="<?php echo $familyprofiletime ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Hair Color:</td>
    <td><select name="haircolor" id="haircolor"> 
    <option value="" >Select Hair Color</option>
    <option value="375" >Bald / Shaved</option>                        
    <option value="371" >Black</option>
    <option value="373" >Blonde</option>
    <option value="370" >Brown</option>
    <option value="374" >Grey / White</option>
    <option value="369" >Light Brown</option>
    <option value="372" >Red</option>
    <option value="377" >Changes frequently</option>
    <option value="252" >Other</option>
    <option value="251" >Prefer not to say</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Hair Type:</td>
    <td><select name="hairtype" id="hairtype"> 
    <option value="" >Select Hair Type</option>
    <option value="384" >Straight</option>
    <option value="385" >Wavy</option>
    <option value="386" >Curly</option>
    <option value="252" >Other</option>
    <option value="251" >Prefer not to say</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Eye Color:</td>
    <td><select name="eyecolor" id="eyecolor"> 
    <option value="" >Select Eye Color</option>
    <option value="355" >Black</option>
    <option value="352" >Blue</option>
    <option value="354" >Brown</option>
    <option value="356" >Green</option>
    <option value="353" >Grey</option>
    <option value="357" >Hazel</option>
    <option value="252" >Other</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Eye Wear:</td>
    <td><select name="eyewear" id="eyewear"> 
    <option value="" >Select Eye Wear</option>
    <option value="360" >Contacts</option>
    <option value="359" >Glasses</option>
    <option value="358" >None</option>
    <option value="252" >Other</option>
    <option value="251" >Prefer not to say</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Height:</td>
    <td><select name="height" id="height"> 
    <option value="" >Select Your Height</option>
    <option value="140" >4'7" (140 cm)</option>
    <option value="143" >4'8" (143 cm)</option>
    <option value="145" >4'9" (145 cm)</option>
    <option value="148" >4'10" (148 cm)</option>
    <option value="150" >4'11" (150 cm)</option>
    <option value="153" >5' (153 cm)</option>
    <option value="155" >5'1" (155 cm)</option>
    <option value="158" >5'2" (158 cm)</option>
    <option value="161" >5'3" (161 cm)</option>
    <option value="163" >5'4" (163 cm)</option>
    <option value="166" >5'5" (166 cm)</option>
    <option value="168" >5'6" (168 cm)</option>
    <option value="171" >5'7" (171 cm)</option>
    <option value="173" >5'8" (173 cm)</option>
    <option value="176" >5'9" (176 cm)</option>
    <option value="178" >5'10" (178 cm)</option>
    <option value="181" >5'11" (181 cm)</option>
    <option value="183" >6' (183 cm)</option>
    <option value="186" >6'1" (186 cm)</option>
    <option value="188" >6'2" (188 cm)</option>
    <option value="191" >6'3" (191 cm)</option>
    <option value="194" >6'4" (194 cm)</option>
    <option value="196" >6'5" (196 cm)</option>
    <option value="199" >6'6" (199 cm)</option>
    <option value="201" >6'7" (201 cm)</option>
    <option value="204" >6'8" (204 cm)</option>
    <option value="206" >6'9 (206 cm)</option>
    <option value="209" >6'10" (209 cm)</option>
    <option value="211" >6'11" (211 cm)</option>
    <option value="214" >7' (214 cm)</option>
    <option value="216" >7'1" (216 cm)</option>
    <option value="219" >7'2" (219 cm)</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Weight:</td>
    <td><select name="weight" id="weight"> 
    <option value="" >Select Your Weight</option>
    <option value="40" >40 kg (88 lb)</option>
    <option value="41" >41 kg (90 lb)</option>
    <option value="42" >42 kg (93 lb)</option>
    <option value="43" >43 kg (95 lb)</option>
    <option value="44" >44 kg (97 lb)</option>
    <option value="45" >45 kg (99 lb)</option>
    <option value="46" >46 kg (101 lb)</option>
    <option value="47" >47 kg (104 lb)</option>
    <option value="48" >48 kg (106 lb)</option>
    <option value="49" >49 kg (108 lb)</option>
    <option value="50" >50 kg (110 lb)</option>
    <option value="51" >51 kg (112 lb)</option>
    <option value="52" >52 kg (115 lb)</option>
    <option value="53" >53 kg (117 lb)</option>
    <option value="54" >54 kg (119 lb)</option>
    <option value="55" >55 kg (121 lb)</option>
    <option value="56" >56 kg (123 lb)</option>
    <option value="57" >57 kg (126 lb)</option>
    <option value="58" >58 kg (128 lb)</option>
    <option value="59" >59 kg (130 lb)</option>
    <option value="60" >60 kg (132 lb)</option>
    <option value="61" >61 kg (134 lb)</option>
    <option value="62" >62 kg (137 lb)</option>
    <option value="63" >63 kg (139 lb)</option>
    <option value="64" >64 kg (141 lb)</option>
    <option value="65" >65 kg (143 lb)</option>
    <option value="66" >66 kg (146 lb)</option>
    <option value="67" >67 kg (148 lb)</option>
    <option value="68" >68 kg (150 lb)</option>
    <option value="69" >69 kg (152 lb)</option>
    <option value="70" >70 kg (154 lb)</option>
    <option value="71" >71 kg (157 lb)</option>
    <option value="72" >72 kg (159 lb)</option>
    <option value="73" >73 kg (161 lb)</option>
    <option value="74" >74 kg (163 lb)</option>
    <option value="75" >75 kg (165 lb)</option>
    <option value="76" >76 kg (168 lb)</option>
    <option value="77" >77 kg (170 lb)</option>
    <option value="78" >78 kg (172 lb)</option>
    <option value="79" >79 kg (174 lb)</option>
    <option value="80" >80 kg (176 lb)</option>
    <option value="81" >81 kg (179 lb)</option>
    <option value="82" >82 kg (181 lb)</option>
    <option value="83" >83 kg (183 lb)</option>
    <option value="84" >84 kg (185 lb)</option>
    <option value="85" >85 kg (187 lb)</option>
    <option value="86" >86 kg (190 lb)</option>
    <option value="87" >87 kg (192 lb)</option>
    <option value="88" >88 kg (194 lb)</option>
    <option value="89" >89 kg (196 lb)</option>
    <option value="90" >90 kg (198 lb)</option>
    <option value="91" >91 kg (201 lb)</option>
    <option value="92" >92 kg (203 lb)</option>
    <option value="93" >93 kg (205 lb)</option>
    <option value="94" >94 kg (207 lb)</option>
    <option value="95" >95 kg (209 lb)</option>
    <option value="96" >96 kg (212 lb)</option>
    <option value="97" >97 kg (214 lb)</option>
    <option value="98" >98 kg (216 lb)</option>
    <option value="99" >99 kg (218 lb)</option>
    <option value="100" >100 kg (220 lb)</option>
    <option value="101" >101 kg (223 lb)</option>
    <option value="102" >102 kg (225 lb)</option>
    <option value="103" >103 kg (227 lb)</option>
    <option value="104" >104 kg (229 lb)</option>
    <option value="105" >105 kg (231 lb)</option>
    <option value="106" >106 kg (234 lb)</option>
    <option value="107" >107 kg (236 lb)</option>
    <option value="108" >108 kg (238 lb)</option>
    <option value="109" >109 kg (240 lb)</option>
    <option value="110" >110 kg (243 lb)</option>
    <option value="111" >111 kg (245 lb)</option>
    <option value="112" >112 kg (247 lb)</option>
    <option value="113" >113 kg (249 lb)</option>
    <option value="114" >114 kg (251 lb)</option>
    <option value="115" >115 kg (254 lb)</option>
    <option value="116" >116 kg (256 lb)</option>
    <option value="117" >117 kg (258 lb)</option>
    <option value="118" >118 kg (260 lb)</option>
    <option value="119" >119 kg (262 lb)</option>
    <option value="120" >120 kg (265 lb)</option>
    <option value="121" >121 kg (267 lb)</option>
    <option value="122" >122 kg (269 lb)</option>
    <option value="123" >123 kg (271 lb)</option>
    <option value="124" >124 kg (273 lb)</option>
    <option value="125" >125 kg (276 lb)</option>
    <option value="126" >126 kg (278 lb)</option>
    <option value="127" >127 kg (280 lb)</option>
    <option value="128" >128 kg (282 lb)</option>
    <option value="129" >129 kg (284 lb)</option>
    <option value="130" >130 kg (287 lb)</option>
    <option value="131" >131 kg (289 lb)</option>
    <option value="132" >132 kg (291 lb)</option>
    <option value="133" >133 kg (293 lb)</option>
    <option value="134" >134 kg (295 lb)</option>
    <option value="135" >135 kg (298 lb)</option>
    <option value="136" >136 kg (300 lb)</option>
    <option value="137" >137 kg (302 lb)</option>
    <option value="138" >138 kg (304 lb)</option>
    <option value="139" >139 kg (306 lb)</option>
    <option value="140" >140 kg (309 lb)</option>
    <option value="141" >141 kg (311 lb)</option>
    <option value="142" >142 kg (313 lb)</option>
    <option value="143" >143 kg (315 lb)</option>
    <option value="144" >144 kg (317 lb)</option>
    <option value="145" >145 kg (320 lb)</option>
    <option value="146" >146 kg (322 lb)</option>
    <option value="147" >147 kg (324 lb)</option>
    <option value="148" >148 kg (326 lb)</option>
    <option value="149" >149 kg (328 lb)</option>
    <option value="150" >150 kg (331 lb)</option>
    <option value="151" >151 kg (333 lb)</option>
    <option value="152" >152 kg (335 lb)</option>
    <option value="153" >153 kg (337 lb)</option>
    <option value="154" >154 kg (340 lb)</option>
    <option value="155" >155 kg (342 lb)</option>
    <option value="156" >156 kg (344 lb)</option>
    <option value="157" >157 kg (346 lb)</option>
    <option value="158" >158 kg (348 lb)</option>
    <option value="159" >159 kg (351 lb)</option>
    <option value="160" >160 kg (353 lb)</option>
    <option value="161" >161 kg (355 lb)</option>
    <option value="162" >162 kg (357 lb)</option>
    <option value="163" >163 kg (359 lb)</option>
    <option value="164" >164 kg (362 lb)</option>
    <option value="165" >165 kg (364 lb)</option>
    <option value="166" >166 kg (366 lb)</option>
    <option value="167" >167 kg (368 lb)</option>
    <option value="168" >168 kg (370 lb)</option>
    <option value="169" >169 kg (373 lb)</option>
    <option value="170" >170 kg (375 lb)</option>
    <option value="171" >171 kg (377 lb)</option>
    <option value="172" >172 kg (379 lb)</option>
    <option value="173" >173 kg (381 lb)</option>
    <option value="174" >174 kg (384 lb)</option>
    <option value="175" >175 kg (386 lb)</option>
    <option value="176" >176 kg (388 lb)</option>
    <option value="177" >177 kg (390 lb)</option>
    <option value="178" >178 kg (392 lb)</option>
    <option value="179" >179 kg (395 lb)</option>
    <option value="180" >180 kg (397 lb)</option>
    <option value="181" >181 kg (399 lb)</option>
    <option value="182" >182 kg (401 lb)</option>
    <option value="183" >183 kg (403 lb)</option>
    <option value="184" >184 kg (406 lb)</option>
    <option value="185" >185 kg (408 lb)</option>
    <option value="186" >186 kg (410 lb)</option>
    <option value="187" >187 kg (412 lb)</option>
    <option value="188" >188 kg (414 lb)</option>
    <option value="189" >189 kg (417 lb)</option>
    <option value="190" >190 kg (419 lb)</option>
    <option value="191" >191 kg (421 lb)</option>
    <option value="192" >192 kg (423 lb)</option>
    <option value="193" >193 kg (425 lb)</option>
    <option value="194" >194 kg (428 lb)</option>
    <option value="195" >195 kg (430 lb)</option>
    <option value="196" >196 kg (432 lb)</option>
    <option value="197" >197 kg (434 lb)</option>
    <option value="198" >198 kg (437 lb)</option>
    <option value="199" >199 kg (439 lb)</option>
    <option value="200" >200 kg (441 lb)</option>
    <option value="201" >201 kg (443 lb)</option>

    <option value="202" >202 kg (445 lb)</option>
    <option value="203" >203 kg (448 lb)</option>
    <option value="204" >204 kg (450 lb)</option>
    <option value="205" >205 kg (452 lb)</option>
    <option value="206" >206 kg (454 lb)</option>
    <option value="207" >207 kg (456 lb)</option>
    <option value="208" >208 kg (459 lb)</option>
    <option value="209" >209 kg (461 lb)</option>
    <option value="210" >210 kg (463 lb)</option>
    <option value="211" >211 kg (465 lb)</option>
    <option value="212" >212 kg (467 lb)</option>
    <option value="213" >213 kg (470 lb)</option>
    <option value="214" >214 kg (472 lb)</option>
    <option value="215" >215 kg (474 lb)</option>
    <option value="216" >216 kg (476 lb)</option>
    <option value="217" >217 kg (478 lb)</option>
    <option value="218" >218 kg (481 lb)</option>
    <option value="219" >219 kg (483 lb)</option>
    <option value="220" >220 kg (485 lb)</option>
                            
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Body Type:</td>
    <td><select name="bodytype" id="bodytype"> 
    <option value="" >Select Your Body Type</option>
    <option value="275" >Petite</option>
    <option value="276" >Slim</option>
    <option value="278" >Athletic</option>
    <option value="277" >Average</option>
    <option value="279" >Few Extra Pounds</option>
    <option value="280" >Full Figured</option>
    <option value="281" >Large and Lovely</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Appearance:</td>
    <td><select name="appearance" id="appearance"> 
    <option value="" >Select Your Appearance</option>
    <option value="258" >Below average</option>
    <option value="257" >Average</option>
    <option value="256" >Attractive</option>
    <option value="255" >Very attractive</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Facialhair:</td>
    <td><select name="facialhair" id="facialhair"> 
    <option value="" >Select Your Facialhair</option>
    <option value="368" >Clean Shaven</option>
    <option value="367" >Sideburns</option>
    <option value="365" >Mustache</option>
    <option value="366" >Goatee</option>
    <option value="362" >Short Beard</option>
    <option value="363" >Medium Beard</option>
    <option value="364" >Long Beard</option>
    <option value="252" >Other</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Physical Status:</td>
    <td><select name="physicalstatus" id="physicalstatus"> 
    <option value="" >Select Your Physical Status</option>
    <option value="922" >Normal</option>
    <option value="925" >Minor Health Issues</option>
    <option value="926" >Serious Health Issues</option>
    <option value="923" >Minor Physical Disability</option>
    <option value="924" >Major Physical Disability</option>
    <option value="251" >Prefer not to say</option>                            
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Marital Status:</td>
    <td><select name="maritalstatus" id="maritalstatus"> 
    <option value="" >Select Your Marital Status</option>
    <option value="556" >Single</option>
    <option value="557" >Separated</option>
    <option value="559" >Widowed</option>
    <option value="558" >Divorced</option>
    <option value="560" >Married</option>                            
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Childrens:</td>
    <td><select name="children" id="children"> 
    <option value="" >Select Your Children</option>
    <option value="285" >No</option>
    <option value="284" >Yes - don't live at home</option>
    <option value="283" >Yes - sometimes live at home</option>
    <option value="282" >Yes - live at home</option>                            
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Family Values:</td>
    <td><select name="familyvalues" id="familyvalues"> 
    <option value="" >Select Your Family Values</option>
   <option value="822" >Traditional</option>
   <option value="823" >Moderate</option>
   <option value="824" >Liberal</option>                            
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Living Situation:</td>
    <td><select name="livingsituation" id="livingsituation"> 
    <option value="" >Select Your Living Situation</option>
   	<option value="551" >Live Alone</option>
    <option value="552" >Live with friends</option>
    <option value="553" >Live with family</option>
    <option value="554" >Live with kids</option>
    <option value="555" >Live with spouse</option>
    <option value="252" >Other</option>
    <option value="251" >Prefer not to say</option>                        
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Likes:</td>
    <td><textarea name="likes" id="likes" cols="30" rows="5">Enter some text about Family Likes...
</textarea>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Dislikes:</td>
    <td><textarea name="dislikes" id="dislikes" cols="30" rows="5">Enter some text about Family Dislikes...
</textarea>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Zodiac Hormony:</td>
    <td><input type="text" name="zodiachormony" id="zodiachormony" placeholder="Enter Your Family Zodia Chormony"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Food Habits:</td>
    <td><select name="foodhabits" id="foodhabits"> 
    <option value="" >Select Your Food Habits</option>
   	<option value="299" >Halal foods always</option>
    <option value="300" >Halal foods when I can</option>
    <option value="307" >No special restrictions</option>                    
</select></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Education:</td>
    <td><select name="education" id="education"> 
    <option value="" >Select Your Education</option>
   	<option value="312" >Primary (Elementary) School</option>
    <option value="313" >Middle School / Junior High</option>
    <option value="314" >High School</option>
    <option value="315" >Vocational College</option>
    <option value="316" >Bachelors Degree</option>
    <option value="317" >Masters Degree</option>
    <option value="318" >PhD or Doctorate</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Occupation:</td>
    <td><select name="occupation" id="occupation"> 
    <option value="" >Select Your Occupation</option>
   	<option value="563" >Administrative / Secretarial / Clerical</option>
    <option value="564" >Advertising / Media</option>
    <option value="565" >Artistic / Creative / Performance</option>
    <option value="566" >Construction / Trades</option>
    <option value="567" >Domestic Helper</option>
    <option value="568" >Education / Academic</option>
    <option value="1510" >Entertainment / Media</option>
    <option value="569" >Executive / Management / HR</option>
    <option value="570" >Farming / Agriculture</option>
    <option value="572" >Finance / Banking / Real Estate</option>
    <option value="571" >Fire / law enforcement / security</option>
    <option value="1509" >Hair Dresser / Personal Grooming</option>
    <option value="573" >IT / Communications</option>
    <option value="574" >Laborer / Manufacturing</option>
    <option value="575" >Legal</option>
    <option value="576" >Medical / Dental / Veterinary</option>
    <option value="1620" >Military</option>
    <option value="577" >Nanny / Child care</option>
    <option value="588" >No occupation / Stay at home</option>
    <option value="578" >Non-profit / clergy / social services</option>
    <option value="579" >Political / Govt / Civil Service</option>
    <option value="580" >Retail / Food services</option>
    <option value="581" >Retired</option>
    <option value="582" >Sales / Marketing</option>
    <option value="1511" >Self Employed</option>
    <option value="583" >Sports / recreation</option>
    <option value="584" >Student</option>
    <option value="585" >Technical / Science / Engineering</option>
    <option value="1508" >Transportation</option>
    <option value="586" >Travel / Hospitality</option>
    <option value="587" >Unemployed</option>
    <option value="252" >Other</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Relocate:</td>
    <td><select name="relocate" id="relocate"> 
    <option value="" >Select Your Relocate</option>
   	<option value="701" >Willing to relocate within my country</option>
    <option value="700" >Willing to relocate to another country</option>
    <option value="702" >Not willing to relocate</option>
    <option value="703" >Not sure about relocating</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Religion:</td>
    <td><select name="religion" id="religion"> 
    <option value="" >Select Your Religion</option>
   	<option value="644" >Islam - Sunni</option>
    <option value="645" >Islam - Shiite</option>
    <option value="646" >Islam - Sufism</option>
    <option value="647" >Islam - Ahmadiyya</option>
    <option value="648" >Islam - Other</option>
    <option value="670" >Willing to revert</option>
    <option value="252" >Other</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Born Reverted:</td>
    <td><select name="bornreverted" id="bornreverted"> 
    <option value="" >Select Born Reverted</option>
   	<option value="822" >Born a muslim</option>
    <option value="823" >Reverted to Islam</option>
    <option value="824" >Plan to revert to Islam</option>                    
</select></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Religious Values:</td>
    <td><select name="religiousvalues" id="religiousvalues"> 
    <option value="" >Select Religious Values</option>
   	<option value="697" >Very Religious</option>
    <option value="698" >Religious</option>
    <option value="699" >Not Religious</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Religious Services:</td>
    <td><select name="religiousservices" id="religiousservices"> 
    <option value="" >Select Your Religious Services</option>
   	<option value="683" >Daily</option>
    <option value="693" >Only on Jummah / Fridays</option>
    <option value="691" >Sometimes</option>
    <option value="695" >Only During Ramadan</option>
    <option value="688" >Never</option>                
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Mother Language:</td>
    <td><select name="mother_language" id="mother_language"> 
    <option value="" >Select Your Mother Language</option>
   	<option value="81">Indonesian</option>
		<option value="84">Javanese</option>
		<option value="96">Sundanese</option>
		<option value="97">Balinese</option>
		<option value="98">Mandarin Chinese</option>
		<option value="15">Arabic</option>
		<option value="3">Urdu</option>
		<option value="44">Malay</option>
		<option value="99">Pashtu</option>
		<option value="74">Farsi (Persian)</option>
		<option value="100">Arminian</option>
		<option value="101">Kurdish</option>
		<option value="102">Berber</option>
		<option value="103">Uzbek</option>
		<option value="104">Balochi</option>
		<option value="105">Pashai</option>
		<option value="27">French</option>
		<option value="106">Luri</option>
		<option value="107">Assyrian</option>
		<option value="108">Armenian</option>
		<option value="79">Hebrew</option>
		<option value="1">Hindi</option>
		<option value="114">Baluchi</option>
		<option value="5">Punjabi</option>
		<option value="12">Sindhi</option>
		<option value="110">Siraiki</option>
		<option value="111">Aramaic</option>
		<option value="112">Circassi</option>
		<option value="78">Greek</option>
		<option value="113">Nubian</option>
		<option value="0">-------------</option>
		<option value="17">Aka</option>
		<option value="15">Arabic</option>
		<option value="111">Aramaic</option>
		<option value="108">Armenian</option>
		<option value="100">Arminian</option>
		<option value="19">Assamese</option>
		<option value="107">Assyrian</option>
		<option value="20">Awadhi</option>
		<option value="97">Balinese</option>
		<option value="104">Balochi</option>
		<option value="114">Baluchi</option>
		<option value="21">Bengali</option>
		<option value="102">Berber</option>
		<option value="22">Bhojpuri</option>
		<option value="23">Bhutia</option>
		<option value="67">Bulgarian</option>
		<option value="68">Cambodian</option>
		<option value="69">Cantonese</option>
		<option value="24">Chatlisgarhi</option>
		<option value="25">Chinese</option>
		<option value="112">Circassi</option>
		<option value="70">Croatian</option>
		<option value="71">Czech</option>
		<option value="72">Danish</option>
		<option value="26">Dogri</option>
		<option value="73">Dutch</option>
		<option value="4">English</option>
		<option value="74">Farsi (Persian)</option>
		<option value="76">Finnish</option>
		<option value="27">French</option>
		<option value="28">Garhwali</option>
		<option value="77">German</option>
		<option value="78">Greek</option>
		<option value="2">Gujarati</option>
		<option value="31">Haryanvi</option>
		<option value="79">Hebrew</option>
		<option value="1">Hindi</option>
		<option value="80">Hungarian</option>
		<option value="81">Indonesian</option>
		<option value="82">Italian</option>
		<option value="83">Japanese</option>
		<option value="84">Javanese</option>
		<option value="32">Kakbarak</option>
		<option value="33">Kanauji</option>
		<option value="11">Kannada</option>
		<option value="34">Kashmiri</option>
		<option value="36">Khasi</option>
		<option value="37">Konkani</option>
		<option value="85">Korean</option>
		<option value="38">Koshali</option>
		<option value="39">Kumoani</option>
		<option value="101">Kurdish</option>
		<option value="40">Kutchi</option>
		<option value="86">Latin</option>
		<option value="41">Lepcha</option>
		<option value="106">Luri</option>
		<option value="42">Magahi</option>
		<option value="43">Maithili</option>
		<option value="44">Malay</option>
		<option value="9">Malayalam</option>
		<option value="98">Mandarin Chinese</option>
		<option value="46">Manipuri</option>
		<option value="7">Marathi</option>
		<option value="48">Marwari</option>
		<option value="49">Miji</option>
		<option value="50">Mizo</option>
		<option value="51">Monpa</option>
		<option value="52">Nepali</option>
		<option value="87">Norwegian</option>
		<option value="113">Nubian</option>
		<option value="14">Oriya</option>
		<option value="105">Pashai</option>
		<option value="99">Pashtu</option>
		<option value="54">Persian</option>
		<option value="75">Persian (Farsi)</option>
		<option value="88">Polish</option>
		<option value="89">Portuguese</option>
		<option value="5">Punjabi</option>
		<option value="56">Rajasthani</option>
		<option value="57">Russian</option>
		<option value="58">Sanskrit</option>
		<option value="59">Santhali</option>
		<option value="90">Serbian</option>
		<option value="12">Sindhi</option>
		<option value="110">Siraiki</option>
		<option value="61">Spanish</option>
		<option value="96">Sundanese</option>
		<option value="91">Swahili</option>
		<option value="62">Swedish</option>
		<option value="64">Tagalog</option>
		<option value="6">Tamil</option>
		<option value="8">Telugu</option>
		<option value="92">Thai</option>
		<option value="65">Tulu</option>
		<option value="93">Turkish</option>
		<option value="94">Ukrainian</option>
		<option value="3">Urdu</option>
		<option value="103">Uzbek</option>
		<option value="95">Vietnamese</option>
		<option value="66">--Other--</option>                
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ethnicity:</td>
    <td><select name="ethnicity" id="ethnicity"> 
    <option value="" >Select Ethnicity</option>
<option value="5">African American</option>
		<option value="8">African Other</option>
		<option value="17">American</option>
		<option value="4">Asian</option>
		<option value="14">Australian</option>
		<option value="16">Canadian</option>
		<option value="6">Caucasian</option>
		<option value="11">East European</option>
		<option value="9">French</option>
		<option value="1">Indian</option>
		<option value="18">Mexican</option>
		<option value="3">Middle Eastern</option>
		<option value="13">Native American</option>
		<option value="7">North African</option>
		<option value="19">Other</option>
		<option value="2">Pakistani</option>
		<option value="12">Russian</option>
		<option value="10">Spanish</option>
		<option value="15">West European</option>
		<option value="19">Other</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Cast:</td>
    <td><input type="text" name="cast" id="cast" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nationality:</td>
    <td><select name="nationality" id="nationality"> 
    <option value="" >Select Your Nationality</option>
	<option value="4" >Afghanistan</option>
    <option value="7" >Albania</option>
    <option value="5" >Algeria</option>
    <option value="11" >American Samoa</option>
    <option value="9" >Andorra</option>
    <option value="10" >Angola</option>
    <option value="15" >Anguilla</option>
    <option value="16" >Antarctica</option>
    <option value="2" >Antigua and Barbuda</option>
    <option value="12" >Argentina</option>
    <option value="8" >Armenia</option>
    <option value="1" >Aruba</option>
    <option value="13" >Australia</option>
    <option value="14" >Austria</option>
    <option value="6" >Azerbaijan</option>
    <option value="22" >Bahamas</option>
    <option value="17" >Bahrain</option>
    <option value="23" >Bangladesh</option>
    <option value="18" >Barbados</option>
    <option value="28" >Belarus</option>
    <option value="21" >Belgium</option>
    <option value="24" >Belize</option>
    <option value="27" >Benin</option>
    <option value="20" >Bermuda</option>
    <option value="31" >Bhutan</option>
    <option value="26" >Bolivia</option>
    <option value="25" >Bosnia & Herzegovina</option>
    <option value="19" >Botswana</option>
                            
                                
                                <option value="33" >Bouvet Island</option>
                            
                                
                                <option value="30" >Brazil</option>
                            
                                
                                <option value="104" >British Indian Ocean</option>
                            
                                
                                <option value="34" >Brunei</option>
                            
                                
                                <option value="32" >Bulgaria</option>
                            
                                
                                <option value="224" >Burkina Faso</option>
                            
                                
                                <option value="35" >Burundi</option>
                            
                                
                                <option value="37" >Cambodia</option>
                            
                                
                                <option value="46" >Cameroon</option>
                            
                                
                                <option value="36" >Canada</option>
                            
                                
                                <option value="53" >Cape Verde</option>
                            
                                
                                <option value="44" >Cayman Islands</option>
                            
                                
                                <option value="51" >Central African Rep.</option>
                            
                                
                                <option value="38" >Chad</option>
                            
                                
                                <option value="43" >Chile</option>
                            
                                
                                <option value="42" >China</option>
                            
                                
                                <option value="119" >Christmas Island</option>
                            
                                
                                <option value="45" >Cocos (Keeling) Is.</option>
                            
                                
                                <option value="48" >Colombia</option>
                            
                                
                                <option value="47" >Comoros</option>
                            
                                
                                <option value="41" >Congo, Dem. Rep</option>
                            
                                
                                <option value="40" >Congo, Republic</option>
                            
                                
                                <option value="54" >Cook Islands</option>
                            
                                
                                <option value="50" >Costa Rica</option>
                            
                                
                                <option value="108" >Cote d'Ivoire</option>
                            
                                
                                <option value="98" >Croatia</option>
                            
                                
                                <option value="52" >Cuba</option>
                            
                                
                                <option value="55" >Cyprus</option>
                            
                                
                                <option value="68" >Czech Republic</option>
                            
                                
                                <option value="56" >Denmark</option>
                            
                                
                                <option value="57" >Djibouti</option>
                            
                                
                                <option value="58" >Dominica</option>
                            
                                
                                <option value="59" >Dominican Republic</option>
                            
                                
                                <option value="213" >East Timor</option>
                            
                                
                                <option value="60" >Ecuador</option>
                            
                                
                                <option value="61" >Egypt</option>
                            
                                
                                <option value="66" >El Salvador</option>
                            
                                
                                <option value="63" >Equatorial Guinea</option>
                            
                                
                                <option value="65" >Eritrea</option>
                            
                                
                                <option value="64" >Estonia</option>
                            
                                
                                <option value="67" >Ethiopia</option>
                            
                                
                                <option value="72" >Falkland Islands</option>
                            
                                
                                <option value="74" >Faroe Islands</option>
                            
                                
                                <option value="71" >Fiji</option>
                            
                                
                                <option value="70" >Finland</option>
                            
                                
                                <option value="76" >France</option>
                            
                                
                                <option value="77" >French Antarctic</option>
                            
                                
                                <option value="69" >French Guiana</option>
                            
                                
                                <option value="75" >French Polynesia</option>
                            
                                
                                <option value="79" >Gabon</option>
                            
                                
                                <option value="78" >Gambia</option>
                            
                                
                                <option value="80" >Georgia</option>
                            
                                
                                <option value="86" >Germany</option>
                            
                                
                                <option value="81" >Ghana</option>
                            
                                
                                <option value="82" >Gibraltar</option>
                            
                                
                                <option value="89" >Greece</option>
                            
                                
                                <option value="85" >Greenland</option>
                            
                                
                                <option value="83" >Grenada</option>
                            
                                
                                <option value="87" >Guadeloupe</option>
                            
                                
                                <option value="88" >Guam</option>
                            
                                
                                <option value="90" >Guatemala</option>
                            
                                
                                <option value="84" >Guernsey</option>
                            
                                
                                <option value="91" >Guinea</option>
                            
                                
                                <option value="175" >Guinea-Bissau</option>
                            
                                
                                <option value="92" >Guyana</option>
                            
                                
                                <option value="94" >Haiti</option>
                            
                                
                                <option value="96" >Heard & McDonald Is</option>
                            
                                
                                <option value="232" >Holy See (Vatican City)</option>
                            
                                
                                <option value="97" >Honduras</option>
                            
                                
                                <option value="95" >Hong Kong</option>
                            
                                
                                <option value="99" >Hungary</option>
                            
                                
                                <option value="100" >Iceland</option>
                            
                                
                                <option value="103" >India</option>
                            
                                
                                <option value="101" >Indonesia</option>
                            
                                
                                <option value="105" >Iran</option>
                            
                                
                                <option value="109" >Iraq</option>
                            
                                
                                <option value="62" >Ireland</option>
                            
                                
                                <option value="102" >Isle of Man</option>
                            
                                
                                <option value="106" >Israel</option>
                            
                                
                                <option value="107" >Italy</option>
                            
                                
                                <option value="112" >Jamaica</option>
                            
                                
                                <option value="110" >Japan</option>
                            
                                
                                <option value="111" >Jersey</option>
                            
                                
                                <option value="113" >Jordan</option>
                            
                                
                                <option value="121" >Kazakhstan</option>
                            
                                
                                <option value="114" >Kenya</option>
                            
                                
                                <option value="117" >Kiribati</option>
                            
                                
                                <option value="116" >Korea, North</option>
                            
                                
                                <option value="118" >Korea, South</option>
                            
                                
                                <option value="120" >Kuwait</option>
                            
                                
                                <option value="115" >Kyrgyzstan</option>
                            
                                
                                <option value="122" >Laos</option>
                            
                                
                                <option value="124" >Latvia</option>
                            
                                
                                <option value="123" >Lebanon</option>
                            
                                
                                <option value="129" >Lesotho</option>
                            
                                
                                <option value="126" >Liberia</option>
                            
                                
                                <option value="131" >Libya</option>
                            
                                
                                <option value="128" >Liechtenstein</option>
                            
                                
                                <option value="125" >Lithuania</option>
                            
                                
                                <option value="130" >Luxembourg</option>
                            
                                
                                <option value="134" >Macau</option>
                            
                                
                                <option value="140" >Macedonia (FYR)</option>
                            
                                
                                <option value="132" >Madagascar</option>
                            
                                
                                <option value="139" >Malawi</option>
                            
                                
                                <option value="150" >Malaysia</option>
                            
                                
                                <option value="148" >Maldives</option>
                            
                                
                                <option value="141" >Mali</option>
                            
                                
                                <option value="146" >Malta</option>
                            
                                
                                <option value="178" >Marshall Islands</option>
                            
                                
                                <option value="133" >Martinique</option>
                            
                                
                                <option value="145" >Mauritania</option>
                            
                                
                                <option value="144" >Mauritius</option>
                            
                                
                                <option value="136" >Mayotte</option>
                            
                                
                                <option value="149" >Mexico</option>
                            
                                
                                <option value="73" >Micronesia</option>
                            
                                
                                <option value="135" >Moldova</option>
                            
                                
                                <option value="142" >Monaco</option>
                            
                                
                                <option value="137" >Mongolia</option>
                            
                                
                                <option value="138" >Montserrat</option>
                            
                                
                                <option value="143" >Morocco</option>
                            
                                
                                <option value="151" >Mozambique</option>
                            
                                
                                <option value="242" >Myanmar</option>
                            
                                
                                <option value="233" >Namibia</option>
                            
                                
                                <option value="161" >Nauru</option>
                            
                                
                                <option value="160" >Nepal</option>
                            
                                
                                <option value="158" >Netherlands</option>
                            
                                
                                <option value="163" >Netherlands Antilles</option>
                            
                                
                                <option value="152" >New Caledonia</option>
                            
                                
                                <option value="165" >New Zealand</option>
                            
                                
                                <option value="164" >Nicaragua</option>
                            
                                
                                <option value="155" >Niger</option>
                            
                                
                                <option value="157" >Nigeria</option>
                            
                                
                                <option value="153" >Niue</option>
                            
                                
                                <option value="154" >Norfolk Island</option>
                            
                                
                                <option value="49" >Northern Mariana Is.</option>
                            
                                
                                <option value="159" >Norway</option>
                            
                                
                                <option value="147" >Oman</option>
                            
                                
                                <option value="169" selected>Pakistan</option>
                            
                                
                                <option value="174" >Palau</option>
                            
                                
                                <option value="93" >Palestine</option>
                            
                                
                                <option value="171" >Panama</option>
                            
                                
                                <option value="173" >Papua New Guinea</option>
                            
                                
                                <option value="166" >Paraguay</option>
                            
                                
                                <option value="168" >Peru</option>
                            
                                
                                <option value="180" >Philippines</option>
                            
                                
                                <option value="167" >Pitcairn Islands</option>
                            
                                
                                <option value="170" >Poland</option>
                            
                                
                                <option value="172" >Portugal</option>
                            
                                
                                <option value="181" >Puerto Rico</option>
                            
                                
                                <option value="176" >Qatar</option>
                            
                                
                                <option value="177" >Reunion</option>
                            
                                
                                <option value="179" >Romania</option>
                            
                                
                                <option value="182" >Russia</option>
                            
                                
                                <option value="183" >Rwanda</option>
                            
                                
                                <option value="190" >Saint Helena</option>
                            
                                
                                <option value="197" >Saint Lucia</option>
                            
                                
                                <option value="236" >Samoa</option>
                            
                                
                                <option value="193" >San Marino</option>
                            
                                
                                <option value="211" >Sao Tome & Principe</option>
                            
                                
                                <option value="184" >Saudi Arabia</option>
                            
                                
                                <option value="189" >Senegal</option>
                            
                                
                                <option value="238" >Serbia</option>
                            
                                
                                <option value="187" >Seychelles</option>
                            
                                
                                <option value="192" >Sierra Leone</option>
                            
                                
                                <option value="194" >Singapore</option>
                            
                                
                                <option value="127" >Slovakia</option>
                            
                                
                                <option value="191" >Slovenia</option>
                            
                                
                                <option value="29" >Solomon Islands</option>
                            
                                
                                <option value="195" >Somalia</option>
                            
                                
                                <option value="188" >South Africa</option>
                            
                                
                                <option value="201" >South Georgia Island</option>
                            
                                
                                <option value="196" >Spain</option>
                            
                                
                                <option value="39" >Sri Lanka</option>
                            
                                
                                <option value="186" >St Kitts & Nevis</option>
                            
                                
                                <option value="185" >St Pierre &  Miquelon</option>
                            
                                
                                <option value="227" >St Vincent Grenadines</option>
                            
                                
                                <option value="198" >Sudan</option>
                            
                                
                                <option value="162" >Suriname</option>
                            
                                
                                <option value="199" >Svalbard & Jan Mayen</option>
                            
                                
                                <option value="237" >Swaziland</option>
                            
                                
                                <option value="200" >Sweden</option>
                            
                                
                                <option value="203" >Switzerland</option>
                            
                                
                                <option value="202" >Syria</option>
                            
                                
                                <option value="216" >Taiwan</option>
                            
                                
                                <option value="206" >Tajikistan</option>
                            
                                
                                <option value="218" >Tanzania</option>
                            
                                
                                <option value="205" >Thailand</option>
                            
                                
                                <option value="210" >Togo</option>
                            
                                
                                <option value="208" >Tokelau</option>
                            
                                
                                <option value="209" >Tonga</option>
                            
                                
                                <option value="204" >Trinidad and Tobago</option>
                            
                                
                                <option value="212" >Tunisia</option>
                            
                                
                                <option value="214" >Turkey</option>
                            
                                
                                <option value="217" >Turkmenistan</option>
                            
                                
                                <option value="207" >Turks & Caicos Is.</option>
                            
                                
                                <option value="215" >Tuvalu</option>
                            
                                
                                <option value="219" >Uganda</option>
                            
                                
                                <option value="222" >Ukraine</option>
                            
                                
                                <option value="3" >United Arab Emirates</option>
                            
                                
                                <option value="220" >United Kingdom</option>
                            
                                
                                <option value="223" >United States</option>
                            
                                
                                <option value="225" >Uruguay</option>
                            
                                
                                <option value="221" >US Minor Outlying Is</option>
                            
                                
                                <option value="226" >Uzbekistan</option>
                            
                                
                                <option value="156" >Vanuatu</option>
                            
                                
                                <option value="228" >Venezuela</option>
                            
                                
                                <option value="230" >Vietnam</option>
                            
                                
                                <option value="229" >Virgin Islands (British)</option>
                            
                                
                                <option value="231" >Virgin Islands (US)</option>
                            
                                
                                <option value="234" >Wallis and Futuna</option>
                            
                                
                                <option value="235" >Western Sahara</option>
                            
                                
                                <option value="239" >Yemen</option>
                            
                                
                                <option value="240" >Zambia</option>
                            
                                
                                <option value="241" >Zimbabwe</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Place of Birth:</td>
    <td><select name="placeofbirth" id="placeofbirth"> 
    <option value="" >Select Your Place of Birth</option>
   	<option value="4" >Afghanistan</option>
                            
                                
                                <option value="7" >Albania</option>
                            
                                
                                <option value="5" >Algeria</option>
                            
                                
                                <option value="11" >American Samoa</option>
                            
                                
                                <option value="9" >Andorra</option>
                            
                                
                                <option value="10" >Angola</option>
                            
                                
                                <option value="15" >Anguilla</option>
                            
                                
                                <option value="16" >Antarctica</option>
                            
                                
                                <option value="2" >Antigua and Barbuda</option>
                            
                                
                                <option value="12" >Argentina</option>
                            
                                
                                <option value="8" >Armenia</option>
                            
                                
                                <option value="1" >Aruba</option>
                            
                                
                                <option value="13" >Australia</option>
                            
                                
                                <option value="14" >Austria</option>
                            
                                
                                <option value="6" >Azerbaijan</option>
                            
                                
                                <option value="22" >Bahamas</option>
                            
                                
                                <option value="17" >Bahrain</option>
                            
                                
                                <option value="23" >Bangladesh</option>
                            
                                
                                <option value="18" >Barbados</option>
                            
                                
                                <option value="28" >Belarus</option>
                            
                                
                                <option value="21" >Belgium</option>
                            
                                
                                <option value="24" >Belize</option>
                            
                                
                                <option value="27" >Benin</option>
                            
                                
                                <option value="20" >Bermuda</option>
                            
                                
                                <option value="31" >Bhutan</option>
                            
                                
                                <option value="26" >Bolivia</option>
                            
                                
                                <option value="25" >Bosnia & Herzegovina</option>
                            
                                
                                <option value="19" >Botswana</option>
                            
                                
                                <option value="33" >Bouvet Island</option>
                            
                                
                                <option value="30" >Brazil</option>
                            
                                
                                <option value="104" >British Indian Ocean</option>
                            
                                
                                <option value="34" >Brunei</option>
                            
                                
                                <option value="32" >Bulgaria</option>
                            
                                
                                <option value="224" >Burkina Faso</option>
                            
                                
                                <option value="35" >Burundi</option>
                            
                                
                                <option value="37" >Cambodia</option>
                            
                                
                                <option value="46" >Cameroon</option>
                            
                                
                                <option value="36" >Canada</option>
                            
                                
                                <option value="53" >Cape Verde</option>
                            
                                
                                <option value="44" >Cayman Islands</option>
                            
                                
                                <option value="51" >Central African Rep.</option>
                            
                                
                                <option value="38" >Chad</option>
                            
                                
                                <option value="43" >Chile</option>
                            
                                
                                <option value="42" >China</option>
                            
                                
                                <option value="119" >Christmas Island</option>
                            
                                
                                <option value="45" >Cocos (Keeling) Is.</option>
                            
                                
                                <option value="48" >Colombia</option>
                            
                                
                                <option value="47" >Comoros</option>
                            
                                
                                <option value="41" >Congo, Dem. Rep</option>
                            
                                
                                <option value="40" >Congo, Republic</option>
                            
                                
                                <option value="54" >Cook Islands</option>
                            
                                
                                <option value="50" >Costa Rica</option>
                            
                                
                                <option value="108" >Cote d'Ivoire</option>
                            
                                
                                <option value="98" >Croatia</option>
                            
                                
                                <option value="52" >Cuba</option>
                            
                                
                                <option value="55" >Cyprus</option>
                            
                                
                                <option value="68" >Czech Republic</option>
                            
                                
                                <option value="56" >Denmark</option>
                            
                                
                                <option value="57" >Djibouti</option>
                            
                                
                                <option value="58" >Dominica</option>
                            
                                
                                <option value="59" >Dominican Republic</option>
                            
                                
                                <option value="213" >East Timor</option>
                            
                                
                                <option value="60" >Ecuador</option>
                            
                                
                                <option value="61" >Egypt</option>
                            
                                
                                <option value="66" >El Salvador</option>
                            
                                
                                <option value="63" >Equatorial Guinea</option>
                            
                                
                                <option value="65" >Eritrea</option>
                            
                                
                                <option value="64" >Estonia</option>
                            
                                
                                <option value="67" >Ethiopia</option>
                            
                                
                                <option value="72" >Falkland Islands</option>
                            
                                
                                <option value="74" >Faroe Islands</option>
                            
                                
                                <option value="71" >Fiji</option>
                            
                                
                                <option value="70" >Finland</option>
                            
                                
                                <option value="76" >France</option>
                            
                                
                                <option value="77" >French Antarctic</option>
                            
                                
                                <option value="69" >French Guiana</option>
                            
                                
                                <option value="75" >French Polynesia</option>
                            
                                
                                <option value="79" >Gabon</option>
                            
                                
                                <option value="78" >Gambia</option>
                            
                                
                                <option value="80" >Georgia</option>
                            
                                
                                <option value="86" >Germany</option>
                            
                                
                                <option value="81" >Ghana</option>
                            
                                
                                <option value="82" >Gibraltar</option>
                            
                                
                                <option value="89" >Greece</option>
                            
                                
                                <option value="85" >Greenland</option>
                            
                                
                                <option value="83" >Grenada</option>
                            
                                
                                <option value="87" >Guadeloupe</option>
                            
                                
                                <option value="88" >Guam</option>
                            
                                
                                <option value="90" >Guatemala</option>
                            
                                
                                <option value="84" >Guernsey</option>
                            
                                
                                <option value="91" >Guinea</option>
                            
                                
                                <option value="175" >Guinea-Bissau</option>
                            
                                
                                <option value="92" >Guyana</option>
                            
                                
                                <option value="94" >Haiti</option>
                            
                                
                                <option value="96" >Heard & McDonald Is</option>
                            
                                
                                <option value="232" >Holy See (Vatican City)</option>
                            
                                
                                <option value="97" >Honduras</option>
                            
                                
                                <option value="95" >Hong Kong</option>
                            
                                
                                <option value="99" >Hungary</option>
                            
                                
                                <option value="100" >Iceland</option>
                            
                                
                                <option value="103" >India</option>
                            
                                
                                <option value="101" >Indonesia</option>
                            
                                
                                <option value="105" >Iran</option>
                            
                                
                                <option value="109" >Iraq</option>
                            
                                
                                <option value="62" >Ireland</option>
                            
                                
                                <option value="102" >Isle of Man</option>
                            
                                
                                <option value="106" >Israel</option>
                            
                                
                                <option value="107" >Italy</option>
                            
                                
                                <option value="112" >Jamaica</option>
                            
                                
                                <option value="110" >Japan</option>
                            
                                
                                <option value="111" >Jersey</option>
                            
                                
                                <option value="113" >Jordan</option>
                            
                                
                                <option value="121" >Kazakhstan</option>
                            
                                
                                <option value="114" >Kenya</option>
                            
                                
                                <option value="117" >Kiribati</option>
                            
                                
                                <option value="116" >Korea, North</option>
                            
                                
                                <option value="118" >Korea, South</option>
                            
                                
                                <option value="120" >Kuwait</option>
                            
                                
                                <option value="115" >Kyrgyzstan</option>
                            
                                
                                <option value="122" >Laos</option>
                            
                                
                                <option value="124" >Latvia</option>
                            
                                
                                <option value="123" >Lebanon</option>
                            
                                
                                <option value="129" >Lesotho</option>
                            
                                
                                <option value="126" >Liberia</option>
                            
                                
                                <option value="131" >Libya</option>
                            
                                
                                <option value="128" >Liechtenstein</option>
                            
                                
                                <option value="125" >Lithuania</option>
                            
                                
                                <option value="130" >Luxembourg</option>
                            
                                
                                <option value="134" >Macau</option>
                            
                                
                                <option value="140" >Macedonia (FYR)</option>
                            
                                
                                <option value="132" >Madagascar</option>
                            
                                
                                <option value="139" >Malawi</option>
                            
                                
                                <option value="150" >Malaysia</option>
                            
                                
                                <option value="148" >Maldives</option>
                            
                                
                                <option value="141" >Mali</option>
                            
                                
                                <option value="146" >Malta</option>
                            
                                
                                <option value="178" >Marshall Islands</option>
                            
                                
                                <option value="133" >Martinique</option>
                            
                                
                                <option value="145" >Mauritania</option>
                            
                                
                                <option value="144" >Mauritius</option>
                            
                                
                                <option value="136" >Mayotte</option>
                            
                                
                                <option value="149" >Mexico</option>
                            
                                
                                <option value="73" >Micronesia</option>
                            
                                
                                <option value="135" >Moldova</option>
                            
                                
                                <option value="142" >Monaco</option>
                            
                                
                                <option value="137" >Mongolia</option>
                            
                                
                                <option value="138" >Montserrat</option>
                            
                                
                                <option value="143" >Morocco</option>
                            
                                
                                <option value="151" >Mozambique</option>
                            
                                
                                <option value="242" >Myanmar</option>
                            
                                
                                <option value="233" >Namibia</option>
                            
                                
                                <option value="161" >Nauru</option>
                            
                                
                                <option value="160" >Nepal</option>
                            
                                
                                <option value="158" >Netherlands</option>
                            
                                
                                <option value="163" >Netherlands Antilles</option>
                            
                                
                                <option value="152" >New Caledonia</option>
                            
                                
                                <option value="165" >New Zealand</option>
                            
                                
                                <option value="164" >Nicaragua</option>
                            
                                
                                <option value="155" >Niger</option>
                            
                                
                                <option value="157" >Nigeria</option>
                            
                                
                                <option value="153" >Niue</option>
                            
                                
                                <option value="154" >Norfolk Island</option>
                            
                                
                                <option value="49" >Northern Mariana Is.</option>
                            
                                
                                <option value="159" >Norway</option>
                            
                                
                                <option value="147" >Oman</option>
                            
                                
                                <option value="169" selected>Pakistan</option>
                            
                                
                                <option value="174" >Palau</option>
                            
                                
                                <option value="93" >Palestine</option>
                            
                                
                                <option value="171" >Panama</option>
                            
                                
                                <option value="173" >Papua New Guinea</option>
                            
                                
                                <option value="166" >Paraguay</option>
                            
                                
                                <option value="168" >Peru</option>
                            
                                
                                <option value="180" >Philippines</option>
                            
                                
                                <option value="167" >Pitcairn Islands</option>
                            
                                
                                <option value="170" >Poland</option>
                            
                                
                                <option value="172" >Portugal</option>
                            
                                
                                <option value="181" >Puerto Rico</option>
                            
                                
                                <option value="176" >Qatar</option>
                            
                                
                                <option value="177" >Reunion</option>
                            
                                
                                <option value="179" >Romania</option>
                            
                                
                                <option value="182" >Russia</option>
                            
                                
                                <option value="183" >Rwanda</option>
                            
                                
                                <option value="190" >Saint Helena</option>
                            
                                
                                <option value="197" >Saint Lucia</option>
                            
                                
                                <option value="236" >Samoa</option>
                            
                                
                                <option value="193" >San Marino</option>
                            
                                
                                <option value="211" >Sao Tome & Principe</option>
                            
                                
                                <option value="184" >Saudi Arabia</option>
                            
                                
                                <option value="189" >Senegal</option>
                            
                                
                                <option value="238" >Serbia</option>
                            
                                
                                <option value="187" >Seychelles</option>
                            
                                
                                <option value="192" >Sierra Leone</option>
                            
                                
                                <option value="194" >Singapore</option>
                            
                                
                                <option value="127" >Slovakia</option>
                            
                                
                                <option value="191" >Slovenia</option>
                            
                                
                                <option value="29" >Solomon Islands</option>
                            
                                
                                <option value="195" >Somalia</option>
                            
                                
                                <option value="188" >South Africa</option>
                            
                                
                                <option value="201" >South Georgia Island</option>
                            
                                
                                <option value="196" >Spain</option>
                            
                                
                                <option value="39" >Sri Lanka</option>
                            
                                
                                <option value="186" >St Kitts & Nevis</option>
                            
                                
                                <option value="185" >St Pierre &  Miquelon</option>
                            
                                
                                <option value="227" >St Vincent Grenadines</option>
                            
                                
                                <option value="198" >Sudan</option>
                            
                                
                                <option value="162" >Suriname</option>
                            
                                
                                <option value="199" >Svalbard & Jan Mayen</option>
                            
                                
                                <option value="237" >Swaziland</option>
                            
                                
                                <option value="200" >Sweden</option>
                            
                                
                                <option value="203" >Switzerland</option>
                            
                                
                                <option value="202" >Syria</option>
                            
                                
                                <option value="216" >Taiwan</option>
                            
                                
                                <option value="206" >Tajikistan</option>
                            
                                
                                <option value="218" >Tanzania</option>
                            
                                
                                <option value="205" >Thailand</option>
                            
                                
                                <option value="210" >Togo</option>
                            
                                
                                <option value="208" >Tokelau</option>
                            
                                
                                <option value="209" >Tonga</option>
                            
                                
                                <option value="204" >Trinidad and Tobago</option>
                            
                                
                                <option value="212" >Tunisia</option>
                            
                                
                                <option value="214" >Turkey</option>
                            
                                
                                <option value="217" >Turkmenistan</option>
                            
                                
                                <option value="207" >Turks & Caicos Is.</option>
                            
                                
                                <option value="215" >Tuvalu</option>
                            
                                
                                <option value="219" >Uganda</option>
                            
                                
                                <option value="222" >Ukraine</option>
                            
                                
                                <option value="3" >United Arab Emirates</option>
                            
                                
                                <option value="220" >United Kingdom</option>
                            
                                
                                <option value="223" >United States</option>
                            
                                
                                <option value="225" >Uruguay</option>
                            
                                
                                <option value="221" >US Minor Outlying Is</option>
                            
                                
                                <option value="226" >Uzbekistan</option>
                            
                                
                                <option value="156" >Vanuatu</option>
                            
                                
                                <option value="228" >Venezuela</option>
                            
                                
                                <option value="230" >Vietnam</option>
                            
                                
                                <option value="229" >Virgin Islands (British)</option>
                            
                                
                                <option value="231" >Virgin Islands (US)</option>
                            
                                
                                <option value="234" >Wallis and Futuna</option>
                            
                                
                                <option value="235" >Western Sahara</option>
                            
                                
                                <option value="239" >Yemen</option>
                            
                                
                                <option value="240" >Zambia</option>
                            
                                
                                <option value="241" >Zimbabwe</option>                    
</select></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Languages Spoken:</td>
    <td><select name="languagesspoken" id="languagesspoken"> 
    <option value="" >Select Your Languages Spoken</option>
   	<option value="1419" >Afrikaans</option>
                            
									
                                
                                
                                <option value="1420" >Albanian</option>
                            
									
                                
                                
                                <option value="1421" >Amharic</option>
                            
									
                                
                                
                                <option value="1422" >Arabic</option>
                            
									
                                
                                
                                <option value="1423" >Armenian</option>
                            
									
                                
                                
                                <option value="1424" >Assyrian</option>
                            
									
                                
                                
                                <option value="1425" >Azerbaijani</option>
                            
									
                                
                                
                                <option value="1426" >Bahasa Malay / Indonesian</option>
                            
									
                                
                                
                                <option value="1427" >Belorussian</option>
                            
									
                                
                                
                                <option value="932" >Bengali</option>
                            
									
                                
                                
                                <option value="2445" >Berber</option>
                            
									
                                
                                
                                <option value="1429" >Bulgarian</option>
                            
									
                                
                                
                                <option value="1430" >Burmese</option>
                            
									
                                
                                
                                <option value="1431" >Cebuano</option>
                            
									
                                
                                
                                <option value="1432" >Chinese (Cantonese)</option>
                            
									
                                
                                
                                <option value="1433" >Chinese (Mandarin)</option>
                            
									
                                
                                
                                <option value="1434" >Creole</option>
                            
									
                                
                                
                                <option value="1435" >Croatian</option>
                            
									
                                
                                
                                <option value="1436" >Czech</option>
                            
									
                                
                                
                                <option value="1437" >Danish</option>
                            
									
                                
                                
                                <option value="1438" >Dutch</option>
                            
									
                                
                                
                                <option value="938" >English</option>
                            
									
                                
                                
                                <option value="1440" >Eritrean</option>
                            
									
                                
                                
                                <option value="1441" >Estonian</option>
                            
									
                                
                                
                                <option value="1442" >Farsi</option>
                            
									
                                
                                
                                <option value="1443" >Finnish</option>
                            
									
                                
                                
                                <option value="939" >French</option>
                            
									
                                
                                
                                <option value="1445" >Georgian</option>
                            
									
                                
                                
                                <option value="1446" >German</option>
                            
									
                                
                                
                                <option value="1447" >Greek</option>
                            
									
                                
                                
                                <option value="942" >Gujarati</option>
                            
									
                                
                                
                                <option value="1449" >Hausa</option>
                            
									
                                
                                
                                <option value="1450" >Hebrew</option>
                            
									
                                
                                
                                <option value="945" >Hindi</option>
                            
									
                                
                                
                                <option value="1452" >Hungarian</option>
                            
									
                                
                                
                                <option value="1453" >Icelandic</option>
                            
									
                                
                                
                                <option value="1454" >Iilocano</option>
                            
									
                                
                                
                                <option value="1455" >Inuktitut</option>
                            
									
                                
                                
                                <option value="1456" >Italian</option>
                            
									
                                
                                
                                <option value="1457" >Japanese</option>
                            
									
                                
                                
                                <option value="1458" >Kazakh</option>
                            
									
                                
                                
                                <option value="1459" >Khmer</option>
                            
									
                                
                                
                                <option value="1460" >Kirgiz</option>
                            
									
                                
                                
                                <option value="1461" >Korean</option>
                            
									
                                
                                
                                <option value="1462" >Kurdish</option>
                            
									
                                
                                
                                <option value="954" >Kutchi</option>
                            
									
                                
                                
                                <option value="1463" >Kyrgiz</option>
                            
									
                                
                                
                                <option value="1464" >Laotian</option>
                            
									
                                
                                
                                <option value="1465" >Latvian</option>
                            
									
                                
                                
                                <option value="1466" >Lithuanian</option>
                            
									
                                
                                
                                <option value="1467" >Macedonian</option>
                            
									
                                
                                
                                <option value="1468" >Malagasy</option>
                            
									
                                
                                
                                <option value="959" >Malayalam</option>
                            
									
                                
                                
                                <option value="1470" >Maldivian</option>
                            
									
                                
                                
                                <option value="1471" >Maltese</option>
                            
									
                                
                                
                                <option value="961" >Marathi</option>
                            
									
                                
                                
                                <option value="1473" >Mongolian</option>
                            
									
                                
                                
                                <option value="966" >Nepali</option>
                            
									
                                
                                
                                <option value="1475" >Norwegian</option>
                            
									
                                
                                
                                <option value="1476" >Pashto</option>
                            
									
                                
                                
                                <option value="1477" >Persian</option>
                            
									
                                
                                
                                <option value="1478" >Pidgin</option>
                            
									
                                
                                
                                <option value="1479" >Polish</option>
                            
									
                                
                                
                                <option value="1480" >Portuguese</option>
                            
									
                                
                                
                                <option value="1481" >Quechua</option>
                            
									
                                
                                
                                <option value="1482" >Romanian</option>
                            
									
                                
                                
                                <option value="1483" >Russian</option>
                            
									
                                
                                
                                <option value="1484" >Serbian</option>
                            
									
                                
                                
                                <option value="974" >Sindhi</option>
                            
									
                                
                                
                                <option value="1486" >Sinhala</option>
                            
									
                                
                                
                                <option value="1487" >Slovak</option>
                            
									
                                
                                
                                <option value="1488" >Slovene</option>
                            
									
                                
                                
                                <option value="1489" >Somali</option>
                            
									
                                
                                
                                <option value="1490" >Spanish</option>
                            
									
                                
                                
                                <option value="1491" >Swahili</option>
                            
									
                                
                                
                                <option value="1492" >Swedish</option>
                            
									
                                
                                
                                <option value="1493" >Tagalog</option>
                            
									
                                
                                
                                <option value="976" >Tamil</option>
                            
									
                                
                                
                                <option value="977" >Telugu</option>
                            
									
                                
                                
                                <option value="1496" >Thai</option>
                            
									
                                
                                
                                <option value="1497" >Tibetan</option>
                            
									
                                
                                
                                <option value="1498" >Tongan</option>
                            
									
                                
                                
                                <option value="1499" >Turkish</option>
                            
									
                                
                                
                                <option value="1500" >Turkmen</option>
                            
									
                                
                                
                                <option value="1501" >Ugaritic</option>
                            
									
                                
                                
                                <option value="1502" >Ukrainian</option>
                            
									
                                
                                
                                <option value="980" >Urdu</option>
                            
									
                                
                                
                                <option value="1504" >Uzbek</option>
                            
									
                                
                                
                                <option value="1505" >Vietnamese</option>
                            
									
                                
                                
                                <option value="1506" >Welsh</option>
                            
									
                                
                                
                                <option value="252" >Other</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ambition:</td>
    <td><input type="text" name="ambition" id="ambition" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Hobbies:</td>
    <td><input type="text" name="hobbies" id="hobbies" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Dreams:</td>
    <td><input type="text" name="dreams" id="dreams" /></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Get Married:</td>
    <td><select name="getmarried" id="getmarried"> 
    <option value="" >Select Get Married</option>
   	<option value="822" >After 3 months</option>
    <option value="823" >After 6 months</option>
    <option value="824" >After 1 year</option>
	<option value="825" >After 2 years</option>
	<option value="826" >Other</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>More Children:</td>
    <td><select name="morechildren" id="morechildren"> 
    <option value="" >Select Want More Children</option>
   	<option value="288" >Yes</option>
    <option value="290" >Not Sure</option>
    <option value="289" >No</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Dowry:</td>
    <td><select name="dowry" id="dowry"> 
    <option value="" >Select Dowry</option>
   	<option value="822" >Never interested</option>
   	<option value="823" >interested</option>
    <option value="824" >prefer not to say</option>                    
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>CNIC:</td>
    <td><input type="text" name="cnic" id="cnic" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Family Image:</td>
    <td><input type="file" name="family_image" id="family_image" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="Submit" />&nbsp;&nbsp;&nbsp;<input type="reset" name="rest" id="rest" value="Reset" /></td>
  </tr>
</table>
</form>

<?php

}  // Else ends here

?>
</body>
</html>