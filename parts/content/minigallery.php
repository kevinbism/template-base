<?php
$minigallery = $this->getModulo('Minigallery');

if (count($minigallery) > 0) {
?>

<section class="minigallery p-rel <?= $class ?>">
  <div class="minigallery-slider overflow-hidden">
    <div class="swiper-wrapper">
      <?php foreach ($minigallery as $img) { ?>
      <div class="swiper-slide">
        <div data-src="<?= $this->getImg($img['files']) ?>" class="minigallery-light">
          <?php src('content.image', ['img' => $img, 'class' => 'minigallery-image']); ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php } ?>