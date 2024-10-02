<?php
global $cms;
$minigallery = ensure_iterable($cms->getModulo('Minigallery'));
$class = $class ?? '';

if (empty($minigallery)) return;
?>
<section class="minigallery p-rel <?= $class ?>">
  <div class="minigallery-slider overflow-hidden">
    <div class="swiper-wrapper">
      <?php foreach ($minigallery as $img) { ?>
        <div class="swiper-slide flex flex-ai-c">
          <div data-src="<?= $cms->getImg($img['files']) ?>" class="minigallery-light">
            <?php src('components.Image', ['img' => $img, 'class' => 'minigallery-image']); ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>