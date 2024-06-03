<?php global $cms; ?>

<footer class="footer p-rel">
  <div class="inner text-center">
    <h3 class="subtitle"><?= $cms->getInfoStruttura('nome_struttura') ?> -</h3>
    <?php src('components.Social', ['class' => 'flex-inline']); ?>
  </div>

  <div class="container">
    <?php src('footer.Address'); ?>
    <?php src('footer.MenuFooter'); ?>
  </div>

  <?php src('landing.MenuLanding'); ?>
  <?= $cms->poweredBy('footer-blast text-center', 'footer-blast__link'); ?>
</footer>

<?php src('components.ActionMenu'); ?>
<?php src('footer.Scripts'); ?>
<?php $cms->cube_footer(); ?>
</body>

</html>