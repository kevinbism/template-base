<?php
global $cms;

$map = $cms->getModulo('Mappa');

if ($map) {
?>

<section class="map p-rel">
  <?= $cms->getMappa($map); ?>
</section>

<?php } ?>