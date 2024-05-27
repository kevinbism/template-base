<?php
global $cms;
?>

<?php foreach ($cms->getModulo('Box intro') as $box) { ?>
<section class="box box-intro">
  <div class="container flex flex-ai-start">
    <div class="content">
      <h2 class="subtitle" data-caos="fade-left"><?= $box['sottotitolo'] ?></h2>
      <h1 class="title" data-caos="fade-left" data-caos-delay="400"><?= $box['titolo'] ?></h1>
    </div>
    <div class="inner p-rel">
      <?php src('components.Barcode', ['class' => 'barcode--white']); ?>
      <?php foreach ($box['immagine dx'] as $img) {
        src('components.Image', ['img' => $img, 'class' => 'image', 'attr' => 'data-caos="fade-up"']);
      } ?>
    </div>
  </div>
  <div class="container container--image">
    <?php
    foreach ($box['immagine landscape'] as $img) {
      src('components.Image', ['img' => $img, 'class' => 'image image--landscape', 'attr' => 'data-caos="fade-up"', 'type' => 'full']);
    }
    foreach ($box['link'] as $link) {
      src('components.Link', ['link' => $link, 'class' => 'link', 'attr' => 'data-caos="fade-up"']);
    }
    ?>
  </div>
</section>
<?php } ?>

<?php foreach ($cms->getModulo('Box camere') as $box) { ?>
<section class="box box-rooms flex">
  <div class="content">
    <h3 class="subtitle text-white" data-caos="fade-up"><?= $box['sottotitolo'] ?></h3>
    <h2 class="title text-white" data-caos="fade-up"><?= $box['titolo'] ?></h2>
    <div class="text text-white" data-caos="fade-up"><?= $box['testo'] ?></div>
    <?php foreach ($box['link'] as $link) {
      src('components.Link', ['link' => $link, 'class' => 'link text-white', 'attr' => 'data-caos="fade-up"']);
    } ?>
  </div>
  <div class="inner">
    <div class="slider overflow-hidden fade">
      <div class="swiper-wrapper">
        <?php foreach ($box['immagini'] as $img) { ?>
        <div class="swiper-slide">
          <?php src('components.Image', ['img' => $img, 'class' => 'image']); ?>
        </div>
        <?php } ?>
      </div>
    </div>
    <div class="arrow">
      <?php src('svg.ArrowRight', ['attr' => 'data-caos="fade-up"']) ?>
    </div>
  </div>
</section>
<?php } ?>

<?php foreach ($cms->getModulo('Box location') as $img) { ?>
<section class="box box-location" data-caos>
  <h2 class="title title-xl" data-caos="fade-left"><?= $img['titolo'] ?></h2>
  <div class="container p-rel">
    <?php src('components.Image', ['img' => $img, 'class' => 'image', 'attr' => 'data-caos="fade"', 'type' => 'full']); ?>
    <div class="content slow-up">
      <h3 class="subtitle text-white"><?= $img['sottotitolo'] ?></h3>
      <div class="text text-white"><?= $img['descrizione'] ?></div>
      <?php if ($img['link']) {
        src('components.Link', ['link' => $img, 'class' => 'link text-white']);
      } ?>
    </div>
  </div>
  <?php src('components.Barcode', ['class' => 'barcode--small flex-jc-c']); ?>
</section>
<?php } ?>

<?php src('components.VerticalContent', ['module' => 'Elenco immagini verticali']); ?>

<?php src('components.Barcode', ['class' => 'barcode--small flex-jc-c']); ?>

<?php foreach ($cms->getModulo('Immagini flutuanti') as $box) { ?>
<section class="box box-float">
  <?php
  foreach ($box['immagine sx'] as $img) {
    src('components.Image', ['img' => $img, 'class' => 'image fade', 'type' => 'full']);
  }
  foreach ($box['immagine dx'] as $img) {
    src('components.Image', ['img' => $img, 'class' => 'image image--float slow-up']);
  }
  src('components.Barcode');
  ?>
</section>
<?php } ?>

