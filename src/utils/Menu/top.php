<?php
global $cms;
$menu = $cms->getMenu($cms->menu_top);
$image = $cms->getBlocco('Immagine Menu');

if (count($menu) > 0) {
?>

<!-- MENU PRINCIPALE -->
<div class="menu flex">
  <nav class="menu-nav flex flex-column flex-ai-start p-rel">
    <ul class="menu__row">
      <?php foreach ($menu as $m) { ?>
      <li class="menu__item">
        <a href="<?= $m['link'] ?>" target="<?= $m['target'] ?>"
          class="menu__link <?= ($m['active']) ? 'menu__link--active' : '' ?>"><?= $m['testo_link'] ?></a>
        <?php if (count($m['figli']) > 0) { ?>
        <div class="menu-arrow">
          <?php src('svg.ArrowRightSmall'); ?>
        </div>
        <ul class="menu-child">
          <?php foreach ($m['figli'] as $child) { ?>
          <li class="menu-child__item">
            <a href="<?= $child['link'] ?>" target="<?= $child['target'] ?>"
              class="menu-child__link <?= ($child['active']) ? 'menu-child__link--active' : '' ?>"><?= $child['testo_link'] ?></a>
          </li>
          <?php } ?>
        </ul>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
    <div class="menu-bottom">
      <a href="<?= $cms->getLinkPaginaGallery() ?>" class="menu-bottom__link"><?= $cms->__('Gallery') ?></a>
      <a href="<?= $cms->getLinkPaginaOfferte() ?>" class="menu-bottom__link"><?= $cms->__('Offerte') ?></a>
    </div>
  </nav>
  <figure class="menu-image">
    <?= $cms->getPicture($cms->getImgAnteprima(),
      [
        'priority' => false,
        'class' => 'lazy',
        'lazy' => false,
        'classImg' => 'menu-image__img',
        'title' => $img['title'],
        'type' => 'medium',
      ])
    ?>
  </figure>
  <img src="<?= $cms->getImgEmptySource() ?>" data-src="<?= PATH ?>assets/images/concierge.png"
    alt="Concierge image"
    class="menu-image-fix lazy">
</div>

<?php } ?>