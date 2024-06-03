<?php
global $cms;
$classList = explode(' ', $class);
?>

<figure class="<?= implode(' ', $classList) ?>" <?= $attr ?>>
  <?= $cms->getPicture($img['files'],
    [
      'priority' => false,
      'class' => 'lazy',
      'lazy' => false,
      'classImg' => $classList[0].'__img',
      'title' => $img['title'],
      'data' => isset($data[0]) ? [$data[0] => $data[1]] : null,
      'type' => $type ?: 'medium',
      'mediaQuery' => [
        '(max-width:769px)' => $qmobile ?: 'thumbnail_mobile',
      ]
    ])
  ?>
</figure>