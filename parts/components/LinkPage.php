<?php
global $cms;
$link = $cms->getModulo('Link cta');
?>

<?php foreach ($link as $l) { ?>
<?php src('components.Link', ['link' => $l, 'class' => 'page-content__link']) ?><br>
<?php } ?>