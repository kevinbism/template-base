<?php global $cms; ?>
<address class="footer-address text">
  <?= $cms->getInfoStruttura("indirizzo") ?><br>
  Tel. <a
    href="tel:<?= trim($cms->getInfoStruttura("telefono")) ?>"><?= $cms->getInfoStruttura("telefono") ?></a> - Fax:
  <a href="tel:<?= trim($cms->getInfoStruttura("fax")) ?>"><?= $cms->getInfoStruttura("fax") ?></a><br>
  <a href="mailto:<?= $cms->getInfoStruttura("email") ?>"><?= $cms->getInfoStruttura("email") ?></a><br>
  <?= $cms->__('P.IVA') ?> <?= $cms->getInfoStruttura('partita_iva') ?>
</address>