<?php global $header_type; ?>
<header class="header <?= $header_type; ?>">
  <?php src('header.menu-header'); ?>
  <?php src('header.qr'); ?>

  <div class="header-top flex flex-ai-c">
    <?php src('header.hamburger'); ?>
    <?php src('header.menu-language'); ?>
    <?php src('header.book-button'); ?>
  </div>

  <?php src('components.logo', ['class' => 'header-logo', 'p' => true, 'w' => 174.58, 'h' => 100]); ?>
  <?php src('components.logo', ['fileLogo' => 'logofooter', 'class' => 'header-logo header-logo--text', 'w' => 172, 'h' => 24.36]); ?>

  <?php src('header.gallery-top'); ?>
</header>