<!-- Action Menu -->
<div class="action-menu">
  <ul class="action-menu-list flex flex-ai-c flex-jc-sb">
    <li class="action-menu-item">
      <a href="tel:<?= trim($this->getInfoStruttura("telefono")); ?>"
        class="action-menu__link flex flex-column flex-ai-c">
        <i class="fa-thin fa-phone action-menu__icon"></i>
      </a>
    </li>
    <li class="action-menu-item">
      <div class="header-book">
        <span class="header-book__label"><?= $this->__('prenota ora') ?></span>
        <span class="header-book__label header-book__label--close"><?= $this->__('chiudi') ?></span>
      </div>
    </li>
    <li class="action-menu-item">
      <a href="<?= $this->getInfoStruttura("google_map") ?>" target="_blank"
        class="action-menu__link flex flex-column flex-ai-c">
        <i class="fa-thin fa-map-location action-menu__icon"></i>
      </a>
    </li>
  </ul>
</div>