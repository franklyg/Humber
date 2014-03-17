<?php

$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
//$facebook_url = trim($_REQUEST['facebook_url']);
$facebook_url = str_replace( "facebook.org", "facebook.com" , trim($_REQUEST['facebook_url']));
$position = strpos($facebook_url, "http://");
if ($position === false) {
    $facebook_url = "http://" . $facebook_url;
  }
$twitter_handle = trim($_REQUEST['twitter_handle']);
$twitter_url = "http://www.twitter.com/";
$pstion = strpos($twitter_handle, "@");
if ($pstion === false){
		$twitter_url = $twitter_url.$twitter_handle;
		} else {
				//do some stuff in there is an "@" symbol present 
				$twitter_url = $twitter_url . substr($twitter_handle, $pstion + 1);
			}
?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<p>Here's a record of what information you submitted:</p>
<p>
  Name: <?php echo $first_name ." ". $last_name ; ?><br />
  E-Mail Address: <?php echo $email;  ?><br />
 <a href="<?php echo $facebook_url; ?>">Your Facebook page</a><br /> 
 <a href="<?php echo $twitter_url; ?>">Check out your Twitter feed</a><br />
</p>

</body>
</html>
-->
<html>
<head>
</head>
<body>

<p>Here's a record of everything in the $_REQUEST array:</p>

<?php
  foreach($_REQUEST as $key => $value) {
    echo "<p>For " . $key . ", the value is '" . $value . "'.</p>";
  }
?>

</body>
</html>