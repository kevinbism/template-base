<?php $link = $this->getModulo('Link cta'); ?>

<?php foreach ($link as $l) { ?>
<?php $this->cube_parts('parts.content.link', ['link' => $l, 'class' => 'page-content__link']) ?><br>
<?php } ?>