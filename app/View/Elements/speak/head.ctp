<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php echo $meta_title;?></title>
<link rel="canonical" href="<?php
$uri = $_SERVER['REQUEST_URI'];
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $url; // Outputs: Full URL
$query = $_SERVER['QUERY_STRING'];
echo $query; // Outputs: Query String
?>" />
<meta name="keywords" content="<?php echo $meta_keyword;?>" />
<meta name="description" content="<?php echo $meta_desc;?>" />
<meta name="author" content="<?php echo $company_name;?>">
<base href="<?php echo $this->webroot;?>">
  <meta name="document-type" content="Public" />
    <meta name="document-rating" content="Safe for Kids" />
    <meta name="Expires" content="never" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="YahooSeeker" content="Index,Follow" />
    <meta name="geo.region" content="IN" />
    <meta name="State" content="DELHI" />
    <meta name="City" content="NEW DELHI" />
    <meta name="copyright" content="Copyright 2019 Confession Diary" /> 
    <meta name="distribution" content="global" />
    <meta name="language" content="english" /> 
    <meta name="rating" content="general" />
    <meta name="subject" content="<?php echo $meta_keyword;?>" /> 
    <meta name="robots" content="ALL" /> 
    <meta name="revisit-after" content="Daily" />
    <meta name="generator" content="https://www.confessiondiary.com" />
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow" >
    <meta name="reply-to" content="support@confessiondiary.com">
   <meta name="coverage" content="Worldwide">
    <meta name="og:type" content="article" />
    <meta name="og:title" content="<?php echo $meta_title;?>" />
    <meta name="og:image" content="https://www.confessiondiary.com/images/<?=$sitelogo;?>" />
    <meta name="og:site_name" content="<?php echo $company_name;?>"/>
    <meta name="og:description" content="<?php echo $meta_desc;?>"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:desc" content="<?php echo $meta_desc;?>"/>
    <meta name="twitter:title" content="<?php echo $meta_desc;?>"/>
    <meta name="abstract" content="<?php echo $meta_title;?>"/>
    <meta name="Classification" content="<?php echo $meta_desc;?>"/>
    <meta name="dc.source" content="https://www.confessiondiary.com" />
    <meta name="dc.title" content="<?php echo $meta_title;?>" />
    <meta name="dc.keywords" content="<?php echo $meta_keyword;?>" />
    <meta name="dc.subject" content="<?php echo $company_name;?>" />
    <meta name="dc.description" content="<?php echo $meta_desc;?>" />
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="speak/style.css">
    <link rel="stylesheet" href="speak/css/skins/skins.css">
    <link rel="stylesheet" href="speak/css/responsive.css">
<?php echo $google_analytics;?>


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <link href="lib/css/emoji.css" rel="stylesheet">
</head>
