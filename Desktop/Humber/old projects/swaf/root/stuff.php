

<?php echo $comments_error; ?>

Updated code below.

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$errors = 0;

if( $_POST['first'] == '' ) {
if ($errors == 0){ $firstJavaScript = '<script> document.contact.first.focus(); </script>'; }
$first_error = 'Please enter your first name';
$errors ++;
}

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Contact Form</title>
</head>

<body>
<h1>Contact Form</h1>

<?php

if( $errors > 0 or $_SERVER["REQUEST_METHOD"] != "POST" ){

?>

<form name="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

<table>
<tr>
<td width="100">First Name: </td>
<td><input type="text" name="first" value="" size="30" /></td>
<td><?php echo $comments_error; ?></td>
</tr>
<tr>
<td width="100">Submit: </td>
<td><input name="submit" type="submit" value="Submit" /> </td>
<td><?php echo $first_error; ?></td>
</tr>
</table>

</form>

<?php

} else {
echo 'no validation errors detected';
echo 'thank you for completing the form';
}

?>

</body>
</html>
