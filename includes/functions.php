<?php // mainly html shortcuts using echo statements
// -- function.php --

// takes three arguments of src, title and id
// .jpg extension can be omitted
function img_tag($src='',$title='',$id='')
{
	echo '<img src="'.IMGPATH.$src.'" title="'.$title.'" alt="" id="'.$id.'" />';
}


// include the footer
function footer()
{
	require_once INCPATH.'footer.php';
}

// include the navbar
function navbar()
{
	require_once INCPATH.'navbar.php';
}


?>
