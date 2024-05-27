<?php
global $cms;
$disable_barcode = $disable_barcode ?? false;
?>

<section class="page p-rel <?= $class ?>">
  <div class="wrapper box-sized">
    <div class="breadcrumb">
      <?= $cms->getBreadCrumb("list flex flex-wrap flex-ai-c", "item") ?>
    </div>
    <?php
    switch ($type) {
      case 'center':
    ?>
    <div class="content text-center">
      <h2 class="subtitle"><?= $cms->getSottotitolo() ?></h2>
      <h1 class="title"><?= $cms->getTitolo() ?></h1>
      <div class="text"><?= $cms->getTesto() ?></div>
      <?php src('components.LinkPage'); ?>
      <?php src('utils.Landing.page'); ?>
    </div>
    <?php
    break;
    default:
    ?>
    <div class="content">
      <h2 class="subtitle"><?= $cms->getSottotitolo() ?></h2>
      <h1 class="title"><?= $cms->getTitolo() ?></h1>
      <div class="text"><?= $cms->getTesto() ?></div>
      <?php src('components.LinkPage'); ?>
      <?php src('utils.Landing.page'); ?>
    </div>
    <?php } ?>
  </div>

  <?php if (!$disable_barcode) {
    src('components.Barcode', ['class' => 'barcode--white']);
  } ?>
</section>