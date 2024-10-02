<?php
global $cms;
$map = $cms->getModulo('Mappa');

if (empty($map)) return;
?>
<div class="map p-rel">
  <?= $cms->getMappa($map); ?>
</div>