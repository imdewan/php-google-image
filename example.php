<?php
require("simple_html_dom.php");#Requirements
function GetImage($title) #Function to get the image from the keyword
{

$search_keyword=$title;
$search_keyword=str_replace(' ','+',$search_keyword);
$newhtml =file_get_html("https://www.google.com/search?q=".$search_keyword."&tbm=isch");
$result_image_source = $newhtml->find('img', 1)->src;
return $result_image_source;
}

if(isset($_GET['key'])){
	$img_src=GetImage($_GET['key']);
	echo 'Your image: <img src="'.$img_src.'">';#Show the image
	
}

?>

<form action="#" method="get">
keyword: <input type="text" name="key"><br><!--Simple Form-->

<input type="submit">
</form>