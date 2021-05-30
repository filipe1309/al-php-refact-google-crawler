<?php

namespace CViniciusSDias\GoogleCrawler\Proxy;

use CViniciusSDias\GoogleCrawler\Proxy\HttpClient\GoogleHttpClientInterface;
use CViniciusSDias\GoogleCrawler\Proxy\HttpClient\NoProxyGoogleHttpClient;
use CViniciusSDias\GoogleCrawler\Proxy\UrlParser\GoogleUrlParserInterface;
use CViniciusSDias\GoogleCrawler\Proxy\UrlParser\NoProxyGoogleUrlParser;

class NoProxyAbstractFactory implements GoogleProxyAbstractFactoryInterface
{
    public function createGoogleHttpClient(): GoogleHttpClientInterface
    {
        return new NoProxyGoogleHttpClient();
    }

    public function createGoogleUrlParser(): GoogleUrlParserInterface
    {
        return new NoProxyGoogleUrlParser();
    }
}
