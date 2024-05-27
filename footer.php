<?php global $cms; ?>

<footer class="footer p-rel">
  <div class="inner text-center">
    <h3 class="subtitle"><?= $cms->getInfoStruttura('nome_struttura') ?> -</h3>
    <?php src('components.Social', ['class' => 'flex-inline']); ?>
  </div>

  <?php src('components.Partners'); ?>

  <div class="container">
    <address class="footer-address text">
      <?= $cms->getInfoStruttura("indirizzo") ?><br>
      Tel. <a
        href="tel:<?= trim($cms->getInfoStruttura("telefono")) ?>"><?= $cms->getInfoStruttura("telefono") ?></a> - Fax:
      <a href="tel:<?= trim($cms->getInfoStruttura("fax")) ?>"><?= $cms->getInfoStruttura("fax") ?></a><br>
      <a href="mailto:<?= $cms->getInfoStruttura("email") ?>"><?= $cms->getInfoStruttura("email") ?></a><br>
      <?= $cms->__('P.IVA') ?> <?= $cms->getInfoStruttura('partita_iva') ?>
    </address>
    <?php src('utils.Menu.bottom'); ?>
    <?php src('components.Newsletter'); ?>
  </div>

  <?php src('utils.Landing.menu'); ?>
  <?= $cms->poweredBy('footer-blast text-center', 'footer-blast__link'); ?>
</footer>
<!-- Close smooth-wrapper -->
</div>
<!-- Close smooth-content -->
</div>

<?php src('components.ActionMenu'); ?>

<!-- INPUT HIDDEN -->
<input id="lang" type="hidden" value="<?= $cms->sigla_lingua ?>">
<!-- CSS -->
<noscript id="deferred-styles">
  <link rel="stylesheet" href="<?= PATH ?>assets/css/dist/style.min.css">
</noscript>
<script>
var srcJS = [
  "<?=$cms->getLibreria("swiper", '5')['js'] ?>",
  "<?=$cms->getLibreria("fs-lightbox")['js'] ?>",
];

var loadDeferredStyles = function() {
  var addStylesNode = document.getElementById("deferred-styles");
  var replacement = document.createElement("div");
  replacement.innerHTML = addStylesNode.textContent;
  document.body.appendChild(replacement);
  addStylesNode.parentElement.removeChild(addStylesNode);
};
var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
if (raf) raf(function() {
  window.setTimeout(loadDeferredStyles, 0);
});
else window.addEventListener('load', loadDeferredStyles);
</script>
<!-- Scripts -->
<script src="https://kit.fontawesome.com/387e82776f.js" crossorigin="anonymous" defer></script>
<script src="<?=$cms->getLibreria("dario")['js'] ?>" defer></script>
<script src="<?=$cms->getLibreria("swalle")['js'] ?>" defer></script>
<script src="<?=$cms->getLibreria("caos")['js'] ?>" defer></script>
<script src="<?=$cms->getLibreria("gsap")['js'] ?>" defer></script>
<script src="<?=$cms->getLibreria("scroll-trigger")['js'] ?>" defer></script>
<script src="<?=$cms->getLibreria("scroll-smoother")['js']?>" defer></script>
<script src="<?= PATH ?>assets/js/dist/main.min.js" defer></script>

<?php $cms->cube_footer(); ?>
</body>

</html>