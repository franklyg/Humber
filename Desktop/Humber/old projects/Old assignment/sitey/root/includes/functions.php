<?php

// Checks if user is logged in
function secure() {
   if( !isset( $_SESSION['user_id'] ) ) {
      header( 'location:admin_login.php' );
      die();
   }
}


// Array of months
$months = array( 
1 => 'January', 
2 => 'February', 
3 => 'March',
4 => 'April', 
5 => 'May', 
6 => 'June', 
7 => 'July', 
8 => 'August', 
9 => 'September',
10 => 'October', 
11 => 'November', 
12 => 'December' );


// Creates a date drop down for forms
function date_select( $name ) {
   global $months;

// Default to current date
   if( !isset( $_POST[$name.'_month'] ) ) {
      if( isset( $_POST[$name] ) ) {
         $date = strtotime( $_POST[$name] );
         $_POST[$name.'_month'] = date( 'n', $date );
         $_POST[$name.'_day'] = date( 'j', $date );
         $_POST[$name.'_year'] = date( 'Y', $date );
      } else {
         $_POST[$name.'_month'] = date( 'n' );
          $_POST[$name.'_day'] = date( 'j' );
         $_POST[$name.'_year'] = date( 'Y' );
      }
   }

// Add months to drop down
   $list = '<select name="'.$name.'_month" id="'.$name.'_month">';
   foreach( $months as $key => $value ) {
      $list .= '<option value="'.$key.'"';
      if( $_POST[$name.'_month'] == $key ) $list .= ' selected="selected"';
         $list .= '>'.$value.'</option>';
   }
   $list .= '</select> ';

// Add days to drop down
   $list .= '<select name="'.$name.'_day" id="'.$name.'_day">';
   for( $i = 1; $i <= 31; $i ++ ) {
      $list .= '<option value="'.$i.'"';
      if( $_POST[$name.'_day'] == $i ) $list .= ' selected="selected"';
      $list .= '>'.$i.'</option>';
   }
   $list .= '</select> ';

// Add years to drop down
   $list .= '<select name="'.$name.'_year" id="'.$name.'_year">';
   for( $i = date( 'Y' ) - 5; $i <= date( 'Y' ) + 5; $i ++ ) {
      $list .= '<option value="'.$i.'"';
      if( $_POST[$name.'_year'] == $i ) $list .= ' selected="selected"';
      $list .= '>'.$i.'</option>';
   }
   $list .= '</select>';

   return $list; 
}

// Build date from date_select function 
function build_date( $name ) {
   $date = mktime( 0, 0, 0, $_POST[$name.'_month'], $_POST[$name.'_day'], $_POST[$name.'_year'] );
   $_POST[$name] = date( 'Y-m-d', $date );
}

// Creates a drop down based on options
function list_select( $name, $options ) {
// Add options to drop down
   $list = '<select name="'.$name.'" id="'.$name.'">';
   foreach( $options as $key => $value ) {
      $list .= '<option value="'.$key.'"';
      if( $_POST[$name] == $key ) $list .= ' selected="selected"';
      $list .= '>'.$value.'</option>';
   }
   $list .= '</select> ';

return $list;
}


function blog_summary( $content ) {
   $position = @strpos( $content, ' ', 200 );
   if( $position ) {
      $content = substr( $content, 0, $position );
   }
   $content = nl2br( $content );
   $content .= '...';

    return $content;
}
?>