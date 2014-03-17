<?php

include( 'includes/connect.php' );
include( 'includes/functions.php' );

if (isset ($_POST['comment_author'])){
	$errors = 0;
	
	if($_POST['comment_author'] = ''){
		$errors ++;
      $blog_title_error = 'Name is required';
		}
	}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['comment_author']) and $errors == 0){
 ?>

<h1>Edit Blog Comment</h1>


<?php 
	$query = 'UPDATE blog_comment 
			  
			  SET comment_author = "'.$_POST['ccomment_author'].'
			  "comment_content = "'.$_POST['comment_content'].'",
			  WHERE comment_id = "'.$_GET['comment_id'].'"
			  LIMIT 1';
	mysql_query($query, $connect) or
	die(mysql_error() );
	}
	 else 
	 {
			if(!isset($_POST['comment_author'])){
				$query = 'SELECT  comment_author,comment_content, comment_date
						  FROM blog_comment
						  WHERE comment_id = "'.$_GET['comment_id'].'"
						  LIMIT 1';
				$result = mysql_query($query, $connect)
				or die( mysql_error());
				
				 list( $_POST['comment_author'],
      				   $_POST['comment_content'],
      				   $_POST['comment_date']) = mysql_fetch_row( $result );
   
				}
	?>
    
    <ul>
		<li><a href="admin_blog_comments.php?blog_id=<?php echo $_GET['blog_id']; ?>">Back to Blog Comment List</a></li>
	</ul>
    <form name="edit_comment" action="admin_blog_comments_edit.php?comment_id=<?php echo $_GET['comment_id']; ?>&blog_id=<?php echo $_GET['blog_id']; ?>" method = "post">
	
		Author: 
		<input type="text" name="comment_author" id="comment_author"
			value="<?php echo $_POST['comment_author']; ?>" />
		<?php echo $comment_author_error; ?>
		<br />
		Content:
		<textarea name="comment_content" id="comment_content" rows="10"
			cols="50"><?php echo $_POST['comment_content']; ?></textarea>
		<br />    
		Date:
		<?php echo date_select( 'comment_date' ); ?>
		<br />
		<input type="submit" value="Add Comment" />   
	
	</form>


<?php

}

?>


 <h1>Blog has been edited</h1>
<a href="admin_blog_comments.php">Return to blog list</a>

</body>
</html>