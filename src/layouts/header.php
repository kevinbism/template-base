<?php global $cms; ?>

<?php src('utils.Menu.top'); ?>
<?php src('layouts.qr'); ?>

<div class="header-top flex flex-ai-c">
  <div class="hamburger flex flex-ai-c">
    <span class="hamburger__label"><?= $cms->__('Menu') ?></span>
    <div class="hamburger-box">
      <span class="hamburger__line"></span>
      <span class="hamburger__line"></span>
      <span class="hamburger__line"></span>
      <span class="hamburger__line"></span>
      <span class="hamburger__line"></span>
    </div>
  </div>
  <?php src('utils.Menu.lang') ?>

  <div class="header-experience">
    <span class="header-experience__label"><?= $cms->__("Prenota l'esperienza") ?></span>
    <i class="fa-thin fa-gift-card header-experience__icon"></i>
  </div>

  <div class="header-book text-center overflow-hidden">
    <span class="header-book__label"><?= $cms->__('prenota ora') ?></span>
    <span class="header-book__label header-book__label--close"><?= $cms->__('chiudi') ?></span>
  </div>
</div>

<?php src('components.Logo', ['class' => 'header-logo', 'p' => true, 'w' => 174.58, 'h' => 100]) ?>
<?php src('components.Logo', ['fileLogo' => 'logofooter', 'class' => 'header-logo header-logo--text', 'w' => 172, 'h' => 24.36]) ?>
<?php src('components.Logo', ['fileLogo' => 'altlogo', 'class' => 'header-logo header-logo--alt', 'w' => 56.06, 'h' => 77.1]) ?>

<div id="smooth-wrapper">
  <div id="smooth-content">
    <header class="header">
      <?php src('layouts.galleryTop');?>
    </header>