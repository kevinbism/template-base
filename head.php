<?php
global $cms;
$header = ($cms->getVar('type-gallery') == 'Ridotta' ? 'header--reduce' : (($cms->getVar('type-gallery') == 'Nascosta') ? 'header--hidden' : ''));
?>
<!DOCTYPE html>
<html lang="<?= $cms->trova_lingua($cms->id_lingua, '2_caratteri'); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#404B59">
  <meta name="msapplication-navbutton-color" content="#404B59">
  <meta name="apple-mobile-web-app-status-bar-style" content="#404B59">
  <?php $cms->cube_head(); ?>
  <link rel="preconnect" href="https://kit.fontawesome.com">
  <link rel="preconnect" href="https://ka-p.fontawesome.com">
  <link rel="dns-prefetch" href="https://kit.fontawesome.com">
  <link rel="dns-prefetch" href="https://ka-p.fontawesome.com">
  <link rel="preconnect" href="https://use.typekit.net">
  <link rel="dns-prefetch" href="https://use.typekit.net">
  <link as="style" href="https://use.typekit.net/hxu2dbs.css" rel="preload">
  <link rel="stylesheet" href="https://use.typekit.net/hxu2dbs.css">
  <?php src('utils.preload'); ?>
  <?php $cms->printInlineCSS(['/assets/css/dist/header.min.css'], array('newAssetsFolder' => '/assets/css/newassets')); ?>
</head>

<body class="<?= ($cms->modello == "Home Page" ? 'home' : 'interna') . ' ' . $header ?>">