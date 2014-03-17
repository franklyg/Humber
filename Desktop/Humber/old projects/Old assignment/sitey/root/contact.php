<?php 
	
	$errors = 0;
	if(isset($_POST['submit'])){
			////////////////////////////////////////////////////////////////////////////////////
			///////////////////////firstname validation/////////////////////////////////////////
			///////////////////////////////////////////////////////////////////////////////////
			$first_name = $POST['fname'];
			
			if(!preg_match("#^[-A-Za-z' ]*$#", $_POST['fname'])){
				$error['fname'] = "<span class = \"d\"> Incorrect First Name</span>";
   			$errors ++;
				}else
				{
					$error['fname'] = "";
					}
				
				if(strlen($_POST['fname'])<2){ 
					$first_name = $POST['fname'];
					$error['fname']  = "<span class = \"d\"> You didn't fill out your first name.</span>";
					}
				 if (strlen($_POST['fname'])>20) {
					$error['fname']  = "<span class = \"d\"> Too long.</span>";
					}
			/////////////////////////////////////////////////////////////////////////////	
			/////////////////////////////lastname validation/////////////////////////////
			/////////////////////////////////////////////////////////////////////////////
			$first_name = $POST['lname'];
			
			if(!preg_match("#^[-A-Za-z' ]*$#", $_POST['lname'])){
				$error['lname'] = "<span class = \"d\"> Incorrect First Name</span>";
   				$errors ++;
				}else
				{
					$error['lname'] = "";
					}

			if(strlen($_POST['lname'])<2){
				$last_name = $_POST["lname"];
				
				$error['lname'] = "<span class = \"d\"> You forgot your Last Name</span>";
					}
				 if (strlen($_POST['lname'])>20) {
					$error['lname'] = "<span class = \"d\"> Too long </span>";
					}
			//////////////////////////////////////////////////////////////////
			/////////////////////////////////////email////////////////////////
			//////////////////////////////////////////////////////////////////
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
				
			
			//////////////////////////////////////////////////////////////////////////////////
			/////////////////////////////address Code//////////////////////////////////////////
			////////////////////////////////////////////////////////////////////////////////
			if(strlen($_POST['aOne'])<3){
				$add_one = $_POST["aOne"];
				
					$error['aOne'] = "<span class = \"d\"> You forgot your Address</span>";
					}
				else if (strlen($POST['aOne'])>50) {
					$error['aOne'] = "<span class = \"d\"> Too long</span>";
					}
			
			
			
			
			
			///////////////////////////////////////////////////////////////////////////////////////////
			////////////////////////////////////city code/////////////////////////////////////////////
			/////////////////////////////////////////////////////////////////////////////////////////
			 if (strlen($_POST['city'])<3){
				$city_name = $_POST["city"]; 
				 
				$error['city'] = "<span class = \"d\"> You forgot your City</span>";
			 }elseif(strlen($_POST['city'])<20) {
				 	$error['lame'] = "<span class = \"d\"> Too long</span>";
				 }
			 
			
			
				
				
				
				////////////////////////////////////////////////////////////////////////
			//////////////////////////////postal code, code	////////////////////////////////
			//////////////////////////////////////////////////////////////////////////////
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
			////////////////////////////////////////////////////
			/////////////////////////phone code////////////////
			//////////////////////////////////////////////////
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
				
			
				
		
	
		
		
			/////////////////////////////////////////////////////////////////////////////////////
			//////////////////////////////////////////comments////////////////////////////////////
			/////////////////////////////////////////////////////////////////////////////////////
			
			if(strlen($_POST['comments'])<10){
				$comments = $_POST["comments"];
				$error['comments'] = "<span  class = \"d\">Finish Your Comment</span>";}
			
				else{
					$error['comments'] = "<span class = \"d\"></span>";
					}
					
					
///////////////////////////////////////////////////////////////////////////					
/////////////////////email tingz////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////


$to = $_POST['email'];	

$headers = 'Your Results:';
$subject =' 
First Name :'.$_POST['fname'].' '.$_POST['lname'].'
Email:'.$_POST['email'].'
Address One:'.$_POST['aOne'].'
Address Two :'.$_POST['aTwo'].'
City :'.$_POST['city'].'
Province :'.$_POST['province'].'
Postal Code :'.$_POST['posCode'].'
Phone Number :'.$_POST['phone'].' Ext: '.$_POST['ext'].'

Comments :'.$_POST['comments'].'
';
//$subject = 'Your Form Results';

 mail ($to, $headers, $subject);
 
		
			


}





?>

