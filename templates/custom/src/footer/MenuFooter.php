<?php
global $cms;
$menu = ensure_iterable($cms->getMenu($cms->menu_bottom));

if (empty($menu)) return;
?>
<nav class="footer-menu" aria-labelledby="secondary-navigation">
  <ul class="footer-menu__row flex flex-jc-c flex-wrap">
    <?php foreach ($menu as $v) { ?>
      <li class="footer-menu__item">
        <a href="<?= $v['link'] ?>" target="<?= $v['target'] ?>" class="footer-menu__link"><?= $v['testo_link'] ?></a>
      </li>
    <?php } ?>
  </ul>
</nav>