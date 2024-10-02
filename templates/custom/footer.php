<?php global $cms; ?>
<footer class="footer p-rel text-center">
  <?php
  src('footer.Address');
  src('footer.Social');
  src('footer.MenuFooter');
  src('landing.MenuLanding');
  ?>
  <div class="footer-inner p-rel flex flex-jc-sb">
    <span><?= $cms->__('dicitura-partita-iva') ?> <?= $cms->getInfoStruttura('partita_iva') ?></span>
    <?= $cms->poweredBy('footer-blast text-center', 'footer-blast__link'); ?>
    <span class="footer-up"></span>
  </div>
</footer>

<?php src('components.ActionMenu'); ?>
<?php src('footer.Scripts'); ?>
<?php $cms->cube_footer(); ?>
</body>

</html>