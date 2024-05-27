<?php
global $cms;
$image = $cms->getModulo('Immagini header');
$image = count($image) > 0 ? $image : $cms->getBlocco("Gallery Top Default")['immagini'];
?>

<link rel="preload" href="<?= $cms->getImg($image[0]['files'], '', true); ?>" as="image">