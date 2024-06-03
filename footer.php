<footer class="footer p-rel">
  <div class="inner text-center">
    <h3 class="subtitle"><?= $cms->getInfoStruttura('nome_struttura') ?> -</h3>
    <?php src('content.social', ['class' => 'flex-inline']); ?>
  </div>

  <div class="container">
    <?php src('footer.address'); ?>
    <?php src('footer.menu-footer'); ?>
  </div>

  <?php src('landing.menu-landing'); ?>
  <?= $cms->poweredBy('footer-blast text-center', 'footer-blast__link'); ?>
</footer>

<?php src('content.action-menu'); ?>
<?php src('footer.scripts'); ?>
<?php $cms->cube_footer(); ?>
</body>

</html>