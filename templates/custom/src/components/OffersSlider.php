<?php
global $cms;
$offers = $cms->getBlocco('Blocco Offerte Slider');
$offers_items = ensure_iterable($offers['offerte']);

if (empty($offers_items)) return;
?>
<section class="box box-offers text-center">
  <div class="box-offers-wrapper p-rel">
    <div class="box-offers-slider overflow-hidden">
      <div class="swiper-wrapper">
        <?php
        foreach ($offers_items as $offer) {
          $id_albergo          = $offer['offerta_id_albergo'];
          $id_prodotto         = $offer['offerta_id_prodotto'];
          $idStruttura         = $cms->getInfoStruttura('id_struttura', $id_albergo, "id_albergo");
          $nomeStruttura       = $cms->getInfoStruttura('nome_struttura', $idStruttura);
          $min_los             = $offer['min_los'];
          $offerta_titolo      = ucfirst($offer['offerta_titolo']);
          $offerta_descrizione = $offer['offerta_descrizione'];
          $link                = $cms->getLinkOfferte($id_prodotto, $id_albergo);

          $imgOfferta = $cms->getImgOfferta($id_albergo, $id_prodotto, 'main');
        ?>
          <div class="swiper-slide">
            <figure class="box-offers-image">
              <picture>
                <img src="<?= $cms->getImgEmptySource() ?>" data-src="<?= $imgOfferta ?>" alt="<?= $offerta_titolo ?>" class="box-offers-image__img lazy">
              </picture>
            </figure>
            <div class="box-offers-content mar-auto">
              <h3 class="box-offers-content__title subtitle"><?= $cms->tagliaStringa($offerta_titolo, 20) ?></h3>
              <div class="box-offers-content__text text"><?= $cms->tagliaStringa($offerta_descrizione, 150) ?>
              </div>
              <a href="<?= $link ?>" class="box-offers-content__link link">
                <?= $cms->__('dicitura-scopri-offerta') ?>
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>