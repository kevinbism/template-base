<?php
global $cms;
$classList = explode(' ', $class);
$fileLogo = $fileLogo ?? 'logo';
$w = $w ?? '';
$h = $h ?? '';
$p = $p ?? false;
?>

<a href="<?= $cms->getLinkHome() ?>" class="<?= implode(' ', $classList) ?>">
  <?= $cms->getLogoP([
    'file' => $fileLogo,
    'priority' => $p,
    'class' => !$p ? 'lazy' : '',
    'lazy' => false,
    'classImg' => $classList[0] . '__img',
    'title' => $cms->getInfoStruttura('nome_struttura') . ' Logo',
    'width' => $w,
    'height' => $h
  ]);
  ?>
</a>