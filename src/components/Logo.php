<?php
global $cms;
$classList = explode(' ', $class);
?>

<a href="<?= $cms->getLinkHome() ?>" class="<?= implode(' ', $classList) ?>">
  <?= $cms->getLogoP([
      'file' => $fileLogo ?: 'logo',
      'priority' => $p ?: false,
      'class' => !$p ? 'lazy' : '',
      'lazy' => false,
      'classImg' => $classList[0].'__img',
      'title' => $cms->getInfoStruttura('nome_struttura') . ' Logo',
      'width' => $w,
      'height' => $h
    ]);
  ?>
</a>