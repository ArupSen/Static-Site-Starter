<?php
// included header file which also inserts meta tags
// the functions and constants files are also required
require_once INCPATH.'constants.php';
require_once INCPATH.'functions.php';

$filename = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once DATAPATH.'meta_tags.php';
// A lot of the following is from the html5 boiler plate project with some adaptations
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php // leave in during development and remove once live ?>
<meta name="robots" content="noindex, nofollow">


<title><?php echo ${$filename}['title']; ?></title>
<meta name="description" content="<?php echo ${$filename}['description']; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
// Fontawesome and Bootstrap via bootstrapcdn which should leverage browser caching
?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSSPATH.'style.css'; ?>" type="text/css" media="screen" />
<link rel="shortcut icon" href="<?php echo IMGPATH.'favicon.ico'; ?>" type="image/x-icon" />

</head>
<body class="<?php echo $filename; ?>">
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div id="wrap">
<h1>--Main Heading--</h1>
