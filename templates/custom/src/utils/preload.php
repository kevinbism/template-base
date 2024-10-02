<?php
global $cms;
$image = ensure_iterable($cms->getModulo('Immagini header'));
$image = count($image) > 0 ? $image : ensure_iterable($cms->getBlocco("Gallery Top Default")['immagini']);
?>

<?php if (count($image) > 0) { ?>
  <link rel="preload" href="<?= $cms->getImg($image[0]['files'], '', true); ?>" as="image">
<?php } ?>
<!-- FontAwesome preload -->
<link rel="preconnect" href="https://kit.fontawesome.com">
<link rel="preconnect" href="https://ka-p.fontawesome.com">
<link rel="dns-prefetch" href="https://kit.fontawesome.com">
<link rel="dns-prefetch" href="https://ka-p.fontawesome.com">