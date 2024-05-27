<?php
global $cms;
$gallery = $cms->getModulo("Gallery");
?>

<?php $cms->cube_parts('parts.componenti.baseContent'); ?>

<section class="fullgallery">
  <div class="fullgallery-wrapper box-sized">
    <?php if (count($gallery['categorie']) > 0) { ?>
    <ul class="fullgallery-cat flex flex-jc-c flex-wrap">
      <li class="fullgallery-cat__filter fullgallery-cat__filter--active" data-filter="all"><?= $cms->__('Tutte') ?>
      </li>
      <?php foreach ($gallery['categorie'] as $cat){ ?>
      <li class="fullgallery-cat__filter" data-filter="cat_<?= $cat['id_categoria']; ?>"><?= $cat['categoria']; ?></li>
      <?php } ?>
    </ul>
    <?php } ?>

    <?php if(count($gallery['immagini']) > 0) { ?>
    <ul class="fullgallery-main">
      <?php foreach ($gallery['immagini'] as $img){ ?>
      <li class="fullgallery-main__item cat_<?= $img['id_categoria']; ?>">
        <a data-fslightbox data-type="<?= ($img['video']) ? 'video' : 'image' ?>"
          href="<?= ($img['video']) ? $img['video'] : $cms->getImg($img['files']); ?>" rel="fullgallery-main">
          <?= $cms->getPicture($img['files'],
            [
              'priority' => false,
              'class' => 'lazy',
              'lazy' => false,
              'classImg' => 'fullgallery-main__img',
              'title' => $img['title'],
              'mediaQuery' => [
                '(max-width:769px)' => 'thumbnail_mobile',
                '(max-width:1024px)' => 'medium',
              ]
            ])
          ?>
        </a>
      </li>
      <?php } ?>
    </ul>
    <?php } ?>
  </div>
</section>