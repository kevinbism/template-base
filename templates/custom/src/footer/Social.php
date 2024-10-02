<?php
global $cms;
$class = $class ?? '';

$social = array(
  'facebook' => array(
    'icona' => 'fa-square-facebook',
    'link' => $cms->getInfoStruttura('social_fb'),
    'name' => 'Facebook'
  ),
  'instagram' => array(
    'icona' => 'fa-instagram',
    'link' => $cms->getInfoStruttura('social_istagram'),
    'name' => 'Instagram'
  ),
  'linkedin' => array(
    'icona' => 'fa-linkedin-in',
    'link' => $cms->getInfoStruttura('social_linkedin'),
    'name' => 'Linkeding'
  ),
  'tripadvisor' => array(
    'icona' => 'fa-tripadvisor',
    'link' => $cms->getInfoStruttura('social_tripadvisor'),
    'name' => 'Tripadvisor'
  ),
  'twitter' => array(
    'icona' => 'fa-twitter',
    'link' => $cms->getInfoStruttura('social_twitter'),
    'name' => 'Twitter'
  ),
  'youtube' => array(
    'icona' => 'fa-youtube',
    'link' => $cms->getInfoStruttura('social_youtube'),
    'name' => 'YouTube'
  ),
  'whatsapp' => array(
    'icona' => 'fa-whatsapp',
    'link' => $cms->getInfoStruttura('social_whatsapp'),
    'name' => 'WhatsApp'
  )
);
?>

<div class="social <?= $class ?>">
  <ul class="social-list flex flex-jc-c">
    <?php
    foreach ($social as $i => $s) {
      if (!empty($s['link'])) {
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