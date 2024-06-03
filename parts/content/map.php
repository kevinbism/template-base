<?php
$map = $this->getModulo('Mappa');

if ($map) {
?>

<section class="map p-rel">
  <?= $this->getMappa($map); ?>
</section>

<?php } ?>