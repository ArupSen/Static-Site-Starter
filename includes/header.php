<?php
// included header file which also inserts meta tags
// the functions and constants files are also required
require_once INCPATH.'constants.php';
require_once INCPATH.'functions.php';

$filename = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once DATAPATH.'meta_tags.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
	<?php // leave in during development and remove once live ?>
	<meta name="robots" content="noindex, nofollow">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta name="description" content="<?php echo ${$filename}['description']; ?>" />
	<meta name="keywords" content="<?php echo ${$filename}['keywords']; ?>" />

	<title><?php echo ${$filename}['title']; ?></title>
	<link rel="stylesheet" href="<?php echo CSSPATH.'style.css'; ?>" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php echo IMGPATH.'favicon.ico'; ?>" type="image/x-icon" />
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="<?php echo CSSPATH.'style_ie.css'; ?>" type="text/css" media="screen" />	
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo CSSPATH.'style_ie7.css'; ?>" type="text/css" media="screen" />	
	<![endif]-->
	<!--[if IE 8]>
	<link rel="stylesheet" href="<?php echo CSSPATH.'style_ie8.css'; ?>" type="text/css" media="screen" />	
	<![endif]-->

</head>
<body id="<?php echo $filename; ?>">
	<div id="wrap">
	<h1>--Main Heading--</h1>
	<h2 id="subheading">--Sub Heading--</h2>