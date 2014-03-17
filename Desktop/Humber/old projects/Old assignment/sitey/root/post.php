
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
	include('includes/header.php');
?>


<div class="content fc"> 
<?php
 echo '<div id="comments">';
/*
*********************CONTENT******************
*/	
$query = 'SELECT blog_title, blog_content, blog_author, blog_status, blog_date, blog_image 
             FROM blog 
			 WHERE blog_id = "'.$_GET['blog_id'].'"
			 LIMIT 1';
			 
			 $result = mysql_query( $query )
   			or die( mysql_error() );
/*
*****************LIST************************
*/			
list(  $blog_title, $blog_content, $blog_author, $blog_status, $blog_date, $blog_image) = mysql_fetch_row( $result );
?>
<h2 style="font-size: 35px; "><?php echo $blog_title; ?></h2>

<?php if( $blog_image and file_exists( 'blog_images/'.$blog_image ) ) {
   	echo '<img src="images/'.$blog_image.'" alt="" width="500" height="300" /> <br />';
		} 
 ?>
<p style="font-size: 15px;"><?php echo nl2br ($blog_content); ?></p><br />
<p style  = "margin-top: 25px;" >Posted By: <?php echo $blog_author; ?></p><br />



















<?php
/*
**************COMMENTS*****************
*/


if( isset( $_POST['comment_author'] ) and $errors == 0 ){
$commquery = 'INSERT INTO blog_comment(
		
		comment_author,
		comment_content,
		comment_blog_id
		
		
	) 
	VALUES (
	
		"'.$_POST['comment_author'].'",
		"'.$_POST['comment_content'].'",
		"'.$_GET['blog_id'].'"
		
		
		
		)';

 
 mysql_query( $commquery, $connect )or die( mysql_error() );
}	
	
/*
*************LISTS************************
*/	
	
	$commquery = 'SELECT comment_author,comment_content, comment_id
             FROM blog_comment 
			 WHERE comment_blog_id = "'.$_GET['blog_id'].'"
			 ';
			 
$commresult = mysql_query( $commquery, $connect )or die( mysql_error() );
			
for( $i = 0; $i < mysql_num_rows( $commresult ); $i ++ )
	{

list(  $comment_author, $comment_content, $comment_id, $comment_date, $comment_blog_id ) = mysql_fetch_row( $commresult );
			
	
echo 
	
	'-----------------------------------------------------------------<br/><p>From: '.$comment_author.'</p><br />
			
	  <p >'.$comment_content.'</p><br />
	  ';


}	
	?>
	

<form name="new_comment" method="post" action="post.php?blog_id=<?php echo $_GET['blog_id']; ?>" >
	
		<h1>Name:</h1> 
		<input type="text" name="comment_author" id="comment_author"/>
		<?php echo $blog_title_error; ?>
		<br />
		<h1>Comment:</h1>
		<textarea name="comment_content" id="comment_content" rows="8" cols="100" ><?php echo $_GET['comment_content']; ?> </textarea>
		<br />   
      
		
		
		<input type="submit" value="Add Comment" />   
	
	</form>
   
    
</div>

</body>
</html>