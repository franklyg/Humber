<?php

session_start();

//Earn extra marks by utilizing CONSTANTS to hide critical information like username and password(Week11)
$connect = mysql_connect( 'mysql.parafx.com', 'gsnf0005','Loop4worm' ) 
   or die( mysql_error() );

mysql_select_db( 'gsnf0005', $connect )
   or die( mysql_error() );

foreach( $_POST as $key => $value ) {
   $_POST[$key] = mysql_real_escape_string( $_POST[$key] );
}

foreach( $_GET as $key => $value ) {
   $_GET[$key] = mysql_real_escape_string( $_GET[$key] );
}

?>

