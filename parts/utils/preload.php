<?php
global $cms;
$image = $cms->getModulo('Immagini header');
$image = count($image) > 0 ? $image : $cms->getBlocco("Gallery Top Default")['immagini'];
?>

<link rel="preload" href="<?= $cms->getImg($image[0]['files'], '', true); ?>" as="image">
<link rel="preconnect" href="https://kit.fontawesome.com">
<link rel="preconnect" href="https://ka-p.fontawesome.com">
<link rel="dns-prefetch" href="https://kit.fontawesome.com">
<link rel="dns-prefetch" href="https://ka-p.fontawesome.com">
<link rel="preconnect" href="https://use.typekit.net">
<link rel="dns-prefetch" href="https://use.typekit.net">
<link as="style" href="https://use.typekit.net/hxu2dbs.css" rel="preload">
<link rel="stylesheet" href="https://use.typekit.net/hxu2dbs.css">