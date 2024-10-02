<?php global $cms; ?>

<!-- Action Menu -->
<div class="action-menu">
  <ul class="action-menu__row">
    <li class="action-menu__item">
      <?php src('header.Hamburger'); ?>
    </li>
    <li class="action-menu__item">
      <div class="header-book text-center overflow-hidden">
        <span class="header-book__label flex-inline flex-ai-c flex-jc-sb"><i class="fa-thin fa-calendar header-book__icon"></i></span>
        <span class="header-book__label header-book__label--close flex-inline flex-ai-c flex-jc-sb"><i class="fa-thin fa-xmark header-book__icon"></i></span>
      </div>
    </li>
    <li class="action-menu__item">
      <a href="<?= $cms->getInfoStruttura("google_map") ?>" target="_blank" class="action-menu__link">
        <i class="fa-thin fa-location-dot action-menu__icon"></i>
      </a>
    </li>
    <li class="action-menu__item">
      <a href="tel:<?= trim($cms->getInfoStruttura("telefono")); ?>" class="action-menu__link">
        <i class="fa-thin fa-phone action-menu__icon"></i>
      </a>
    </li>
  </ul>
</div>