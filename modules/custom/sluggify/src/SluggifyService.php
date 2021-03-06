<?php

/**
 * @file
 * Contains \Drupal\sluggify\SluggifyService.
 */

namespace Drupal\sluggify;

/**
 * Class SluggifyService.
 *
 * @package Drupal\sluggify
 */
class SluggifyService implements SluggifyServiceInterface {
  /**
   * Constructor.
   */
  public function __construct() {}

  public function sluggifyfunction($string, $separator = '-', $maxLength = 96) {
    $title = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
    $title = preg_replace("%[^-/+|\w ]%", '', $title);
    $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
    $title = preg_replace("/[\/_|+ -]+/", $separator, $title);
    return $title;
  }
}
