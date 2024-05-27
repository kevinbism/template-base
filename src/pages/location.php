<?php
global $cms;

src('layouts.baseContent');
?>

<div class="services location">
  <div class="wrapper box-sized">
    <h2 class="title text-white"><?= $cms->__('I percorsi') ?>:</h2>
    <?php foreach ($cms->getModulo('Blocco testuale ripetuto') as $box) { ?>
    <div class="dropdown-item">
      <h3 class="subtitle subtitle-xl text-white">
        <?= $box['titolo'] ?>
        <div class="circle">
          <i class="fa-thin fa-circle-plus icon"></i>
          <i class="fa-thin fa-circle-minus icon--close"></i>
        </div>
      </h3>
      <?php foreach ($box['elenco'] as $item) { ?>
      <div class="inner">
        <div class="container overflow-hidden">
          <h4 class="subtitle text-uppercase text-white"><i class="fa-thin fa-<?= $item['icona'] ?> fa-fw icon"></i>
            <?= $item['titolo'] ?></h4>
          <div class="text text-white"><?= $item['testo'] ?></div>
        </div>
      </div>
      <?php } ?>
    </div>
    <?php } ?>
  </div>
</div>

<?php
src('layouts.map');
src('components.Barcode', ['class' => 'barcode--small flex-jc-c']);
src('components.Minigallery');
?>