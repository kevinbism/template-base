<?php
global $cms;
$gallery = $cms->getModulo("Gallery");

src('components.ContentPage');
?>

<section class="gallery-page">
  <div class="gallery-page-wrapper">
    <?php
    $categories = ensure_iterable($gallery['categorie']);
    if (!empty($categories)) { ?>
      <ul class="gallery-page-cat flex flex-jc-c flex-wrap">
        <li class="gallery-page-cat__filter active" data-filter="all"><?= $cms->__('dicitura-all') ?>
        </li>
        <?php foreach ($categories as $cat) { ?>
          <li class="gallery-page-cat__filter" data-filter="<?= $cat['id_categoria']; ?>"><?= $cat['categoria']; ?></li>
        <?php } ?>
      </ul>
    <?php } ?>

    <?php
    $images = ensure_iterable($gallery['immagini']);
    if (!empty($images)) { ?>
      <ul class="gallery-page-main">
        <?php foreach ($images as $img) { ?>
          <li class="gallery-page-item" data-category="<?= $img['id_categoria']; ?>">
            <a data-fslightbox data-type="<?= ($img['video']) ? 'video' : 'image' ?>" href="<?= ($img['video']) ? $img['video'] : $cms->getImg($img['files']); ?>" rel="gallery-page-main">
              <?php src('components.Image', ['img' => $img, 'class' => 'gallery-page-image']) ?>
            </a>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
</section>