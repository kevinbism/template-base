<?php global $cms, $header_type; ?>
<header class="header <?= $header_type; ?>">
  <?php src('header.MenuHeader'); ?>
  <?php src('header.Qr'); ?>

  <div class="header-top flex flex-ai-c">
    <?php src('header.Hamburger'); ?>
    <?php src('header.MenuLanguage'); ?>
    <?php src('header.BookButton'); ?>
  </div>

  <?php src('components.Logo', ['class' => 'header-logo', 'p' => true, 'w' => 174.58, 'h' => 100]); ?>
  <?php src('components.Logo', ['fileLogo' => 'logofooter', 'class' => 'header-logo header-logo--text', 'w' => 172, 'h' => 24.36]); ?>

  <?php src('header.GalleryTop'); ?>
</header>