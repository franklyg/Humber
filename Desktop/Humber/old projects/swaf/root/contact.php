<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

   $errors = 0;

   if( $_POST['first'] == '' ) {
      if ($errors == 0){ $firstJavaScript = '<script> document.contact.first.focus(); </script>'; }
      $first_error = 'Please enter your first name';
      $errors ++;
   }elseif ( strlen( $_POST['first'] ) < 2) {
      if ($errors == 0){ $firstJavaScript = '<script> document.contact.first.focus(); </script>'; }
      $first_error = 'First name must be at least 2 letters long.';
      $errors ++;
}


//validation code 

if( strlen( $_POST['iPhoneModel'] ) == '' ) {
   if ($errors == 0){ $iPhoneModelJavaScript = '<script> document.contact.iPhoneModel.focus(); </script>'; }
   $iPhoneModel_error = 'Please select your iPhone Model ';
   $errors ++;
}

   echo 'Form has been submitted using POST<br />';
}else{
   echo 'First time here?<br />';
}
?>

<html>
<head>
<title>PHP Contact Form</title>
</head>

<body>
<h3>Contact Form</h3>
<?php
   if( $errors > 0 or $_SERVER["REQUEST_METHOD"] != "POST" ){ $iPhoneModel = array("orig" => "Original (2007)", "3G" => "iPhone 3G (2008)", "3GS" => "iPhone 3GS (2009)", "4" => "iPhone 4 (2010)", "4S" => "iPhone 4S (2011)", "5" => "iPhone 5 (2012)") ;
?>

<form name="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<table>
<tr>
<td width="100">First Name: </td>
<td><input type="text" name="first" value="<?php echo htmlspecialchars($_POST['first']); ?>" maxlength="30" /></td>
<td> <?php echo $first_error; ?><?php echo $firstJavaScript; ?> </td>
</tr>

<tr>
<td width="100">iPhoneModel: </td>
<td><select name="iPhoneModel"><option value="">--</option>

<?php
   foreach($iPhoneModel as $key => $value) {
      if ($_POST[iPhoneModel] == $key){ $selectedText = " selected"; }else{ $selectedText = ""; }
        echo '<option value="' . $key . '"'.$selectedText.'>'. $value .'</option>';
      }
	  
	  
	  //validate my email
	  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
   if ($errors == 0){ $emailJavaScript = '<script> document.contact.email.focus(); </script>'; }
   $email_error = 'Please enter your email email';
   $errors ++;
} 
	  
	  
?>

</select></td>
<td><?php echo $iPhoneModel_error; ?> <?php echo $iPhoneModelJavaScript; ?></td>
</tr>


<tr>
   <td width="100">eMail: </td>
   <td><input name="email" type="text" value="<?php echo htmlspecialchars($_POST['email']); ?>" size="50" maxlength="50" /></td>
   <td><?php echo $email_error; ?><?php echo $emailJavaScript; ?> </td>
</tr>

<tr>
<tr>
<td width="100">Submit: </td>
<td><input name="submit" type="submit" value="Submit" /> </td>
<td>&nbsp;</td>
</tr>


</table>
</form>

<?php
}else {
   echo 'Successfully submitted with no validation errors detected';
}
?>

</body>
</html>