<?php

   include( 'includes/connect.php' );
   include( 'includes/functions.php' );

$query = 'SELECT blog_image
              FROM blog
              WHERE blog_id = "'.$_GET['blog_id'].'"
              LIMIT 1';

$result = mysql_query( $query, $connect ) 
   or die( mysql_error() );

list( $blog_image ) = mysql_fetch_row( $result );

if( $blog_image != '' and file_exists( 'blog_image/'.$blog_image ) ) {
   unlink( 'blog_images/'.$blog_image );
}

$query = 'DELETE FROM blog
              WHERE blog_id = "'.$_GET['blog_id'].'"
              LIMIT 1';

mysql_query( $query, $connect ) or die( mysql_error() );

?>

<?php
	include ('includes/header.php')
 ?>
 <div class="content fc"> 
<h1>Delete Blog</h1>

<ul>
<li><a href="admin_blog.php">Back to Blog List</a></li>
</ul>

<h1>Blog has been deleted</h1>

<a href="admin_blog.php">Return to blog list</a>
</div>