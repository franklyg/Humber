<?php

include( 'includes/connect.php' );
include( 'includes/functions.php' );



?>
<?php 
	include ('includes/header.php');
?>
<div class="content fc"> 
<h1>Manage Blog Comments</h1> 

<ul>
	<li><a href="admin_blog.php">Back</a></li>
    <li><a href="blog_comments_new.php?blog_id=<?php echo $_GET['blog_id']; ?>">New Blog Comment</a></li>
</ul>

<?php

$query = 'SELECT * 
	FROM blog_comment 
	WHERE comment_blog_id = "'.$_GET['blog_id'].'"
	ORDER BY comment_date DESC';
$result = mysql_query( $query, $connect )
	or die( mysql_error() );

?>

<table cellpadding="3" cellspacing="0" border="1">
	<tr>
    	<th>ID</th>
        <th>Author</th>
        <th>Content</th>
        <th>Date</th>
        <th>Options</th>
    </tr>
    
    <?php
	
	for( $i = 0; $i < mysql_num_rows( $result ); $i ++ )
	{
		list( $comment_id, $comment_author, $comment_content, $comment_date, $comment_blog_id ) = 
			mysql_fetch_row( $result );
			
		echo '<tr>
			<td>'.$comment_id.'</td>
			<td>'.$comment_author.'</td>
			<td>'.$comment_content.'</td>
			<td>'.$comment_date.'</td>
			<td>
				<a href="admin_blog_comments_edit.php?comment_id='.$comment_id.'&blog_id='.$_GET['blog_id'].'">Edit</a>
				<a href="blog_comments_delete.php?comment_id='.$comment_id.'&blog_id='.$_GET['blog_id'].'">Delete</a>
			</td>
		</tr>';
	}
	
	?>

</table>
</div>
