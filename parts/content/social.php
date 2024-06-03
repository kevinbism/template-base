<?php
$social = array(
  'facebook' => array (
    'icona' => 'fa-facebook',
    'link' => $this->getInfoStruttura('social_fb'),
    'name' => 'Facebook'
  ),
  'instagram' => array (
    'icona' => 'fa-instagram',
    'link' => $this->getInfoStruttura('social_istagram'),
    'name' => 'Instagram'
  ),
  'twitter' => array (
    'icona' => 'fa-twitter',
    'link' => $this->getInfoStruttura('social_twitter'),
    'name' => 'Twitter'
  ),
  'linkedin' => array (
    'icona' => 'fa-linkedin-in',
    'link' => $this->getInfoStruttura('social_linkedin'),
    'name' => 'Linkeding'
  ),
  'youtube' => array (
    'icona' => 'fa-youtube',
    'link' => $this->getInfoStruttura('social_youtube'),
    'name' => 'YouTube'
  ),
  'whatsapp' => array (
    'icona' => 'fa-whatsapp',
    'link' => $this->getInfoStruttura('social_whatsapp'),
    'name' => 'WhatsApp'
  )
);

?>

<div class="social <?= $class ?>">
  <ul class="social-list flex flex-jc-c">
    <?php
    foreach ($social as $i => $s) {
      if ($s['link']) {
    ?>
    <li class="social-item">
      <a class="social__link" href="<?= $s['link'] ?>" target="_blank">
        <i class="fa-brands <?= $s['icona'] ?> fa-fw social__icon"></i>
      </a>
    </li>
    <?php
      }
    } ?>
  </ul>
</div>