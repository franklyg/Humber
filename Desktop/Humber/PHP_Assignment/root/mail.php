<?php 
	
	if(!isset($_POST['submit'])){
			//firstname validation
			if(strlen($_REQUEST['fname'])<2){
				$first_name = $_REQUEST['fname'];
				
					echo ("<p>You didn't fill out your first name.</p>");
					}
				else if (strlen($_REQUEST['fname'])>20) {
					echo ("<p>Your name, not a story</p>");
					}
				
			//lastname validation
			if(strlen($_REQUEST['lname'])<2){
				$last_name = $_REQUEST["lname"];
				
					echo ("<p>You didn't fill in you Last Name</p>");
					}
				else if (strlen($_REQUEST['lname'])>20) {
					echo ("<p>Your last name, not a story</p>");
					}
			
			//email
			if(strlen($_REQUEST['email'])<6){
				 $email_name = $_REQUEST["email"];
				 
				 if(filter_var($email_name, FILTER_VALIDATE_EMAIL)) {
					 $email_name = $email_name;
					 }
					echo ("<p>You didn't fill in your email </p>");
					}
				else if (strlen($_REQUEST['email'])>60) {
					echo ("<p>Your email, not a story</p>");
					}
					
			
			//adress Code
			if(strlen($_REQUEST['aOne'])<3){
				$add_one = $_REQUEST["aOne"];
				
					echo ("<p>You didn't fill in your Address</p>");
					}
				else if (strlen($_REQUEST['aOne'])>50) {
					echo ("<p>Your Address, not a story</p>");
					}
			
			
			
			
			
			$add_two = $_REQUEST["aTwo"];
			//city code
			
			 if (strlen($_REQUEST['city'])<3){
				$city_name = $_REQUEST["city"]; 
				 
				 echo ("You didn't fill in your city");
			 }else if(strlen($_REQUEST['city'])<20) {
				 	echo ("<p>Your city, not a story</p>");
				 }
			 
			$prov_name = $_REQUEST["province"];
			//Province code 
			if (empty($_REQUEST['prov_name']))
			{ echo("<p>You forgot a province</p>");}
			else {
				echo("<p>Thank you</p>");
				}
				
				
				
			$postal_name = $_REQUEST["posCode"];
			$phone_num = $_REQUEST["phone"];
			//phone code
			if (strlen($_REQUEST['phone'])<8){
				$phone_num = $_REQUEST["phone"];
				echo ("Invalid phone number");
			} else if (strlen($_REQUEST['phone'])>11){
				echo ("Valid phone number");
				}
				
		
if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
  // $phone is valid
}

			$ext_num = $_REQUEST["ext"];
			
			if(strlen($_REQUEST['comments'])<1){
				$comments = $_REQUEST["comments"];
				$error['comments'] = "<p>Please leave a comment</p>";
				}
	}
$to = "frankilyg@gmail.com";	
$subject = 'Your Form Results';
$headers = 'Your Results';
 mail ($to, $subject, $headers) ;
//if( empty($errors)
?>

<html>
<head>
</head>
<body>
<p>Here's a record of what information you submitted:</p>
<p>
  First Name: <?php echo $_REQUEST['fname']; ?><br />
  Last Name: <?php echo $_REQUEST['lname']; ?><br />
  E-Mail Address: <?php echo $_REQUEST['email']; ?><br />
  Address One: <?php echo $_REQUEST['aOne']; ?><br />
  Address Two: <?php echo $_REQUEST['aTwo']; ?><br />
  City: <?php echo $_REQUEST['city']; ?><br />
  Prov: <?php echo $_REQUEST['province']; ?><br />
  Code: <?php echo $_REQUEST['posCode']; ?><br />
  phone: <?php echo $_REQUEST['phone']; ?><br />
  extension: <?php echo $_REQUEST['ext']; ?><br />
</p>
</body>
</html>