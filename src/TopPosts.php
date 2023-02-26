<?php

namespace Reddit\TopPosts;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class TopPosts
{
    private $httpClient;
    private $crawler;

    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function findTopPosts(string $url): array
    {
        $resposta = $this->httpClient->request('GET', $url);
        $html = $resposta->getBody();
        $this->crawler->addHtmlContent($html);

        $allPosts = $this->crawler->filter('h3._eYtD2XCVieq6emjKBH3m');
        $posts = [];
        foreach ($allPosts as $post) {
            $posts[] = $post->textContent;
        }
        return $posts;
    }
}
