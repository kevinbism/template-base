<?php
global $cms, $action_be;
?>

<!-- Quick Reserve -->
<div class="qr flex">
  <form action="https://www.blastnessbooking.com/<?= $action_be ?>" id="qr-form" class="qr-form flex flex-jc-c flex-ai-c" method="get">
    <input type="hidden" name="id_albergo" value="<?= $cms->getInfoStruttura('id_albergo', $cms->id_struttura); ?>">
    <input type="hidden" name="dc" value="<?= $cms->getInfoStruttura('dc', $cms->id_struttura) ?>">
    <input type="hidden" name="id_stile" value="<?= $cms->getInfoStruttura('id_stile', $cms->id_struttura); ?>">
    <input type="hidden" name="lingua_int" value="<?= $cms->sigla_lingua; ?>">
    <input type="hidden" name="gg" id="gg" value="">
    <input type="hidden" name="mm" id="mm" value="">
    <input type="hidden" name="aa" id="aa" value="">
    <input type="hidden" name="notti_1" id="notti_1" value="1">

    <div class="qr-container">
      <div class="qr-item qr-item--calendar flex flex-ai-c flex-jc-c">
        <div class="qr-item">
          <div class="qr-label">
            <span class="qr-d qr-d-in">10</span> <span class="qr-m qr-m-in">07</span> <span class="qr-m qr-y-in">2024</span>
          </div>
        </div>
        <div class="qr-item">
          <div class="qr-label">
            <span class="qr-d qr-d-out">11</span> <span class="qr-m qr-m-out">07</span> <span class="qr-m qr-y-out">2024</span>
          </div>
        </div>
        <input class="qr-input" type="text" id="calendario" data-mindate="<?= $cms->getImpostazione('data_apertura') ?>" readonly>
      </div>
      <div class="qr-item qr-item--occupancy flex flex-ai-c flex-jc-c">
        <div class="qr-item">
          <label for="tot_adulti" class="qr-label">
            <div class="qr-label__text"><?= $cms->__('dicitura-adulti') ?></div>
            <span class="qr-label__number">2</span>
            <select name="tot_adulti" id="tot_adulti" class="qr-select">
              <?php for ($i = 1; $i <= $cms->info_sito('preset_adulti'); $i++) { ?>
                <option <?= ($i == 2) ? 'selected="selected"' : '' ?> data-text="<?= ($i == 1) ? $cms->__('dicitura-adulto') : $cms->__('dicitura-adulti') ?>" value="<?= $i ?>"><?= $i ?>
                  <?= ($i == 1) ? $cms->__('dicitura-adulto') : $cms->__('dicitura-adulti') ?></option>
              <?php } ?>
            </select>
          </label>
        </div>
        <div class="qr-item">
          <label for="tot_bambini" class="qr-label text-center">
            <div class="qr-label__text"><?= $cms->__('dicitura-bambini') ?></div>
            <span class="qr-label__number">0</span>
            <select name="tot_bambini" id="tot_bambini" class="qr-select">
              <?php for ($i = 0; $i <= $cms->info_sito('preset_bambini'); $i++) { ?>
                <option <?= ($i == 0) ? 'selected="selected"' : '' ?> data-text="<?= ($i == 1) ? $cms->__('dicitura-bambino') : $cms->__('dicitura-bambini') ?>" value="<?= $i ?>"><?= $i ?>
                  <?= ($i == 1) ? $cms->__('dicitura-bambino') : $cms->__('dicitura-bambini') ?></option>
              <?php } ?>
            </select>
          </label>
        </div>
        <div class="qr-item">
          <label for="tot_camere" class="qr-label text-center">
            <div class="qr-label__text"><?= $cms->__('dicitura-camere') ?></div>
            <span class="qr-label__number">1</span>
            <select name="tot_camere" id="tot_camere" class="qr-select">
              <?php for ($i = 1; $i <= $cms->info_sito('preset_camere'); $i++) { ?>
                <option <?= ($i == 1) ? 'selected="selected"' : '' ?> data-text="<?= ($i == 1) ? $cms->__('dicitura-camera') : $cms->__('dicitura-camere') ?>" value="<?= $i ?>"><?= $i ?>
                  <?= ($i == 1) ? $cms->__('dicitura-camera') : $cms->__('dicitura-camere') ?></option>
              <?php } ?>
            </select>
          </label>
        </div>
      </div>
      <div class="qr-item qr-item--code">
        <input class="qr-code" id="generic_codice" type="text" name="generic_codice" placeholder="<?= $cms->__('dicitura-codice-sconto') ?>">
      </div>
      <div class="qr-item qr-item--book">
        <button class="qr-book flex-inline flex-jc-c" type="submit"><i class="fa-regular fa-bell-concierge qr-book__icon"></i> <?= $cms->__('dicitura-prenota') ?></button>
      </div>
      <div class="qr-item qr-item--link text-center">
        <a class="qr-link" href="<?= $cms->getLinkBooking("cancella_modifica") ?>"><?= $cms->__('dicitura-modifica-cancella') ?></a>
      </div>
    </div>
  </form>
</div>