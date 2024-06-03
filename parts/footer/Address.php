<address class="footer-address text">
  <?= $this->getInfoStruttura("indirizzo") ?><br>
  Tel. <a
    href="tel:<?= trim($this->getInfoStruttura("telefono")) ?>"><?= $this->getInfoStruttura("telefono") ?></a> - Fax:
  <a href="tel:<?= trim($this->getInfoStruttura("fax")) ?>"><?= $this->getInfoStruttura("fax") ?></a><br>
  <a href="mailto:<?= $this->getInfoStruttura("email") ?>"><?= $this->getInfoStruttura("email") ?></a><br>
  <?= $this->__('P.IVA') ?> <?= $this->getInfoStruttura('partita_iva') ?>
</address>