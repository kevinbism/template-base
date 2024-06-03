<?php
global $cms;
$menu = $cms->getMenu($cms->menu_bottom);
if (count($menu) > 0) {
?>

<nav class="footer-menu" aria-labelledby="secondary-navigation">
  <ul class="footer-menu-list flex flex-jc-c flex-wrap flex-column">
    <?php foreach($menu as $v) { ?>
    <li class="footer-menu-item">
      <a href="<?= $v['link'] ?>" target="<?= $v['target'] ?>" class="footer-menu__link"><?= $v['testo_link'] ?></a>
    </li>
    <?php } ?>
  </ul>
</nav>

<?php } ?>