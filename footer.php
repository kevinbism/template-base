<footer class="footer p-rel">
  <div class="inner text-center">
    <h3 class="subtitle"><?= $this->getInfoStruttura('nome_struttura') ?> -</h3>
    <?php $this->cube_parts('parts.content.social', ['class' => 'flex-inline']); ?>
  </div>

  <div class="container">
    <?php $this->cube_parts('parts.footer.address'); ?>
    <?php $this->cube_parts('parts.footer.menu-footer'); ?>
  </div>

  <?php $this->cube_parts('parts.landing.menu-landing'); ?>
  <?= $this->poweredBy('footer-blast text-center', 'footer-blast__link'); ?>
</footer>

<?php $this->cube_parts('parts.content.action-menu'); ?>
<?php $this->cube_parts('parts.footer.scripts'); ?>
<?php $this->cube_footer(); ?>
</body>

</html>