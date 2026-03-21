<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ONE LOOK AT A TIME<?php echo isset($pageTitle) ? ' | '.$pageTitle : '' ?></title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito" rel="stylesheet">

  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/main.css">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#ffc40d">
  <meta name="theme-color" content="#ffffff">

  <meta property="og:title" content="ONE LOOK AT A TIME">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://onelookatatime.com/img/og/og-image.jpg">
  <meta property="og:url" content="https://onelookatatime.com/">
  <meta property="og:description" content="Discover the looks of a post-fossil future! By Alexander Atlesque &amp; Elias Gubbels.">

  <?php include_once('google-tracking.php'); ?>

  <?php if (function_exists('customPageHeader')){
    customPageHeader();
  }?>
</head>
<body>
 <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top d-flex">
  <?php if(isset($prevPage)): ?>
    <div class="navbar-icon-wrapper"><a class="navbar-brand mx-auto nav-arrow" href="<?= $prevPage ?>"><span class="chevron-light chevron-light--left"></span></a></div>
  <?php endif; ?>
  <div class="navbar-icon-wrapper"><a class="navbar-brand mx-auto" href="/">ONE LOOK AT A TIME</a></div>
  <?php if(isset($nextPage)): ?>
    <div class="navbar-icon-wrapper"><a class="navbar-brand mx-auto nav-arrow" href="<?= $nextPage ?>"><span class="chevron-light chevron-light--right"></span></a></div>
  <?php endif; ?>
</nav>