<?php
global $cms;

$lingue = $cms->getMenuLingue();
if (count($lingue) > 0) {
?>

<nav class="menu-lang" aria-labelledby="language-navigation">
  <ul class="menu-lang__row flex">
    <?php foreach($lingue as $lingua) { ?>
    <li class="menu-lang__item"><a href="<?= $lingua['link'] ?>" class="menu-lang__link"><?= $lingua['sigla'] ?></a>
    </li>
    <?php } ?>
  </ul>
</nav>

<?php } ?>