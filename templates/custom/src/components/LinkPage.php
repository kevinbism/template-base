<?php
global $cms;
$links = ensure_iterable($cms->getModulo('Link cta'));
?>

<?php foreach ($links as $link) { ?>
  <?php src('components.Link', ['link' => $link, 'class' => 'page-content__link']) ?><br>
<?php } ?>