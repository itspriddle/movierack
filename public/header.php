<?php
define("APPPATH", realpath(dirname(__FILE__).'/../'));
include_once(APPPATH.'/includes/movierack.class.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>movierack <?php echo Movierack::page_title(); ?></title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script src="/assets/javascripts/application.js"></script>
  <link type="text/css" rel="stylesheet" href="/assets/stylesheets/application.css" />
  <noscript>
    <link type="text/css" rel="stylesheet" href="/assets/stylesheets/application-nojs.css" />
  </noscript>
</head>
<body>

<div id="header">
  <h1><a href="/">movierack</a> <?php echo Movierack::navigation(); ?></h1>
</div>

<div id="content">

  <div id="dashboard">
    <div id="player"></div>
    <ul id="file-list" class="clearfix"></ul>
  </div>

  <!-- BEGIN DIRECTORY LIST -->
  <div id="directory-list">
