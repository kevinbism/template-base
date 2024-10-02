<?php
global $cms;
$rooms = ensure_iterable($cms->getModulo('Elenco camere'));
src('components.ContentPage');

if (empty($rooms)) return;
?>

<section class="box rooms">
  <?php foreach ($rooms as $room) { ?>
    <div class="rooms-item flex flex-ai-c">
      <figure class="rooms-image">
        <?= $cms->getPicture(
          $cms->getImgAnteprima($room['id_pagina']),
          [
            'priority' => false,
            'class' => 'lazy',
            'lazy' => false,
            'classImg' => 'rooms-image__img',
            'title' => $room['testo_link'],
            'type' => 'medium',
            'mediaQuery' => [
              '(max-width:769px)' => 'thumbnail_mobile',
            ]
          ]
        )
        ?>
      </figure>
      <div class="rooms-content">
        <h3 class="rooms-content__title title title-xl"><?= $room['testo_link'] ?></h3>
      </div>
    </div>
  <?php } ?>
</section>