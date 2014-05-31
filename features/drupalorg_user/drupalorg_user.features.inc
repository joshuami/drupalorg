<?php
/**
 * @file
 * drupalorg_user.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function drupalorg_user_image_default_styles() {
  $styles = array();

  // Exported image style: drupalorg_user_picture.
  $styles['drupalorg_user_picture'] = array(
    'name' => 'drupalorg_user_picture',
    'label' => 'Drupal.org user picture',
    'effects' => array(
      4 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => '80',
          'height' => '80',
        ),
        'weight' => '2',
      ),
    ),
  );

  return $styles;
}