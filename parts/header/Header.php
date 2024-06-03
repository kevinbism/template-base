<?php global $header_type; ?>
<header class="header <?= $header_type; ?>">
  <?php $this->cube_parts('parts.header.menu-header'); ?>
  <?php $this->cube_parts('parts.header.qr'); ?>

  <div class="header-top flex flex-ai-c">
    <?php $this->cube_parts('parts.header.hamburger'); ?>
    <?php $this->cube_parts('parts.header.menu-language'); ?>
    <?php $this->cube_parts('parts.header.book-button'); ?>
  </div>

  <?php $this->cube_parts('parts.components.logo', ['class' => 'header-logo', 'p' => true, 'w' => 174.58, 'h' => 100]); ?>
  <?php $this->cube_parts('parts.components.logo', ['fileLogo' => 'logofooter', 'class' => 'header-logo header-logo--text', 'w' => 172, 'h' => 24.36]); ?>

  <?php $this->cube_parts('parts.header.gallery-top'); ?>
</header>