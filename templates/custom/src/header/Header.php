<?php global $cms, $headerType;

src('header.GalleryTop');
?>

<header class="header <?= $headerType; ?>">
  <?php
  src('header.MenuHeader');
  src('header.Qr');
  ?>

  <div class="header-top flex flex-jc-sb flex-ai-c">
    <?php
    src('header.Hamburger');
    src('header.MenuLanguage');
    src('header.BookButton');
    ?>
  </div>

  <?php src('components.Logo', ['class' => 'header-logo', 'p' => true, 'w' => 200.66, 'h' => 90.3]); ?>
</header>