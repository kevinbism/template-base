<?php
global $cms;
$offers = $cms->getBlocco('Offerta speciale');

if (count($offers['immagini']) > 0) {
?>

<section class="box box-offers flex flex-ai-c">
  <?php foreach ($offers['immagini'] as $img) {
    src('components.Image', ['img' => $img, 'class' => 'image', 'attr' => 'data-caos="fade-right" data-caos-delay="500"']);
  } ?>
  <div class="content flex flex-column flex-ai-start">
    <h2 class="title title-xl" data-caos="fade-up"><?= $offers['titolo'] ?></h2>
    <h3 class="subtitle" data-caos="fade-up"><?= $offers['sottotitolo'] ?></h3>
    <div class="text" data-caos="fade-up"><?= $offers['testo'] ?></div>
    <?php foreach ($offers['link'] as $link) {
      src('components.Link', ['link' => $link, 'attr' => 'data-caos="fade-up"']);
    } ?>
</section>

<?php } ?>