<?php $gallery = $this->getModulo("Gallery"); ?>

<?php $this->cube_parts('parts.content.content-page'); ?>

<section class="gallery-page">
  <div class="gallery-page-wrapper box-sized">
    <?php if (count($gallery['categorie']) > 0) { ?>
    <ul class="gallery-page-cat flex flex-jc-c flex-wrap">
      <li class="gallery-page-cat__filter gallery-page-cat__filter--active" data-filter="all"><?= $this->__('Tutte') ?>
      </li>
      <?php foreach ($gallery['categorie'] as $cat){ ?>
      <li class="gallery-page-cat__filter" data-filter="cat_<?= $cat['id_categoria']; ?>"><?= $cat['categoria']; ?></li>
      <?php } ?>
    </ul>
    <?php } ?>

    <?php if(count($gallery['immagini']) > 0) { ?>
    <ul class="gallery-page-main">
      <?php foreach ($gallery['immagini'] as $img){ ?>
      <li class="gallery-page-item cat_<?= $img['id_categoria']; ?>">
        <a data-fslightbox data-type="<?= ($img['video']) ? 'video' : 'image' ?>"
          href="<?= ($img['video']) ? $img['video'] : $this->getImg($img['files']); ?>" rel="gallery-page-main">
          <?php $this->cube_parts('parts.content.image', ['class' => 'gallery-page-image']); ?>
        </a>
      </li>
      <?php } ?>
    </ul>
    <?php } ?>
  </div>
</section>