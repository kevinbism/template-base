<?php $classList = explode(' ', $class); ?>

<a href="<?= $this->getLinkHome() ?>" class="<?= implode(' ', $classList) ?>">
  <?= $this->getLogoP([
      'file' => $fileLogo ?: 'logo',
      'priority' => $p ?: false,
      'class' => !$p ? 'lazy' : '',
      'lazy' => false,
      'classImg' => $classList[0].'__img',
      'title' => $this->getInfoStruttura('nome_struttura') . ' Logo',
      'width' => $w,
      'height' => $h
    ]);
  ?>
</a>