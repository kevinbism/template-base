<?php global $cms; ?>
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
<script src="<?= PATH ?>assets/js/dist/main.min.js" defer></script>