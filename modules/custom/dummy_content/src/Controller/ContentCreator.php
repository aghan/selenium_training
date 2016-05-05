<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Drupal\dummy_content\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\taxonomy\Entity\Term;
use Drupal\node\Entity\Node;

class ContentCreator extends ControllerBase {
  public function content() {
    
  // Create taxonomy terms for tags vocabulary.
  $categoryTermList = array(
    'Codeigniter',
    'Drupal',
    'Joomla',
    'Laravel',
    'Mobile',
    'Symfony',
    'Technology',
    'Testing',
    'Zend',
  );
  
  foreach ($categoryTermList as $term) {
    
    $term = Term::create([
      'vid' => 'category',
      'langcode' => 'en',
      'name' => $term,
      'description' => [
        'value' => "<p>$term</p>",
        'format' => 'full_html',
      ],
      'weight' => -1,
      'parent' => array (0),
    ]);
    $term->save();
  }
  
  // Create taxonomy terms for tags vocabulary.
  $tagsTermList = array(
    'Drupal 7',
    'Drupal 8',
    'DrupalCon Asia',
    'Migrate',
    'Mobile',
    'Party',
    'Selenium'
  );
  
  foreach ($tagsTermList as $term) {
    
    $term = Term::create([
      'vid' => 'tags',
      'langcode' => 'en',
      'name' => $term,
      'description' => [
        'value' => "<p>$term</p>",
        'format' => 'full_html',
      ],
      'weight' => -1,
      'parent' => array (0),
    ]);
    $term->save();
  }
  
  // Create node content programatically.
  $nodeContent = array(
    array(
      'title' => 'Drupal 8 Release Party @Blisstering',
      'body' => '<p>Since we at Blisstering love Drupal and parties almost alike we want to celebrate this very special occasion.&nbsp;After the beta version and the release candidate 1 it is time for the real deal, Drupal 8 is here.&nbsp;</p>

<p>Drupal 8, a collective work of&nbsp;3.3k contributors from&nbsp;90+ countries, after more than a couple of years of development with more than 200 new features and improvements&nbsp;finally reaching a milestone and limelight. Tentatively&nbsp;1232 companies have supported its development.</p>

<p>For Blisstering, a Drupal solutions company, this is a significant milestone. And what better way to celebrate it than with a Druapl 8 themed party !!!</p>
<p>&nbsp;</p>

<p>The party was started with cutting the Drupal 8 shaped cake followed by food, games and fun.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
      'category' => 4,
      'tags' => 8,
    ),
  );
  
  foreach ($nodeContent as $nodeData) {
  $node = Node::create([
    // The node entity bundle.
    'type' => 'blog_post',
    'langcode' => 'en',
    'created' => REQUEST_TIME,
    'changed' => REQUEST_TIME,
    // The user ID.
    'uid' => 1,
    'title' => $nodeData['title'],
    // An array with taxonomy terms.
    'field_blog_tags' =>$nodeData['tags'],
    'field_category' =>$nodeData['category'],
    'body' => [
      'summary' => '',
      'value' => $nodeData['body'],
      'format' => 'full_html',
    ],
  ]);
  $node->save();
  }
    
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Create Content'),
    );
  }
}

