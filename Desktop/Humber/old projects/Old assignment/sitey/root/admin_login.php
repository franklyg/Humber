<?php

include( 'includes/connect.php' );

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$query = 'SELECT user_first,user_last,user_id,user_email
              FROM user
              WHERE user_email = "'.$_POST['user_email'].'"
              AND user_password = "'.$_POST['user_password'].'"
              LIMIT 1';
			  
			  $result = mysql_query( $query );
			  
			  if(!$result){
 			  	die("<p>Error in query: " . mysql_error() . "</p>" );
			   }
				
				//echo '<br />Rows: '.mysql_num_rows( $result );
if( mysql_num_rows( $result ) == 1 ) {
   list( $_SESSION['user_first'],
      $_SESSION['user_last'],
      $_SESSION['user_id'],
      $_SESSION['user_email'] ) = mysql_fetch_row( $result );
   header( 'location: admin.php' );
   die();
} else {
   $login_error = 'Incorrect login and/or password';
}

}


?>

<?php 
	include('includes/header.php');
?>



<div class="content fc">   
   <br />
<?php echo $login_error; ?>
   <br />

<form name="login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Login: <input type="text" name="user_email" id="user_email" />
<br />
Password: <input type="password" name="user_password" id="user_password" />
<br />
<input type="submit" value="Login" />
</form>
</div>


</body>
</html>