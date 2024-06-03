<?php
global $action_be;
?>

<!-- Quick Reserve -->
<div class="qr">
  <form action="https://www.blastnessbooking.com/<?= $action_be ?>" id="qr-form" class="qr-form" method="get">
    <input type="hidden" name="id_albergo" value="<?= $this->getInfoStruttura('id_albergo', $this->id_struttura); ?>">
    <input type="hidden" name="dc" value="<?= $this->getInfoStruttura('dc', $this->id_struttura) ?>">
    <input type="hidden" name="id_stile" value="<?= $this->getInfoStruttura('id_stile', $this->id_struttura); ?>">
    <input type="hidden" name="lingua_int" value="<?= $this->sigla_lingua; ?>">
    <input type="hidden" name="gg" id="gg" value="">
    <input type="hidden" name="mm" id="mm" value="">
    <input type="hidden" name="aa" id="aa" value="">
    <input type="hidden" name="notti_1" id="notti_1" value="1">

    <div class="qr-container flex flex-jc-c flex-ai-c flex-column">
      <div class="qr-item qr-item--calendar flex flex-column">
        <div class="qr-label">
          <span class="qr-d qr-d-in">10</span>
          <span class="qr-m qr-m-in">Gen</span>
          <span class="qr-y qr-y-in">2024</span>
        </div>
        <div class="qr-label">
          <span class="qr-d qr-d-out">11</span>
          <span class="qr-m qr-m-out">Gen</span>
          <span class="qr-y qr-y-out">2024</span>
        </div>
        <input class="qr-input" type="text" id="calendario"
          data-mindate="<?= $this->getImpostazione('data_apertura') ?>"
          readonly>
      </div>
      <div class="qr-item">
        <label for="tot_adulti" class="qr-label text-center">
          <span class="qr-label__number">2</span>
          <span class="qr-label__text"><?= $this->__('adulti') ?></span>
          <select name="tot_adulti" id="tot_adulti" class="qr-select">
            <?php for ($i = 1; $i <= $this->info_sito('preset_adulti'); $i++) { ?>
            <option <?= ($i == 2) ? 'selected="selected"' : '' ?>
              data-text="<?= ($i == 1) ? $this->__('adulto') : $this->__('adulti') ?>" value="<?= $i ?>"><?= $i ?>
              <?= ($i == 1) ? $this->__('adulto') : $this->__('adulti') ?></option>
            <?php } ?>
          </select>
        </label>
      </div>
      <div class="qr-item">
        <label for="tot_bambini" class="qr-label text-center">
          <span class="qr-label__number">0</span>
          <span class="qr-label__text"><?= $this->__('bambini') ?></span>
          <select name="tot_bambini" id="tot_bambini" class="qr-select">
            <?php for ($i = 0; $i <= $this->info_sito('preset_bambini'); $i++) { ?>
            <option <?= ($i == 0) ? 'selected="selected"' : '' ?>
              data-text="<?= ($i == 1) ? $this->__('bambino') : $this->__('bambini') ?>" value="<?= $i ?>"><?= $i ?>
              <?= ($i == 1) ? $this->__('bambino') : $this->__('bambini') ?></option>
            <?php } ?>
          </select>
        </label>
      </div>
      <div class="qr-item">
        <label for="tot_camere" class="qr-label text-center">
          <span class="qr-label__number">1</span>
          <span class="qr-label__text"><?= $this->__('Camera') ?></span>
          <select name="tot_camere" id="tot_camere" class="qr-select">
            <?php for ($i = 1; $i <= $this->info_sito('preset_camere'); $i++) { ?>
            <option <?= ($i == 1) ? 'selected="selected"' : '' ?>
              data-text="<?= ($i == 1) ? $this->__('camera') : $this->__('camere') ?>" value="<?= $i ?>"><?= $i ?>
              <?= ($i == 1) ? $this->__('camera') : $this->__('camere') ?></option>
            <?php } ?>
          </select>
        </label>
      </div>
      <div class="qr-item qr-item--book flex flex-column flex-jc-c">
        <button class="qr-book" type="submit"><?= $this->__('prenota ora') ?></button>
        <a class="qr-link text-center"
          href="<?= $this->getLinkBooking("cancella_modifica") ?>"><?= $this->__('Modifica/Cancella prenotazione') ?></a>
      </div>
    </div>
  </form>
</div>