<?php // Original PHP code by Chirp Internet: www.chirp.com.au
// Please acknowledge use of this code by including this header.

function myTruncate($string, $limit, $break=".", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  // is $break present between $limit and the end of the string?
  if(false !== ($breakpoint = strpos($string, $break, $limit))) {
    if($breakpoint < strlen($string) - 1) {
      $string = substr($string, 0, $breakpoint) . $pad;
    }
  }

  return $string;
}

?>

<?php

   include( 'includes/connect.php' );
   include( 'includes/functions.php' );

?>

<?php

$query = 'SELECT * 
             FROM blog 
             ORDER BY blog_date DESC';

$result = mysql_query( $query )
   or die( mysql_error() );

?>

<?php
	include('includes/header.php');
 ?>

	<div class="content fc"> 
     <?php

for( $i = 0; $i < mysql_num_rows( $result ); $i ++ ){

   list( $blog_id, $blog_title, $blog_content, $blog_author, $blog_date, $blog_image, $blog_status ) = mysql_fetch_row( 		    $result );



//check for image

 
$shortdesc = myTruncate($blog_content, 200);


 /* echo "<p>$shortdesc</p>";*/
 echo '<div class="one_col fl">';
echo '<h2 style = " margin-bottom: 15px;">'.$blog_title.'</h2> ';
if( $blog_image and file_exists( 'blog_images/'.$blog_image ) ) {
   	echo '<img src="blog_images/'.$blog_image.'" alt="" width="580" height="270" style="margin-right: 500px;" />';
		} else {
   	echo '&nbsp;';
}
echo '


<p>'.$shortdesc.'<a href = "post.php?blog_id='.$blog_id.'">Read More</a><br /></p>



';
echo '</div>';
}


?>


    <div class="two_col fl">
    <h2>Recent Event Posts</h2>
    	<div class="events">
        <img  class="fl" src="images/event.png"/> <h3 class="fl"> EVENT AT THE CLUB</h3><a href="fr">Click Here For More Info</a>
        </div>
        <div class="clr"></div>
        <div class="events">
        <img  class="fl" src="images/event1.png"/> <h3 class="fl"> EVENT AT THE CLUB</h3><a href="fr">Click Here For More Info</a>
        </div
        ><div class="clr"></div>
      <div class="events">
        <img  class="fl" src="images/event2.png"/> <h3 class="fl"> EVENT AT THE CLUB</h3><a href="fr">Click Here For More Info</a>
        </div>
        <div class="clr"></div>
        <div class="events">
        <img  class="fl" src="images/event3.png"/> <h3 class="fl"> EVENT AT THE CLUB</h3><a href="fr">Click Here For More Info</a>
        </div>
         <div class="clr"></div>
        <div class="events">
        <img  class="fl" src="images/event4.png"/> <h3 class="fl"> EVENT AT THE CLUB</h3><a href="fr">Click Here For More Info</a>
        </div>
        <div class="clr"></div>
        <div class="events">
        <img  class="fl" src="images/Untitled-5.png"/> <h3 class="fl"> EVENT AT THE CLUB</h3><a href="fr">Click Here For More Info</a>
        </div>
 
    </div>

   
    

</div>

</body>
</html>