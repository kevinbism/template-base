<?php
global $cms;
$menu = ensure_iterable($cms->getMenu($cms->menu_top));

if (empty($menu)) return;
?>
<!-- MENU PRINCIPALE -->
<div class="menu">
  <nav class="menu-nav p-rel overflow-hidden">
    <ul class="menu-list">
      <?php foreach ($menu as $m) { ?>
        <li class="menu-item <?= ($m['active']) ? 'menu-item--active' : '' ?>">
          <a href="<?= $m['link'] ?>" target="<?= $m['target'] ?>" class="menu__link"><?= $m['testo_link'] ?></a>
          <?php if (!empty($m['figli'])) { ?>
            <div class="menu-arrow">
              <i class="fa-regular fa-arrow-right menu-arrow__icon"></i>
            </div>
            <ul class="menu-child">
              <?php foreach ($m['figli'] as $child) { ?>
                <li class="menu-child-item">
                  <a href="<?= $child['link'] ?>" target="<?= $child['target'] ?>" class="menu-child__link <?= ($child['active']) ? 'menu-child__link--active' : '' ?>"><?= $child['testo_link'] ?></a>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
        </li>
      <?php } ?>
    </ul>
  </nav>
</div>