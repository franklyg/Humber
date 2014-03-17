<?php 
	$errors = 0;
	if(isset($_POST['submit'])){
			//firstname validation
			if(strlen($_POST['fname'])<2){ 
					$first_name = $POST['fname'];
					$error['fname']  = "<span class = \"d\"> You didn't fill out your first name.</span>";
					}
				 if (strlen($_POST['fname'])>20) {
					$error['fname']  = "<span class = \"d\"> Too long.</span>";
					}
				
			//lastname validation
			if(strlen($_POST['lname'])<2){
				$last_name = $_POST["lname"];
				
				$error['lname'] = "<span class = \"d\"> You forgot your Last Name</span>";
					}
				 if (strlen($_POST['lname'])>20) {
					$error['lname'] = "<span class = \"d\"> Too long </span>";
					}
			
			//email
			if(strlen($_POST['email'])>1){
				$email = $_POST['email'];
				if (filter_var($email, FILTER_VALIDATE_EMAIL)){
					$email = $email;
					}
			
					else {
						$error['email'] = "<span class = \"d\"> Your email is invalid </span>";
						}
					}
					else {
						$error['email'] = "<span class = \"d\"> You didn't type in your email </span>";
						}	
				
			
			
			//adress Code
			if(strlen($_POST['aOne'])<3){
				$add_one = $_POST["aOne"];
				
					$error['aOne'] = "<span class = \"d\"> You forgot your Address</span>";
					}
				else if (strlen($POST['aOne'])>50) {
					$error['aOne'] = "<span class = \"d\"> Too long</span>";
					}
			
			
			
			
			
			
			//city code
			
			 if (strlen($_POST['city'])<3){
				$city_name = $_POST["city"]; 
				 
				$error['city'] = "<span class = \"d\"> You forgot your City</span>";
			 }else if(strlen($_POST['city'])<20) {
				 	$error['lame'] = "<span class = \"d\"> Too long</span>";
				 }
			 
			
			//Province code 
			$prov_name = $_POST["province"];
			if ( $prov_name == 'null'){
				$error['province'] = "<span class = \"d\"> Please select a province</span>";	
				}else {
					$error['province'] = "";
					} 
				
				
				
				
			//postal code, code	
			$postal_name = $_POST["posCode"];
			
			if( !preg_match("/^[A-Za-z]{1}[0-9]{1}[A-Za-z]{1}[ ]{0,1}[0-9]{1}[A-Za-z]{1}[0-9]{1}$/s", $_POST['posCode'] )) {
   
   			$error['posCode'] = "<span class = \"d\"> Please enter your postal code (X2X 2X2)</span>";
   			$errors ++;
			}
			else{
				$error['posCode'] = "";
				}
			if (strlen($phone_num)<1){
					$error['phone'] = "<span class = \"d\"> You didn't type in your phone number</span>";
					}
			
			//phone code
			$phone_num = $_POST["phone"];
			
			if (!preg_match("/^([1]-)?[()]?[0-9]{3}[ ]?-?[0-9]{3}[ ]?-?[0-9]{4}$/i", $_POST['phone'])){
				$error['phone'] = "<span class = \"d\"> Incorect phone number</span>";
   				$errors ++;
				}
				else{
				$error['phone'] = "";
				}
				if (strlen($phone_num)<1){
					$error['phone'] = "<span class = \"d\"> You didn't type in your phone number</span>";
					}
				
			
				
		


			//comments
			
			if(!strlen($_POST['comments'])>1){
				$comments = $_POST["comments"];
				$error['comments'] = "<span  class = \"d\">Please leave a comment</span>";}
			
				}else {
					$error['comments'] = "<span class = \"d\"></span>";
					}
//email tingz
$to = $_POST['email'];	

$headers = 'Your Results:\n
			First Name :'.$_POST['fname'].'

';
//$subject = 'Your Form Results';
//$headers = 'Your Results';
 mail ($to, $message, $headers) ;


?>

