<?php

   include( 'includes/connect.php' );
   include( 'includes/functions.php' );

?>
<?php 
	include('includes/header.php');
?>

<div class="content fc">
<h1>Manage Blog</h1>

<ul>
<li><a href="admin.php">Back</a></li>
<li><a href="admin_blog_new.php">New Blog</a></li>
</ul>

<?php

$query = 'SELECT * 
             FROM blog 
             ORDER BY blog_date DESC';

$result = mysql_query( $query )
   or die( mysql_error() );

?>
<body>

<table cellpadding="10" cellspacing="0" border="1">
<tr>
   <th>ID</th>
   <th>Image</th>
   <th>Title</th>
   <th>Date</th>
   <th>Status</th>
   <th>Options</th>
</tr>
<?php

for( $i = 0; $i < mysql_num_rows( $result ); $i ++ ){

   list( $blog_id, $blog_title, $blog_content, $blog_author, $blog_date, $blog_image, $blog_status ) = mysql_fetch_row( $result );

echo '<tr>
<td>'.$blog_id.'</td>
<td>';

//check for image
if( $blog_image and file_exists( 'blog_images/'.$blog_image ) ) {
   echo '<img src="blog_images/'.$blog_image.'" alt="" width="100" height="100" />';
} else {
   echo '&nbsp;';
}

echo '</td>

<td>'.$blog_title.'</td>
<td>'.$blog_date.'</td>
<td>'.$blog_status.'</td>
<td>
<a href="admin_blog_comments.php?blog_id='.$blog_id.'">Comments</a>
<a href="admin_blog_edit.php?blog_id='.$blog_id.'">Edit</a>
<a href="admin_blog_delete.php?blog_id='.$blog_id.'">Delete</a>
</td>
</tr>';
}

?>


</table>





    
</div><!--content-->
</body>
</html>