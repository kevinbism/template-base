<?php
$images = $this->getModulo("Immagini header");

if ($this->getVar('type-gallery') == 'Normale' || $this->getVar('type-gallery') == 'Ridotta' || $this->sub_classe == "landing") {
?>

<!-- Gallery -->
<section class="gallery">
  <?php if ($images[0]['video'] != '') { ?>
  <div class="gallery-video">
    <?= $this->getVideo($images[0]['video'],
      [
        'class' => 'gallery-video-container',
        'poster' => $this->getImg($images[0]['files'], '', true)
      ],
      [
        'autoplay',
        'loop',
        'muted',
        'playsinline'
      ]);
    ?>
    <div class="gallery-video-audio">
      <i class="fal fa-volume-slash gallery-video-audio__icon"></i>
      <i class="fal fa-volume-up gallery-video-audio__icon"></i>
    </div>
  </div>
  <?php } else {
    if (count($images) == 0) {
      $images = $this->getBlocco("Gallery Top Default", $this->array_strutture[0]);
      $images = $images['immagini'];
    }

    $i = 0;
    foreach ($images as $image) {
    ?>
  <figure class="gallery-image <?= $i == 0 ? 'active' : '' ?>">
    <?= $this->getPicture($image['files'],
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
      ])
    ?>
  </figure>
  <?php $i++; }
  } ?>
</section>
<?php } ?>