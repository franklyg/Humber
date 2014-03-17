<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>C-Blog</title>

<style>
	
/**
 * HTML5 Boilerplate
 *
 * style.css contains a reset, font normalization and some base styles.
 *
 * Credit is left where credit is due.
 * Much inspiration was taken from these projects:
 * - yui.yahooapis.com/2.8.1/build/base/base.css
 * - camendesign.com/design/
 * - praegnanz.de/weblog/htmlcssjs-kickstart
 */


/**
 * html5doctor.com Reset Stylesheet (Eric Meyer's Reset Reloaded + HTML5 baseline)
 * v1.6.1 2010-09-17 | Authors: Eric Meyer & Richard Clark
 * html5doctor.com/html-5-reset-stylesheet/
 */

html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var, b, i, dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
  display: block;
}

blockquote, q { quotes: none; }

blockquote:before, blockquote:after,
q:before, q:after { content: ""; content: none; }

ins { background-color: #ff9; color: #000; text-decoration: none; }

mark { background-color: #ff9; color: #000; font-style: italic; font-weight: bold; }

del { text-decoration: line-through; }

abbr[title], dfn[title] { border-bottom: 1px dotted; cursor: help; }

table { border-collapse: collapse; border-spacing: 0; }

hr { display: block; height: 1px; border: 0; border-top: 1px solid #ccc; margin: 1em 0; padding: 0; }

input, select { vertical-align: middle; }


/**
 * Font normalization inspired by YUI Library's fonts.css: developer.yahoo.com/yui/
 */

body { font:13px/1.231 sans-serif; *font-size:small; } /* Hack retained to preserve specificity */
select, input, textarea, button { font:99% sans-serif; }

/* Normalize monospace sizing:
   en.wikipedia.org/wiki/MediaWiki_talk:Common.css/Archive_11#Teletype_style_fix_for_Chrome */
pre, code, kbd, samp { font-family: monospace, sans-serif; }


/**
 * Minimal base styles.
 */

/* Always force a scrollbar in non-IE */
html { overflow-y: scroll; }

/* Accessible focus treatment: people.opera.com/patrickl/experiments/keyboard/test */
a:hover, a:active { outline: none; }

ul, ol { margin-left: 2em; }
ol { list-style-type: decimal; }

/* Remove margins for navigation lists */
nav ul, nav li { margin: 0; list-style:none; list-style-image: none; }

small { font-size: 85%; }
strong { font-weight: bold; }

td { vertical-align: top; }

/* Set sub, sup without affecting line-height: gist.github.com/413930 */
sub, sup { font-size: 75%; line-height: 0; position: relative; }
sup { top: -0.5em; }
sub { bottom: -0.25em; }

pre {
  /* www.pathf.com/blogs/2008/05/formatting-quoted-code-in-blog-posts-css21-white-space-pre-wrap/ */
  white-space: pre; white-space: pre-wrap; word-wrap: break-word;
  padding: 15px;
}

textarea { overflow: auto; } /* www.sitepoint.com/blogs/2010/08/20/ie-remove-textarea-scrollbars/ */

.ie6 legend, .ie7 legend { margin-left: -7px; } 

/* Align checkboxes, radios, text inputs with their label by: Thierry Koblentz tjkdesign.com/ez-css/css/base.css  */
input[type="radio"] { vertical-align: text-bottom; }
input[type="checkbox"] { vertical-align: bottom; }
.ie7 input[type="checkbox"] { vertical-align: baseline; }
.ie6 input { vertical-align: text-bottom; }

/* Hand cursor on clickable input elements */
label, input[type="button"], input[type="submit"], input[type="image"], button { cursor: pointer; }

/* Webkit browsers add a 2px margin outside the chrome of form elements */
button, input, select, textarea { margin: 0; }

/* Colors for form validity */
input:valid, textarea:valid   {  }
input:invalid, textarea:invalid {
   border-radius: 1px; -moz-box-shadow: 0px 0px 5px red; -webkit-box-shadow: 0px 0px 5px red; box-shadow: 0px 0px 5px red;
}
.no-boxshadow input:invalid, .no-boxshadow textarea:invalid { background-color: #f0dddd; }


/* These selection declarations have to be separate
   No text-shadow: twitter.com/miketaylr/status/12228805301
   Also: hot pink! */
::-moz-selection{ background: #FF5E99; color:#fff; text-shadow: none; }
::selection { background:#FF5E99; color:#fff; text-shadow: none; }

/* j.mp/webkit-tap-highlight-color */
a:link { -webkit-tap-highlight-color: #FF5E99; }

/* Make buttons play nice in IE:
   www.viget.com/inspire/styling-the-button-element-in-internet-explorer/ */
button {  width: auto; overflow: visible; }

/* Bicubic resizing for non-native sized IMG:
   code.flickr.com/blog/2008/11/12/on-ui-quality-the-little-things-client-side-image-resizing/ */
.ie7 img { -ms-interpolation-mode: bicubic; }

/**
 * You might tweak these..
 */

body, select, input, textarea {
  /* #444 looks better than black: twitter.com/H_FJ/statuses/11800719859 */
  color: #444;
  /* Set your base font here, to apply evenly */
  /* font-family: Georgia, serif;  */
}

/* Headers (h1, h2, etc) have no default font-size or margin; define those yourself */
/*h1, h2, h3, h4, h5, h6 { font-weight: bold; }*/

a, a:active, a:visited { color: #607890; }


/**
 * Non-semantic helper classes: please define your styles before this section.
 */

/* For image replacement */
.ir { display: block; text-indent: -999em; overflow: hidden; background-repeat: no-repeat; text-align: left; direction: ltr; }

/* Hide for both screenreaders and browsers:
   css-discuss.incutio.com/wiki/Screenreader_Visibility */
.hidden { display: none; visibility: hidden; }

/* Hide only visually, but have it available for screenreaders: by Jon Neal.
  www.webaim.org/techniques/css/invisiblecontent/  &  j.mp/visuallyhidden */
.visuallyhidden { border: 0; clip: rect(0 0 0 0); height: 1px; margin: -1px; overflow: hidden; padding: 0; position: absolute; width: 1px; }
/* Extends the .visuallyhidden class to allow the element to be focusable when navigated to via the keyboard: drupal.org/node/897638 */
.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus { clip: auto; height: auto; margin: 0; overflow: visible; position: static; width: auto; }

/* Hide visually and from screenreaders, but maintain layout */
.invisible { visibility: hidden; }

/* The Magnificent Clearfix: Updated to prevent margin-collapsing on child elements.
   j.mp/bestclearfix */
.clearfix:before, .clearfix:after { content: "\0020"; display: block; height: 0; overflow: hidden; }
.clearfix:after { clear: both; }
/* Fix clearfix: blueprintcss.lighthouseapp.com/projects/15318/tickets/5-extra-margin-padding-bottom-of-page */
.clearfix { zoom: 1; }



/**
 * Media queries for responsive design.
 *
 * These follow after primary styles so they will successfully override.
 */

@media all and (orientation:portrait) {
  /* Style adjustments for portrait mode goes here */

}

@media all and (orientation:landscape) {
  /* Style adjustments for landscape mode goes here */

}

/* Grade-A Mobile Browsers (Opera Mobile, Mobile Safari, Android Chrome)
   consider this: www.cloudfour.com/css-media-query-for-mobile-is-fools-gold/ */
@media screen and (max-device-width: 480px) {


  /* Uncomment if you don't want iOS and WinMobile to mobile-optimize the text for you: j.mp/textsizeadjust */
  /* html { -webkit-text-size-adjust:none; -ms-text-size-adjust:none; } */
}


/**
 * Print styles.
 *
 * Inlined to avoid required HTTP connection: www.phpied.com/delay-loading-your-print-css/
 */
@media print {
  * { background: transparent !important; color: black !important; text-shadow: none !important; filter:none !important;
  -ms-filter: none !important; } /* Black prints faster: sanbeiji.com/archives/953 */
  a, a:visited { color: #444 !important; text-decoration: underline; }
  a[href]:after { content: " (" attr(href) ")"; }
  abbr[title]:after { content: " (" attr(title) ")"; }
  .ir a:after, a[href^="javascript:"]:after, a[href^="#"]:after { content: ""; }  /* Don't show links for images, or javascript/internal links */
  pre, blockquote { border: 1px solid #999; page-break-inside: avoid; }
  thead { display: table-header-group; } /* css-discuss.incutio.com/wiki/Printing_Tables */
  tr, img { page-break-inside: avoid; }
  @page { margin: 0.5cm; }
  p, h2, h3 { orphans: 3; widows: 3; }
  h2, h3{ page-break-after: avoid; }
}
	
/* START*/	
h1{ font-size:350%;}
h2{ font-size:150%; color:white;}
h3{ font-size:250%;}



.fl {
    float: left;
}
.fr {
    float: right;
}
.clr {
    clear: both;
    display: block;
    height: 0;
    min-height: 0;
    overflow: hidden;
    visibility: hidden;
    width: 0;
}
.fc:after {
    clear: both;
    content: ".";
    display: block;
    font-size: 0;
    height: 0;
    visibility: hidden;
}
.ie9 .fc, .lt-ie9 .fc {
    display: inline-block;
}
.ie9 html .fc, .lt-ie9 html .fc {
    height: 1%;
}
.ie9 .fc, .lt-ie9 .fc {
    display: block;
}

body{ background:#fffae7;}
.header{ width:auto; height:150px; background:#bd1515;}
.inner_header{ width:960px; margin:0 auto;}	
	
.inner_header p { width:300px; padding:5px; color:#FFF; margin-left:10px;}
.inner_header h1 { background: url(images/logo.png) no-repeat; width:151px; height:82px; padding-right:15px; border-right:1px solid #666; text-indent:-2200px;}
.inner_header li { list-style:none; color:white; padding:5px;}
.logo_text{ padding-top:15px;}
.nav{ width:960px; height:42px; background:#7f1b1a; margin-top:10px;}
.nav li { list-style:none; padding:10px;}
.nav li a { font-size:17px; text-decoration:none; color:white;}

.content{ width:960px; margin:0 auto;margin-top:50px; height: auto;}
.one_col{ background:#FFF; width:580px; margin-right:10px; padding:10px;}
.two_col{ background:#FFF; width:315px; margin-left:13px; padding:10px;}
.content h2 { background:#bd1515; width:auto; padding:10px; text-align:center; }
.content img { margin:10px 0px;}
.content a { color: #F00; text-decoration:none; display:inline;margin-bottom:10px; }
.content p {display: inline-block; margin:10px 0px 15px 0px;  font-size: 15px; }
.details { color:#666;}
form { margin-top: 10px;}
form input { display: block; margin: 5px 0px 5px 0px; padding: 5px;}
select { display: block; margin: 5px 0px 5px 0px;} 
textarea { display: block; max-height: 200px; max-width:700px; min-height: 200px; min-width: 700px;}
.d {color: red;}

.inner_header p {
    color: #FFFFFF;
    margin-left: 10px;
    padding: 5px;
    width: 300px;
}
.inner_header h1 {
    background: url("images/logo.png") no-repeat scroll 0 0 transparent;
    border-right: 1px solid #666666;
    height: 82px;
    padding-right: 15px;
    text-indent: -2200px;
    width: 151px;
}
.inner_header li {
    color: white;
    list-style: none outside none;
    padding: 5px;
}
.logo_text {
    padding-top: 15px;
}
.nav {
    background: none repeat scroll 0 0 #7F1B1A;
    height: 42px;
    margin-top: 10px;
    width: 960px;
}
.nav li {
    list-style: none outside none;
    padding: 10px;
}
.nav li a {
    color: white;
    font-size: 17px;
    text-decoration: none;
}
.content {
    margin: 50px auto 0;
    width: 960px;
}
.one_col {
    background: none repeat scroll 0 0 #FFFFFF;
    margin-right: 10px;
    padding: 10px;
    width: 580px;
}
.two_col {
    background: none repeat scroll 0 0 #FFFFFF;
    margin-left: 13px;
    padding: 10px;
    width: 315px;
}
.content h2 {
    background: none repeat scroll 0 0 #BD1515;
    padding: 10px;
    text-align: center;
    width: auto;
}
.content img {
    margin: 10px 0;
}
.content a {
    color: #FF0000;
    display: inline;
    margin-bottom: 10px;
    text-decoration: none;
	margin-left: 15px;
}
.content p {
  
    margin: 5px 0;
}
.details {
    color: #666666;
}
.two_col img {
    padding: 0 15px;
}
.two_col h3 {
    font-weight: bold;
    margin-top: 20px;
    padding: 5px;
	font-size: 150%;
}
.two_col a {
    margin-left: 5px;
}
.events {
}


#enter a { color: #000; text-decoration: none; position: relative; left: 350px;}
label { list-style-type: none; font-size: 25px}
ul { list-style-type: none;}
li{ list-style-type: none;}
tr { padding: 10px; }
th { padding: 10px;}
td { padding: 10px;}
#comments{ background: white; padding: 10px; border-bottom: 1px solid red;}
</style>

</head>
<body>
<div class="header">
	<div class="inner_header fc">
    	<div class="logo_text">
    	<h1 class="fl">C BLOG</h1>
        
        <p class="fl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        
     	<div id = "enter">
        	<a href = "admin_blog.php" style="color: #FFF; text-decoration: none;">Type in a Blog</a>
        </div>
        
    	</div><!--logo_text-->
        <div class="clr"></div>
            <div class="nav fc">
            <ul>
            <li class="fl"><a href="index.php">Home</a></li>
            <li class="fl"><a href="blog.php">Blog</a></li>
            <li class="fl"><a href="social.php">Events</a></li>
            <li class="fl"><a href="about.php">About</a></li>
            <li class="fl"><a href="contact.php">Contact</a></li>
            </ul>
            
           
            
            </div><!--nav-->
    </div><!--inner_header-->
</div><!--header-->