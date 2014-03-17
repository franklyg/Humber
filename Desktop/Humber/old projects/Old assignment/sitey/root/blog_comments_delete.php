<?php

   include( 'includes/connect.php' );
   include( 'includes/functions.php' );


$query = 'DELETE FROM blog_comment
              WHERE comment_id = "'.$_GET['comment_id'].'"
              LIMIT 1';

mysql_query( $query, $connect ) or die( mysql_error() );

?>
<?php 
	include ('includes/header.php');
?>
<div class = "content fc">
<h1>Comment has been deleted</h1>

<a href="admin_blog_comments.php">Return to comment list</a>
</div>
</body>
</html>