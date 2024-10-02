<?php
global $cms;
$offers = ensure_iterable($cms->getModulo("Offerte"));

src('components.ContentPage');

if (empty($offers)) return;
?>
<section class="offers">
  <div class="offers-wrapper box-sized">
    <ul class="offers-list">
      <?php
      foreach ($offers as $offer) {
        $id_albergo = $offer['offerta_id_albergo'];
        $id_prodotto = $offer['offerta_id_prodotto'];
        $id_tipologia = $offer['offerta_tipologia'];
        $id_categoria = $offer['id_categoria'];
        $idStruttura = $cms->getInfoStruttura('id_struttura', $id_albergo, "id_albergo");
        $nomeStruttura = $cms->getInfoStruttura('nome_struttura', $idStruttura);
        $citta = $cms->getInfoStruttura('sito_web', $idStruttura);
        $link = $cms->getLinkOfferte($id_prodotto, $id_albergo);
        $titolo = ucfirst($offer['offerta_titolo']);
        $descrizione = $offer['offerta_descrizione'];

        $imgOfferta = $cms->getImgOfferta($id_albergo, $id_prodotto, 'main');
      ?>
        <li class="offers-item flex flex-column-reverse flex-ai-c">
          <div class="offers-content">
            <h3 class="offers-content__title"><?= $cms->tagliaStringa($titolo, 50) ?></h3>
            <div class="text"><?= $cms->tagliaStringa($descrizione, 200) ?>
            </div>
            <a href="<?= $link ?>" class="link p-rel"><?= $cms->__("dicitura-scopri-offerta") ?></a>
          </div>
          <figure class="offers-image">
            <picture>
              <img src="<?= $cms->getImgEmptySource() ?>" data-src="<?= $imgOfferta ?>" alt="<?= $titolo ?>" class="offers-image__img lazy">
            </picture>
          </figure>
        </li>
      <?php } ?>
    </ul>
  </div>
</section>