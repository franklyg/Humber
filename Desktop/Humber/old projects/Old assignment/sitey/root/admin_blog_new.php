<?php

include( 'includes/connect.php' );
include( 'includes/functions.php' );

// Validate blog data
if( isset( $_POST['blog_title'] ) )
{
	$errors = 0;
	
	// Validate blog name
	if( $_POST['blog_title'] == '' )
	{
		$errors ++;
		$blog_title_error = 'Blog title is required';
	}
}

?>
<?php
	include ('includes/header.php');
 ?>
 <div class = "content fc">
<h1>Add New Blog</h1>

<ul>
	<li><a href="admin_blog.php">Back to Blog List</a></li>
</ul>

<?php

if( isset( $_POST['blog_title'] ) and $errors == 0 )
{
	
	?>
    <h1>Blog has been added</h1>
    <a href="admin_blog.php">Return to blog list</a>
    <?php
	
	build_date( 'blog_date' );
	
	if( $_FILES['blog_image']['error'] == 0 )
	{
		$image_name = $_FILES['blog_image']['name'];
		move_uploaded_file( $_FILES['blog_image']['tmp_name'], 
			'blog_images/'.$image_name );
	}
	else
	{
		$image_name = '';
	}
	
	$query = 'INSERT INTO blog (
		blog_title,
		blog_content,
		blog_author,
		blog_date,
		blog_image,
		blog_status
		) VALUES (
		"'.$_POST['blog_title'].'",
		"'.$_POST['blog_content'].'",
		"'.$_POST['blog_author'].'",
		"'.$_POST['blog_date'].'",
		"'.$image_name.'",
		"'.$_POST['blog_status'].'"
		)';
	mysql_query( $query, $connect ) or die( mysql_error() );
	
}
else
{
	
	?>
	
	<form name="new_blog" action="admin_blog_new.php" method="post" enctype="multipart/form-data">
	
		Blog: 
		<input type="text" name="blog_title" id="blog_title"
			value="<?php echo $_POST['blog_title']; ?>" />
		<?php echo $blog_title_error; ?>
		<br />
		Content:
		<textarea name="blog_content" id="blog_content" rows="10"
			cols="50"><?php echo $_POST['blog_content']; ?></textarea>
		<br />    
		Blog Author:
		<input type="text" name="blog_author" id="blog_author"
			value="<?php echo $_POST['blog_author']; ?>" />
		<br />
		Date:
		<?php echo date_select( 'blog_date' ); ?>
		<br />
		Status:
		<?php
		
		$options = array( 
			'active' => 'Active', 
			'inactive' => 'Inactive' );
		echo list_select( 'blog_status', $options );
		
		?>
		<br />
        Image:
        <input type="file" name="blog_image" id="blog_image" />
        <br />
		<input type="submit" value="Add Blog" />   
	
	</form>
	
	<?php

}


?>
</div>
</body>
</html>