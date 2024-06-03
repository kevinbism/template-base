<?php
global $cms;
$menu = $cms->getMenu($cms->menu_top);

if (count($menu) > 0) {
?>

<!-- MENU PRINCIPALE -->
<div class="menu flex">
  <nav class="menu-nav flex flex-column flex-ai-start p-rel">
    <ul class="menu-list">
      <?php foreach ($menu as $m) { ?>
      <li class="menu-item">
        <a href="<?= $m['link'] ?>" target="<?= $m['target'] ?>"
          class="menu__link <?= ($m['active']) ? 'menu__link--active' : '' ?>"><?= $m['testo_link'] ?></a>
        <?php if (count($m['figli']) > 0) { ?>
        <div class="menu-arrow">
          <?php src('svg.ArrowRightSmall'); ?>
        </div>
        <ul class="menu-child">
          <?php foreach ($m['figli'] as $child) { ?>
          <li class="menu-child-item">
            <a href="<?= $child['link'] ?>" target="<?= $child['target'] ?>"
              class="menu-child__link <?= ($child['active']) ? 'menu-child__link--active' : '' ?>"><?= $child['testo_link'] ?></a>
          </li>
          <?php } ?>
        </ul>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
  </nav>
</div>

<?php } ?>