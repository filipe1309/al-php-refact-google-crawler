<?php

namespace CViniciusSDias\GoogleCrawler\Proxy\UrlParser;

use CViniciusSDias\GoogleCrawler\Exception\InvalidResultException;

interface GoogleUrlParserInterface
{
    /**
     * Parses an URL based on how they are encoded in the proxy service
     *
     * @param string $googleUrl
     * @return string
     * @throws InvalidResultException
     */
    public function parseUrl(string $googleUrl): string;
}