<html>
<head>
<style>
/*.d {color: #09C; margin-bottom: 20px; font-size: 15px;}*/
.d {color: #F00; }
body {background: #CCC;}
#outwrapper 
{ font-family: Arial, Helvetica, sans-serif; 	
  position: relative;
  width: 100%;
  background: #fff;
  color: rgba(0,0,0, .8);
  text-shadow: 0 1px 0 #fff;
  line-height: 1.5;
  margin: 60px auto;
  min-height: 500px;
}
label { display: block; }
li {list-style-type: none;}
input {padding: 3px; width: 250px;}

#outwrapper:before, #outwrapper:after 
{
  z-index: -1; 
  position: absolute; 
  content: "";
  bottom: 15px;
  left: 10px;
  width: 50%; 
  top: 80%;
  max-width:300px;
  background: rgba(0, 0, 0, 0.7); 
  -webkit-box-shadow: 0 15px 10px rgba(0,0,0, 0.7);   
  -moz-box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
  box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
  -webkit-transform: rotate(-3deg);    
  -moz-transform: rotate(-3deg);   
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg);
}

#outwrapper:after 
{
  -webkit-transform: rotate(3deg);
  -moz-transform: rotate(3deg);
  -o-transform: rotate(3deg);
  -ms-transform: rotate(3deg);
  transform: rotate(3deg);
  right: 10px;
  left: auto;
}
#wrapper { width: 960px; margin: 0 auto; padding: 10px;}
placeholder { color: red;}
textarea { max-height:250px; height: 250px; max-width: 650px; width: 650px;}
#love { background: url("images/love.png"); width: 610px; height: 368px;}
</style>
</head>
<body>
<div id = "love"></div>
<div id = "outwrapper">

    <div id = "wrapper">
		<div id = "formLand">
		
		<form action="<?php echo $PHP_SELF;?>" method = "post">
        
			<ul>
				<li>
					<label for = "fname">First Name<?php echo $error['fname']; ?> </label>
					<input type = "text" placeholder = "First Name" name = "fname" value = "<?php echo $_POST{'fname'} ?>" maxlength = "20" />
				</li><!-- first name -->
				<li>
					<label for = "lname">Last Name<?php echo $error['lname'];?></label>
					<input type = "text" placeholder = "Last Name" name = "lname" value= "<?php echo $_POST{'lname'} ?>" maxlength = "20" />
				</li><!--last name-->
				<li>
					<label for = "email">Email<?php echo $error['email'];?></label>
					<input type = "text" placeholder = "Email" name = "email" value = "<?php echo $_POST{'email'} ?>" maxlength="50" />
				</li><!-- email -->
				<li>
					<label for = "aOne">Address One<?php echo $error['aOne'];?></label>
					<input type = "text" placeholder = "Address One" name = "aOne" value = "<?php echo $_POST{'aOne'}?>" maxlength="50" />
				</li><!-- address one -->
				<li>
					<label for = "aTwo">Address Two</label>
					<input type = "text" placeholder = "Address Two" name = "aTwo" value = "<?php echo $_POST{'aTwo'} ?>" maxlength = "50"/>

				</li><!-- address two-->
				<li>
                	<label for = "city">City<?php echo $error['city'];?></label>
                    <input type ="text" placeholder = "City" name = "city" value = "<?php echo $_POST{'city'} ?>" maxlength = "50"/>
                </li><!-- city -->
                <li>
					<label for = "province">Province<?php echo $error['province'];?></label>
					<select  name = "province" >
						<option value = "null">Select a Province:</option>
						
						<?php
						/*
						 $prov_name = $_POST["province"];
			if ( $prov_name == 'null'){
				$error['province'] = "<span class = \"d\"> Please select a province</span>";	
				}
				*/
			
			$prov_name = array( "orig" => "Original (2007)", "3G" => "iPhone 3G (2008)", "3GS" => "iPhone 3GS (2009)", 			         "4" => "iPhone 4 (2010)", "4S" => "iPhone 4S (2011)", "5" => "iPhone 5 (2012)") ;
						
   					foreach($prov_name as $key => $value) {
					  if ($_POST['province'] == $key){ $selectedText = "selected"; }
					  	else{ $selectedText = ""; }
						echo '<option value="' . $key . '"'.$selectedText.'>'. $value .'</option>';
					  }
					  
				
					?>
                        
					</select>
				</li><!-- province -->
                <li>
					<label for = "posCode">Postal Code<?php echo $error['posCode'];?></label>
					<input type = "text" placeholder = "Postal Code" name = "posCode" value = "<?php echo $_POST{'posCode'} ?>" maxlength = "7"/>
				</li><!-- postal code -->
				<li>
					<label for = "phone">Phone Number<?php echo $error['phone'];?></label>
					<input type = "text" placeholder = "Phone Number" name = "phone" value = "<?php echo $_POST{'phone'} ?>" maxlength = "20"/>
				</li><!-- phone number -->
                <li>
                	<label for = "ext">Exntension<?php echo $error['ext'];?></label>
                    <input type="text" placeholder="Extension" name = "ext" value = "<?php echo $_POST{'ext'} ?>" />
                </li><!-- extension -->
                <li>
                	<label>Comments<?php echo $error['comments']; ?></label>
                    <textarea placeholder="Leave Comments" name= "comments"  value = "<?php echo $_POST{'comments'} ?>"></textarea>
                </li>
				<li>
                	<input type="submit" value = "Submit" name = "submit"/>
                </li>
			</ul>	
			
		</form>
		
		</div>	
	</div>
  </div> 


</body>
</html>