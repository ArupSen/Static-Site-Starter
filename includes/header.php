<?php
// included header file which also inserts meta tags
// the functions and constants files are also required
require_once INCPATH.'constants.php';
require_once INCPATH.'functions.php';

$filename = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once DATAPATH.'meta_tags.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
	<?php // leave in during development and remove once live ?>
	<meta name="robots" content="noindex, nofollow">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta name="description" content="<?php echo ${$filename}['description']; ?>" />

	<title><?php echo ${$filename}['title']; ?></title>
	<link rel="stylesheet" href="<?php echo CSSPATH.'style.css'; ?>" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php echo IMGPATH.'favicon.ico'; ?>" type="image/x-icon" />

</head>
<body id="<?php echo $filename; ?>">
	<div id="wrap">
	<h1>--Main Heading--</h1>
