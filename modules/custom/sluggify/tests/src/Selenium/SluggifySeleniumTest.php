<?php

/**
 * @file
 * Contains Drupal\Tests\sluggify\Selenium\SluggifySelenium.
 */

/**
 * Class SluggifySelenium
 *
 * @package Drupal\sluggify
 */
class SluggifySelenium extends PHPUnit_Extensions_Selenium2TestCase {

  /**
   * Function which performs the setup tasks
   */
  public function setUp() {
    $this->setHost('localhost');
    $this->setPort(4444);
    $this->setBrowserUrl('http://selenium.local:8888');
    $this->setBrowser('firefox');
  }

  /**
   * Function which tests Sluggify URL by logging in.
   * 
   * @param string $originalString String to be sluggified
   * @param string $expectedResult What we expect our slug result to be
   * 
   * @dataProvider providertestSluggifyWithLogin
   */
  public function testSluggifyWithLogin($originalString, $expectedResult) {
    // Go to the Login Page.
    $this->url('user/login');
    // Enter URL Creds.
    $this->byXPath('//*[@id="edit-name"]')->value('admin');
    $this->byXPath('//*[@id="edit-pass"]')->value('admin');
    // Hit Submit.
    $this->byId('user-login-form')->submit();
    $content = $this->byXPath('//*[@id="block-blog-themes-page-title"]/div[2]/h1')->text();
    // See if the user logs in.
    $this->assertEquals('ADMIN', $content);
    // Go to the Sluggify form.
    $this->url('sluggify/form');
    $this->byXPath('//*[@id="edit-url"]')->value($originalString);
    $this->byId('sluffigy-form')->submit();
    $content = $this->byXPath('//*[@id="main-content"]/div[1]/div/div')->text();
    $this->assertContains($expectedResult, $content);
  }
  
  /**
   * Data Provider for testSluggifyWithLogin
   *
   * @return array
   *   Array of arguments for the function which is to be tested.
   */
  public function providertestSluggifyWithLogin() {
      return array(
        array('This string will be sluggified', 'this-string-will-be-sluggified'),
        array('THIS STRING WILL BE SLUGGIFIED', 'this-string-will-be-sluggified'),
        array('This1 string2 will3 be 44 sluggified10', 'this1-string2-will3-be-44-sluggified10'),
        array('This! @string#$ %$will ()be "sluggified', 'this-string-will-be-sluggified'),
        array("Tänk efter nu – förr'n vi föser dig bort", 'tank-efter-nu-forrn-vi-foser-dig-bort'),
      );
    }

  /**
   * Function which shutdowns our session.
   */
  public function tearDown() {
    $this->stop();
  }

}
