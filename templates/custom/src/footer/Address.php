<?php global $cms; ?>
<address class="address">
  <?= $cms->getInfoStruttura("indirizzo") ?><br>
  <a href="tel:<?= trim($cms->getInfoStruttura("telefono")) ?>"><?= $cms->getInfoStruttura("telefono") ?></a><br>
  <a href="mailto:<?= $cms->getInfoStruttura("email") ?>"><?= $cms->getInfoStruttura("email") ?></a>
</address>