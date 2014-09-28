<?php // mainly html shortcuts using echo statements
// -- functions.php --

/**
 * Creates an HTML img tag and echos it out
 * The image has to be in the images folder
 * No error thrown if image is not found
 * @param string $src name of the file including file extension
 * @param string $alt description of the image which is also copied to title attribute
 * @param string $class option css class name or names. Already has bootstrap img-responsive class
 **/
function img_tag($src='',$alt='',$class='')
{
  echo '<img src="'.IMGPATH.$src.'" alt="'.$alt.'" title="'.$alt.'" class="img-responsive '.$class.'" />';
}

// require the footer partial within a page template
function footer()
{
  require_once INCPATH.'footer.php';
}

// require the navbar partial within a page template
function navbar()
{
  require_once INCPATH.'navbar.php';
}
?>
