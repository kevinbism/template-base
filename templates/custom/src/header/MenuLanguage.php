<?php
global $cms;
$lingue = ensure_iterable($cms->getMenuLingue());

if (empty($lingue)) return;
?>
<nav class="menu-lang" aria-labelledby="language-navigation">
  <span class="menu-lang__label"><?= $cms->trova_lingua($cms->id_lingua) ?><i class="fa-light fa-arrow-down menu-lang__icon"></i></span>
  <ul class="menu-lang-list flex">
    <?php foreach ($lingue as $lingua) { ?>
      <li class="menu-lang-item <?= $cms->sigla_lingua === $lingua['sigla'] ? 'menu-lang-item--active' : '' ?>"><a href="<?= $lingua['link'] ?>" class="menu-lang__link"><?= $lingua['sigla'] ?></a>
      </li>
    <?php } ?>
  </ul>
</nav>