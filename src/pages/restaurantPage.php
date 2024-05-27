<?php
// Interna Ristorante
global $cms;

src('layouts.baseContent');
?>

<?php
foreach ($cms->getModulo('Blocco testo') as $i => $box) {
  if ($i !== 0) {
    src('components.Barcode', ['class' => 'barcode--darker barcode--small box-sized']);
  }
?>
<section class="services">
  <div class="wrapper box-sized">
    <h3 class="title text-white"><?= $box['titolo'] ?></h3>
    <div class="inner">
      <h4 class="subtitle subtitle-xl text-white"><?= $box['sottotitolo'] ?></h4>
      <div class="text text-white"><?= $box['testo'] ?></div>
    </div>
  </div>
</section>
<?php } ?>

<?php
src('components.Minigallery');
if (count($cms->getModulo('Immagine landscape')) > 0) {
  src('components.Barcode', ['class' => 'barcode--small flex-jc-c']);
}
src('components.ImageLandscape');
?>