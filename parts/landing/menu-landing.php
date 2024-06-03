<?php
$menu_landing = $this->getMenuLanding();
$lg = $this->getMenu('Menu landing');

if ((count($menu_landing) > 0 || count($lg) > 0) && ($this->modello == 'Home Page Strutture' || $this->modello == 'Home Page')) {
?>
<nav class="footer-menu-landing">
  <ul class="footer-menu-landing__row flex flex-jc-c">
    <?php foreach($menu_landing as $i => $v) { ?>
    <li class="footer-menu-landing__item">
      <a href="<?= $v['link'] ?>" class="footer-menu-landing__link"><?= $v['testo_link'] ?></a>
    </li>
    <?php } ?>

    <?php foreach($lg as $l) { ?>
    <li class="footer-menu-landing__item">
      <a href="<?= $l['link'] ?>" class="footer-menu-landing__link"><?= $l['testo_link'] ?></a>
    </li>
    <?php } ?>
  </ul>
</nav>
<?php } ?>