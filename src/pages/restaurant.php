<?php
// Modello Risotrante generico
global $cms;

src('layouts.baseContent');
src('components.Minigallery');
?>

<section class="rooms p-rel">
  <div class="container flex flex-ai-end flex-jc-c">
    <div class="inner">
      <h4 class="subtitle"><?= $cms->getModulo('Titolo filtro top') ?></h4>
      <h3 class="title"><?= $cms->getModulo('Titolo filtro bottom') ?></h3>
    </div>
    <div class="filter">
      <?php
      $cat = [];
      foreach ($cms->getModulo('Elenco ristoranti') as $box) {
        $cat[] = $box['tipologia'];
      }
      $cat = array_unique($cat);
      ?>
      <ul class="filter-list flex">
        <li class="filter-item active" data-filter="all"><?= $cms->__('Tutte') ?></li>
        <?php foreach ($cat as $c) { ?>
        <li class="filter-item" data-filter="<?= str_replace(' ', '-', $c) ?>"><?= $cms->__($c) ?></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="box-vertical">
    <?php foreach ($cms->getModulo('Elenco ristoranti') as $box) { ?>
    <div class="item" data-category="<?= str_replace(' ', '-', $box['tipologia']) ?>">
      <div class="content">
        <div class="text"><?= $box['testo'] ?></div>
        <?php foreach ($box['link'] as $link) {
        src('components.Link', ['link' => $link, 'class' => 'link']);
      } ?>
      </div>
      <?php foreach ($box['immagine'] as $img) {
        src('components.Image', ['img' => $img, 'class' => 'image', 'qmobile' => 'vertical_mobile']);
      } ?>
      <div class="inner">
        <h3 class="subtitle"><?= $box['sottotitolo'] ?></h3>
        <h2 class="title"><?= $box['titolo'] ?></h2>
      </div>
    </div>
    <?php } ?>
  </div>
</section>

<?php src('components.Barcode', ['class' => 'barcode--small flex-jc-c']); ?>
<?php src('components.ImageLandscape'); ?>