<section class="box box-restaurant">
  <div class="wrapper flex" style="--length-width: <?= count($cms->getModulo('Box ristoranti')) ?>">
    <?php foreach ($cms->getModulo('Box ristoranti') as $box) { ?>
    <div class="item flex flex-ai-c">
      <?php foreach ($box['immagine'] as $img) {
      src('components.Image', ['img' => $img, 'class' => 'image']);
    } ?>
      <div class="content">
        <h2 class="title title-xl"><?= $box['titolo'] ?></h2>
        <h3 class="subtitle"><?= $box['sottotitolo'] ?></h3>
        <div class="text"><?= $box['testo'] ?></div>
        <?php foreach ($box['link'] as $link) {
        src('components.Link', ['link' => $link, 'class' => 'link']);
      } ?>
      </div>
    </div>
    <?php } ?>
  </div>
</section>

<?php foreach ($cms->getModulo('Box spa') as $box) { ?>
<section class="box box-spa">
  <div class="parallax p-rel">
    <h2 class="title title-xl text-white text-center"><?= $box['titolo'] ?></h2>
    <?php foreach ($box['parallax'] as $img) {
      src('components.Image', ['img' => $img, 'class' => 'image overflow-hidden', 'type' => 'full', 'data' => ['speed', 0.5]]);
    } ?>
  </div>
  <div class="container">
    <div class="content">
      <h3 class="subtitle" data-caos="fade-up"><?= $box['sottotitolo'] ?></h3>
      <div class="text" data-caos="fade-up"><?= $box['testo'] ?></div>
      <?php foreach ($box['link'] as $link) {
        src('components.Link', ['link' => $link, 'class' => 'link', 'attr' => 'data-caos="fade-up"']);
      } ?>
    </div>
    <div class="slider overflow-hidden fade">
      <div class="swiper-wrapper">
        <?php foreach ($box['minigallery'] as $img) { ?>
        <div class="swiper-slide">
          <?php src('components.Image', ['img' => $img, 'class' => 'image']); ?>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php foreach ($cms->getModulo('Immagini flutuanti inferiore') as $box) { ?>
<section class="box box-float box-float--middle">
  <div class="wrapper p-rel">
    <?php
    foreach ($box['immagine sx'] as $img) {
      src('components.Image', ['img' => $img, 'class' => 'image fade', 'type' => 'full']);
    }
    foreach ($box['immagine dx'] as $img) {
      src('components.Image', ['img' => $img, 'class' => 'image image--float slow-up']);
    }
    ?>
  </div>
  <div class="container flex flex-ai-end">
    <div class="content">
      <h2 class="title title-xl" data-caos="fade-up"><?= $box['titolo'] ?></h2>
      <h3 class="subtitle" data-caos="fade-up"><?= $box['sottotitolo'] ?></h3>
      <div class="text" data-caos="fade-up"><?= $box['testo'] ?></div>
      <?php foreach ($box['link'] as $link) {
        src('components.Link', ['link' => $link, 'class' => 'link', 'attr' => 'data-caos="fade-up"']);
      } ?>
    </div>
    <div class="inner flex flex-jc-c">
      <div class="slider-vertical overflow-hidden" data-caos="fade">
        <div class="swiper-wrapper">
          <?php foreach ($box['blocco dinamico']  as $item) { ?>
          <div class="swiper-slide">
            <h3 class="subtitle"><?= $item['titolo'] ?></h3>
            <h2 class="title title-xl"><?= $item['sottotitolo'] ?></h2>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php foreach ($cms->getModulo('Box eco') as $box) { ?>
<section class="box box-eco">
  <?php foreach ($box['immagine'] as $img) {
    src('components.Image', ['img' => $img, 'class' => 'image', 'type' => 'full', 'attr' => 'data-caos="fade"']);
  } ?>
  <div class="content">
    <h2 class="title title-xl" data-caos="fade-up"><?= $box['titolo'] ?></h2>
    <h3 class="subtitle" data-caos="fade-up"><?= $box['sottotitolo'] ?></h3>
    <div class="text" data-caos="fade-up"><?= $box['testo'] ?></div>
    <?php foreach ($box['link'] as $link) {
      src('components.Link', ['link' => $link, 'class' => 'link', 'attr' => 'data-caos="fade-up"']);
    } ?>
  </div>
</section>
<?php } ?>