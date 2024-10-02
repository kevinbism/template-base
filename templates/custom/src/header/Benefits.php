<?php
global $cms;
$benefits = $cms->getBlocco('Vantaggi prenotazione');
$benefitsItems = ensure_iterable($benefits['Vantaggi']);

if (empty($benefitsItems)) return;
?>
<div class="benefits">
  <div class="benefits__title text-white"><?= $benefits['Titolo'] ?></div>
  <ul class="benefits-list">
    <?php foreach ($benefitsItems as $benefit) { ?>
      <li class="benefits-item text-white text"><?= $benefit['Vantaggio'] ?></li>
    <?php } ?>
  </ul>
</div>