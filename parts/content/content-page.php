<?php
global $cms;
?>

<section class="page p-rel <?= $class ?>">
  <div class="wrapper box-sized">
    <div class="breadcrumb">
      <?= $cms->getBreadCrumb("breadcrumb-list flex flex-wrap flex-ai-c", "breadcrumb-item") ?>
    </div>
    <?php
    switch ($type) {
      case 'center':
    ?>
    <div class="page-content text-center">
      <h2 class="subtitle"><?= $cms->getSottotitolo() ?></h2>
      <h1 class="title"><?= $cms->getTitolo() ?></h1>
      <div class="text"><?= $cms->getTesto() ?></div>
      <?php src('content.link-page'); ?>
      <?php src('landing.page-landing'); ?>
    </div>
    <?php
    break;
    default:
    ?>
    <div class="page-content">
      <h2 class="subtitle"><?= $cms->getSottotitolo() ?></h2>
      <h1 class="title"><?= $cms->getTitolo() ?></h1>
      <div class="text"><?= $cms->getTesto() ?></div>
      <?php src('content.link-page'); ?>
      <?php src('landing.page-landing'); ?>
    </div>
    <?php } ?>
  </div>
</section>