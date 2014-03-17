<?php

   include( 'includes/connect.php' );
   include( 'includes/functions.php' );
   
   // Validate blog data
if( isset( $_POST['comment_author'] ) )
{
	$errors = 0;
	
	// Validate blog name
	if( $_POST['comment_author'] == '' )
	{
		$errors ++;
		$blog_title_error = 'Name is required';
	}
}

?>


<?php
	include ('includes/header.php')
 ?>
<div class = "content fc">


<h1>Add New Comment</h1>

<ul>
	<li><a href="admin_blog_comments.php">Back to Blog List</a></li>
</ul>

<?php

if( isset( $_POST['comment_author'] ) and $errors == 0 ){

$query = 'INSERT INTO blog_comment(
		comment_content,
		comment_author,
		comment_blog_id
	) 
	VALUES (
		"'.$_POST['comment_content'].'",
		"'.$_POST['comment_author'].'",
		"'.$_GET['blog_id'].'"
		
		)';

mysql_query( $query, $connect )or die( mysql_error() );
	
	}
	else
{ 

?>
	
	
    <form name="new_comment" action="blog_comments_new.php?blog_id=<?php echo $_GET['blog_id']; ?>" method="post">
	
		<h1>Name:</h1> 
		<input type="text" name="comment_author" id="comment_author"
			value="<?php echo $_POST['comment_author']; ?>" />
		<?php echo $blog_title_error; ?>
		<br />
		<h1>Comment:</h1>
		<textarea name="comment_content" id="comment_content" ><?php echo $_POST['comment_content']; ?></textarea>
		<br />   
        Date:
		<?php echo date_select( 'blog_date' ); ?>
		
		<input type="submit" value="Add Comment" />   
	
	</form>
    <?php

}


?>
    
    <h1>Blog has been added</h1>
    <a href="admin_blog_comments.php">Return to comment list</a>
</div>
</body>
</html>