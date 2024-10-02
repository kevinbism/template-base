<?php
global $cms;
$modulo = $modulo ?? 'Parallax';
$class = $class ?? '';
$parallax = ensure_iterable($cms->getModulo($modulo));

foreach ($parallax as $img) {
?>
  <section class="parallax <?= $class ?>">
    <div data-src="<?= $cms->getImg($img['files']) ?>" class="parallax-image lazy"></div>
  </section>
<?php } ?>