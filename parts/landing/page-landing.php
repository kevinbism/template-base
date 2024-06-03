<?php
$menu_landing = $this->getMenuLanding();

if ($this->sub_classe == "landing") { ?>
<!-- MENU LANDING -->
<nav class="page-landing">
  <ul class="page-landing__row">
    <?php foreach ($menu_landing as $i => $v) { ?>
    <li class="page-landing__item">
      <a class="page-landing__link" href="<?= $menu_landing[$i]['link']; ?>"><?= $menu_landing[$i]['testo_link']; ?></a>
    </li>
    <?php } ?>
  </ul>
</nav>
<?php } ?>