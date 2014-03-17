<?php

//include files
   include( 'includes/connect.php' );
   include( 'includes/functions.php' );

//check to see if valid session is created
   secure();

?>


<?php 
	include( 'includes/header.php' );
?>


<div class = "content fc">

<h2>Admin Menu</h2>
<ul>
<li><a href="admin.php">Admin Home</a></li>
<li><a href="admin_blog.php">Manage Blog</a></li>
<li><a href="admin_logout.php">Logout</a></li>
</ul>



<?php
   echo '<p>You are logged in as '.$_SESSION['user_first'].' '.$_SESSION['user_last'].'</p>';
?>
</div>
</body>
</html>