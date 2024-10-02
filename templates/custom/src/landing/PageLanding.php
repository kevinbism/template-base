<?php
global $cms;
$menuLanding = ensure_iterable($cms->getMenuLanding());

if ($cms->sub_classe == "landing") { ?>
  <!-- MENU LANDING -->
  <nav class="page-landing">
    <ul class="page-landing__row">
      <?php foreach ($menuLanding as $landing) { ?>
        <li class="page-landing__item">
          <a class="page-landing__link" href="<?= $landing['link']; ?>"><?= $landing['testo_link']; ?></a>
        </li>
      <?php } ?>
    </ul>
  </nav>
<?php } ?>