<?php
	include ('includes/header.php')
 ?>
 <div class = "content fc">
<h1>Mailing List</h1>

<h2>Sign up here</h2>
<div id = "outwrapper">
<?php echo $finalMsg; ?>
   
		<div id = "formLand">
		
		<form action="/mario/contact.php" method = "post">
        
			<ul>
				<li>
					<label for = "fname" >First Name<?php echo $error['fname']; ?> </label>
					<input type = "text" placeholder = "First Name" id = "fname" name = "fname" value = "<?php echo $_POST{'fname'} ?>" maxlength = "20" />
				</li><!-- first name -->
				<li>
					<label for = "lname">Last Name<?php echo $error['lname'];?></label>
					<input type = "text" placeholder = "Last Name" id = "lname" name = "lname" value= "<?php echo $_POST{'lname'} ?>" maxlength = "20" />
				</li><!--last name-->
				<li>
					<label for = "email">Email<?php echo $error['email'];?></label>
					<input type = "text" placeholder = "Email" id = "email" name = "email" value = "<?php echo $_POST{'email'} ?>" maxlength="50" />
				</li><!-- email -->
				<li>
					<label for = "aOne">Address One<?php echo $error['aOne'];?></label>
					<input type = "text" placeholder = "Address One" id = "aOne" name = "aOne" value = "<?php echo $_POST{'aOne'}?>" maxlength="50" />
				</li><!-- address one -->
				<li>
					<label for = "aTwo">Address Two</label>
					<input type = "text" placeholder = "Address Two" id = "aTwo" name = "aTwo" value = "<?php echo $_POST{'aTwo'} ?>" maxlength = "50"/>

				</li><!-- address two-->
				<li>
                	<label for = "city">City<?php echo $error['city'];?></label>
                    <input type ="text" placeholder = "City" id = "city" name = "city" value = "<?php echo $_POST{'city'} ?>" maxlength = "50"/>
                </li><!-- city -->
                <li>
					<label for = "province">Province<?php echo $error['province'];?></label>
					<select  name = "province" id = "province" >
						<option value = "null">Select a Province:</option>
						
						<?php
						
				////////////////////////////////////////////////////////////////
				///////////////////////Province////////////////////////////////
				///////////////////////////////////////////////////////////////		
		 		$prov_name = $_POST["province"];
				if ( $prov_name == 'null'){
					
					$error['province'] = "<span class = \"d\"> Please select a province</span>";	
					}
			
			$prov_name = array( 'ON' =>"Ontario" , "MA" => "Manitoba", "SA" => "Saskatchewan", "BC" => 
			"British Columbia" ,"QU" => "Quebec", "NU" => "Nunavut", "NT" => "Northwest Terretories", "YU" => "Yukon", "NS" => 	   			"Nova Scotia" , "NB" => "New Brunswick" , "NL" => "Newfoundland and Labrador" ,"PEI" => "Prince Edward Island" ) ;
						
   					foreach($prov_name as $key => $value) {
					  if ($_POST['province'] == $key){ $selectedText = "selected"; }
					  	else{ 
						$selectedText = ""; }
						echo '<option value="' . $key . '"'.$selectedText.'>'. $value .'</option>';
					  }
					  
					  
				
					?>
                        
					</select>
				</li><!-- province -->
                <li>
					<label for = "posCode">Postal Code<?php echo $error['posCode'];?></label>
					<input type = "text" placeholder = "Postal Code" id = "posCode" name = "posCode" value = "<?php echo $_POST{'posCode'} ?>" maxlength = "7"/>
				</li><!-- postal code -->
				<li>
					<label for = "phone">Phone Number<?php echo $error['phone'];?></label>
					<input type = "text" placeholder = "Phone Number" id = "phone" name = "phone" value = "<?php echo $_POST{'phone'} ?>" maxlength = "20"/>
				</li><!-- phone number -->
                <li>
                	<label for = "ext">Exntension<?php echo $error['ext'];?></label>
                    <input type="text" placeholder="Extension" id = "ext" name = "ext" value = "<?php echo $_POST{'ext'} ?>" />
                </li><!-- extension -->
                <li>
                	<label>Comments<?php echo $error['comments']; ?></label>
                    <textarea placeholder="Leave Comments" id = "comments" name= "comments"  ><?php echo $_POST{'comments'} ?></textarea>
                </li>
				<li>
                	<input type="submit" value = "Submit" name = "submit" id = "submit"/>
                </li>
			</ul>	
			
		</form>
		
		</div>	
	</div>
  </div> 


</body>
</html>