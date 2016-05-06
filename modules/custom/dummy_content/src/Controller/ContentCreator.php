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
    
  $query = db_select('node', 'n');
  $query->fields('n', array('nid'));
  $result = $query->execute()->fetchAll();
  
  if (!empty($result)) {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Content already Added.'),
    );
  }
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
      'category' => 1,
      'tags' => 9,
    ),
    array(
      'title' => 'Is Mobile Necessary? Utilize Google Analytics for the Answer',
      'body' => '<p>If you are considering going mobile, knowing this information is the first step to deciding what you need to provide your mobile customers. Luckily, if you’re using Google Analytics it’s easy to find out.</p>

<p>&nbsp;</p>

<p>There are four important pieces of information you need to know:</p>

<ol>
	<li>How many people are visiting your website on mobile device?</li>
	<li>How your mobile bounce rate compares to your desktop bounce rate?</li>
	<li>Which devices your mobile visitors are using?</li>
	<li>Where are they located?</li>
</ol>

<p>&nbsp;</p>

<p>These questions are simple to answer, let me take you through the steps.</p>

<p>&nbsp;</p>

<p><strong>1. Mobile visitors overview:</strong>&nbsp;Visitors &gt; Mobile &gt; Overview will show you statistics about your visitors on mobile devices, and contrast it with non-mobile visitors. Questions the data answers: How much of your traffic comes from mobile now, and how is it changing over time? Are your mobile visitors more likely to be new to the site? Strategic question to consider: What can you do to retain them?</p>

<p>&nbsp;</p>

<p><strong>2. Bounce:</strong>&nbsp;Visitors &gt; Mobile &gt; Overview &nbsp;You can quickly view top-level metrics like Bounce Rate, Pages Per Visit, Average Time on Site, etc. After taking a quick look at the report, how does your bounce rate look for mobile visitors? Questions the data answers: If you see a much higher bounce rate with your mobile traffic, it could obviously mean they are not having a great experience on your site. Strategic question to consider: Does your current site render ok for mobile visitors? Is your navigation missing or broken on mobile devices? Can users convert, complete a transaction, etc?&nbsp;</p>

<p>&nbsp;</p>

<p><strong>3. Mobile devices:&nbsp;</strong>Visitors &gt; Mobile &gt; Devices will show you stats for each type of mobile device that visits your site. Be sure to explore the secondary menu just below the graph, which lets you sort by device name, device manufacturer, operating system and others. Questions the data answers: Do iPad visitors stay longer and read more pages than others? What referral sources are iPhone, iPad or Android users coming from? What pages are they landing on most often?</p>

<p>&nbsp;</p>

<p><strong>4. Mobile visitor locations:</strong>&nbsp;Visitors &gt; Mobile &gt; Devices then click the “Map Overlay” tab above the chart. This will show you a map of where your mobile visitors are coming from. Zoom in to see where your traffic is. Question the data answers: Where are most of your mobile users? Strategic question to consider: Are there Web products or apps you can launch to serve their specific communities?</p>

<p>&nbsp;</p>

<p>After you familiarize yourself with these tools, decide which web entities are important to your businesses strategy and devise a plan integrate those into your online presence. &nbsp;Blisstering can help analyze and recommend what is right for your business needs. Here is another blog post that addresses&nbsp;how to decide between going Responsive (HTML5) vs Native -&nbsp;<a href="http://blisstering.com/blog/mobile-apps-native-vs-html5">http://blisstering.com/blog/mobile-apps-native-vs-html5</a></p>

<p>&nbsp;</p>

<p>Contact us and we can help you analyze your business\' needs.</p>
',
      'category' => 2,
      'tags' => 9,
    ),
    array(
      'title' => 'Concepts to take over in Selenium',
      'body' => '<p>Session 1: Introduction to Selenium<br />
Importance of Selenium for Automation over different tools<br />
Advantage of selecting best and user compatible language for scripting.<br />
Advantage of working with every browser.</p>

<p>Session 2: Installation of Automation Environment (Hands On)<br />
Selenium Framework and how it works.<br />
Setting up selenium infrastructure for testing</p>

<p>Session 3: Selenium IDE: Use-cases and Coverage (Hands On)<br />
Hands on building of a test script with recording and playback feature using Selenium IDE</p>

<p>Session 4: Selenium Web Driver: Use-cases and Coverage (Hands On)<br />
Hands on building of an Integrated Selenium Test using Selenium Webdriver for Testing</p>

<p>Session 5: Selenium Data Driven: Use-cases and Coverage (Hands On)</p>

<p>Session 6: Integrating Selenium with PHPUnit (Hands On)<br />
Learn how to integrate Selenium with PHPUnit to create functional and acceptance tests.</p>

<p>Session 7: Selenium - Consideration in Agile Development Process and Continuous Integration<br />
Writing maintainable and reusable Selenium test scripts for regressions.<br />
Aspects of Selenium in Agile Development and Continuous Integration&nbsp;</p>

<p>Basic knowledge of Object Oriented Programming. Selenium and Related Tools.&nbsp;<br />
Also, you must have the minimum system requirements to run a Drupal 8 site (No Drupal 8 knowledge is necessary).&nbsp;<br />
We will send you the detailed list of all the instructions some days prior to the training.</p>
',
      'category' => 3,
      'tags' => 10,
    ),
    array(
      'title' => 'Benefits of Selenium Automation',
      'body' => '<p>Modern software development processes want to develop software quickly and reliably. To reduce the risk of regression defects, they automate the application testing process to allow fast and reliable checking of test conditions after each change.</p>

<p dir="ltr">If you are working on web applications, then the first automation tool you will want to get familiar with, is Selenium.</p>

<p dir="ltr">When we speak of Selenium, we are actually talking about both its flavours; Selenium IDE and Selenium WebDriver. Both automate browsers in support of web application testing.</p>

<p dir="ltr">Selenium IDE is most advantageous in creating unit tests, exploratory tests and one-off bug reproduction scripts, whereas WebDriver is typically used to create browser-based regression tests.</p>

<p dir="ltr">Fortunately, Selenium WebDriver is open source and supports multiple programming languages, making it easy to introduce into your development project.</p>

<p dir="ltr">It is used by many major online enterprises for testing their web interfaces like Facebook and Google.</p>

<p dir="ltr">It delivers an efficient way to generate test scripts, validate functionality and reuse these scripts in automated test frameworks, when completely set up.</p>

<p dir="ltr">Selenium scripts are created by recording actions using the web application under test running in a browser. These scripts can be saved and re-run at any time.</p>

<p dir="ltr">Being an open source software, Selenium has no upfront, out-of-pocket costs. It is free for download and the support, although community-based, is free too.</p>

<p dir="ltr"><a href="http://bit.ly/1Sd7JbT"><img alt="Automated Web Testing with Selenium at DrupalCon New Orleans on 9th May 2016" src="http://www.blisstering.com/sites/default/files/selenium-emailheader-3.png" /></a></p>
',
      'category' =>4,
      'tags' =>11, 
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
      '#markup' => $this->t('Content added successfully'),
    );
  }
}

