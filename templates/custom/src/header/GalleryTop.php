<?php
global $cms;
$images = ensure_iterable($cms->getModulo("Immagini header"));
?>
<!-- Gallery -->
<section class="gallery">
  <?php if ($images[0]['video'] != '') { ?>
    <div class="gallery-video">
      <?= $cms->getVideo(
        $images[0]['video'],
        [
          'class' => 'gallery-video-container',
          'id' => 'video-gallery',
          'poster' => $cms->getImg($images[0]['files'], '', true)
        ],
        [
          'autoplay',
          'loop',
          'muted',
          'playsinline'
        ]
      );
      ?>
    </div>
    <div class="gallery-video-audio">
      <i class="fal fa-volume-slash gallery-video-audio__icon"></i>
      <i class="fal fa-volume-up gallery-video-audio__icon"></i>
    </div>
    <?php } else {
    if (count($images) == 0) {
      $images = $cms->getBlocco("Gallery Top Default", $cms->array_strutture[0]);
      $images = $images['immagini'];
    }

    $i = 0;
    foreach ($images as $image) {
    ?>
      <figure class="gallery-image <?= $i == 0 ? 'active' : '' ?>">
        <?= $cms->getPicture(
          $image['files'],
          [
            'lazy' => false,
            'priority' => $i == 0,
            'class' => $i != 0 ? 'lazy' : '',
            'classImg' => 'gallery-image__img',
            'title' => $image['title'],
            'mediaQuery' => [
              '(max-width:550px)' => 'vertical_mobile',
              '(max-width:1024px)' => 'medium',
              '(max-width:1920px)' => 'full'
            ]
          ]
        )
        ?>
      </figure>
  <?php $i++;
    }
  } ?>
</section>