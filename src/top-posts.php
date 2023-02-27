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

$find = new TopPosts($client, $crawler);
$posts = $find->findTopPosts('https://www.reddit.com/r/worldnews/');

foreach ($posts as $post) {
    echo $post . PHP_EOL;
}
