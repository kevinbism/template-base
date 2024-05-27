<?php
global $cms, $strutture;
$offers = $cms->getModulo("Offerte");
?>

<?php src('layouts.baseContent', ['class' => 'page--center', 'type' => 'center', 'disable_barcode' => true]); ?>

<?php if (count($offers) > 0) { ?>
<section class="offers">
  <div class="offers-wrapper box-sized">
    <ul class="offers__row">
      <?php
      $special_offer = $cms->getBlocco('Offerta speciale');
      if (count($special_offer['immagini']) > 0) {
      ?>
      <li class="offers__item offers__item--special">
        <div class="offers-inner flex flex-column flex-ai-c">
          <?php foreach ($special_offer['immagini'] as $img) {
            src('components.Image', ['img' => $img, 'class' => 'offers-image']);
          } ?>
          <div class="offers-content text-center">
            <h3 class="subtitle"><?= $special_offer['sottotitolo'] ?></h3>
            <div class="text"><?= $cms->tagliaStringa($special_offer['testo'], 200) ?></div>
            <?php
            $link = $special_offer['link'][0];
            src('components.Link', ['link' => $link]);
            ?>
          </div>
        </div>
      </li>
      <?php
      // End special offer
      }

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
        if (!curl_get_file_size($imgOfferta)) {
            $imgOfferta = PATH."assets/images/placeholder.jpg";
        }
      ?>
      <li class="offers__item">
        <div class="offers-inner flex flex-ai-c">
          <figure class="offers-image">
            <picture>
              <img src="<?= $cms->getImgEmptySource() ?>" data-src="<?= $imgOfferta ?>" alt="<?= $titolo ?>"
                class="offers-image__img lazy">
            </picture>
          </figure>
          <div class="offers-content">
            <h3 class="subtitle"><?= $cms->tagliaStringa($titolo, 50) ?></h3>
            <div class="text"><?= $cms->tagliaStringa($descrizione, 200) ?>
            </div>
            <a href="<?= $link ?>" class="link p-rel">
              <svg class="circle" width="40" height="40" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <circle r="19" cx="20" cy="20" stroke="#b9af41" stroke-width="1"
                  stroke-dashoffset="0"
                  fill="transparent" stroke-dasharray="90"></circle>
              </svg>
              <?= $cms->__("Scopri l'offerta") ?>
              <span class="flex-inline flex-ai-c flex-jc-c">
                <i class="fa-thin fa-arrow-right icon"></i>
              </span>
            </a>
          </div>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
</section>
<?php } else { ?>
<section class="page">
  <div class="page-wrapper p-rel box-sized text-center">
    <div class="page-content">
      <div class="page-content__text text mar-auto"><?= $cms->__("Non ci sono offerte disponibili.") ?></div>
    </div>
  </div>
</section>
<?php } ?>