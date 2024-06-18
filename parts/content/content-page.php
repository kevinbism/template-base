<section class="page p-rel <?= $class ?>">
  <div class="wrapper box-sized">
    <div class="breadcrumb">
      <?= $this->getBreadCrumb("breadcrumb-list", "breadcrumb-item") ?>
    </div>
    <?php
    switch ($type) {
      case 'center':
    ?>
        <div class="page-content text-center">
          <h2 class="subtitle"><?= $this->getSottotitolo() ?></h2>
          <h1 class="title"><?= $this->getTitolo() ?></h1>
          <div class="text"><?= $this->getTesto() ?></div>
          <?php $this->cube_parts('parts.content.link-page'); ?>
          <?php $this->cube_parts('parts.landing.page-landing'); ?>
        </div>
      <?php
        break;
      default:
      ?>
        <div class="page-content">
          <h2 class="subtitle"><?= $this->getSottotitolo() ?></h2>
          <h1 class="title"><?= $this->getTitolo() ?></h1>
          <div class="text"><?= $this->getTesto() ?></div>
          <?php $this->cube_parts('parts.content.link-page'); ?>
          <?php $this->cube_parts('parts.landing.page-landing'); ?>
        </div>
    <?php } ?>
  </div>
</section>