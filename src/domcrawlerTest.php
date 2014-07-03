<?php

/**
 * Nice links:
 * http://symfony.com/doc/current/components/dom_crawler.html
 */
require_once '../vendor/autoload.php';


use Symfony\Component\DomCrawler\Crawler;

$crawler = new Crawler();
$crawler->addContent('<html><body><p>Hello <abbr title="dhsdfdfat">Datadfdt</abbr> <abbr title="dhat" class="gloss">Datat</abbr> World!</p></body></html>');

$items = $crawler->filter('abbr.gloss')->each(function (Crawler $node, $i) {
    print "Text: " . $node->text() . " Class : " . $node->attr('class') . " Title : " . $node->attr('title') . "\n";
});
