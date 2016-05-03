<?php

/**
 * @file
 * Contains \Drupal\Tests\node\Unit\PageCache\DenyNodePreviewTest.
 */

namespace Drupal\Tests\sluggify\Unit\SluggifyService;

use Drupal\Tests\UnitTestCase;

/**
 * 
 * @dataProvider providerTestSluggifyReturnsSluggifiedString
 */
class SluggifyServiceTest extends UnitTestCase {
  /**
     * @param string $originalString String to be sluggified
     * @param string $expectedResult What we expect our slug result to be
     *
     * @dataProvider providerTestSluggifyReturnsSluggifyString
     */
    public function testSluggifyReturnsSluggifyString($originalString, $expectedResult) {
        $url = new \Drupal\sluggify\SluggifyService();
        $result = $url->sluggifyfunction($originalString);
        $this->assertEquals($expectedResult, $result);
    }
    public function providerTestSluggifyReturnsSluggifyString() {
      return array(
        array('This string will be sluggified', 'this-string-will-be-sluggified'),
        array('THIS STRING WILL BE SLUGGIFIED', 'this-string-will-be-sluggified'),
        array('This1 string2 will3 be 44 sluggified10', 'this1-string2-will3-be-44-sluggified10'),
        array('This! @string#$ %$will ()be "sluggified', 'this-string-will-be-sluggified'),
        array("Tänk efter nu – förr'n vi föser dig bort", 'tank-efter-nu-forrn-vi-foser-dig-bort'),
      );
    }
}
