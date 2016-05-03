<?php

/**
 * @file
 * Contains \Drupal\sluggify\SluggifyServiceInterface.
 */

namespace Drupal\sluggify;

/**
 * Interface SluggifyServiceInterface.
 *
 * @package Drupal\sluggify
 */
interface SluggifyServiceInterface {
  public function sluggifyfunction($string, $separator = '-', $maxLength = 96);
}
