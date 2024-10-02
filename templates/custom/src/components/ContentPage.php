<?php
global $cms;
$offers = ensure_iterable($cms->getModulo("Offerte"));
$class = $class ?? "";
?>

<section class="page p-rel <?= $class ?>">
  <?php src('components.Breadcrumbs'); ?>
  <?php
  switch ($type) {
    default:
  ?>
      <div class="page-wrapper">
        <h1 class="page-inner__title title"><?= $cms->getTitolo() ?></h1>
        <h2 class="page-inner__subtitle subtitle"><?= $cms->getSottoTitolo() ?></h2>
        <div class="page-content mar-auto">
          <?php if ($cms->modello !== "Offerte") { ?>
            <div class="page-content__text text mar-auto"><?= $cms->getTesto() ?></div>
          <?php } else { ?>
            <div class="page-content__text text mar-auto"><?= count($offers) > 0 ? $cms->getTesto() : $cms->__("dicitura-no-offerte") ?></div>
          <?php } ?>
          <?php src('components.LinkPage'); ?>
          <?php src('landing.PageLanding'); ?>
        </div>
      </div>
  <?php } ?>
</section>