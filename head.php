<?php global $cms; ?>
<!DOCTYPE html>
<html lang="<?= $cms->trova_lingua($cms->id_lingua, '2_caratteri'); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="">
  <meta name="msapplication-navbutton-color" content="">
  <meta name="apple-mobile-web-app-status-bar-style" content="">
  <?php
  $cms->cube_head();
  src('utils.preload');
  $cms->printInlineCSS(['/assets/css/dist/header.min.css'], array('newAssetsFolder' => '/assets/css/newassets'));
  ?>
</head>

<body class="<?= $cms->modello == "Home Page" ? 'home' : 'internal'; ?>">