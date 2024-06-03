<?php
$lingue = $this->getMenuLingue();
if (count($lingue) > 0) {
?>

<nav class="menu-lang" aria-labelledby="language-navigation">
  <ul class="menu-lang-list flex">
    <?php foreach($lingue as $lingua) { ?>
    <li class="menu-lang-item">
      <a href="<?= $lingua['link'] ?>" class="menu-lang__link"><?= $lingua['sigla'] ?></a>
    </li>
    <?php } ?>
  </ul>
</nav>

<?php } ?>