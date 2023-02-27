#!/usr/bin/env php
<?php

require 'C:\Users\Gabriela\Documents\Projetos\Buscador de Notícias\vendor\autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Reddit\TopPosts\TopPosts;

$client = new Client(
    ['base_uri' => 'https://www.reddit.com/'],
);
$crawler = new Crawler();
$sourceUrl = 'https://www.reddit.com/r/worldnews/';

$find = new TopPosts($client, $crawler);
$posts = $find->findTopPosts($sourceUrl);

foreach ($posts as $post) {
    echo $post . PHP_EOL;
}
