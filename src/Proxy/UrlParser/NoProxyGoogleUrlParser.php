<?php

namespace CViniciusSDias\GoogleCrawler\Proxy\UrlParser;

use CViniciusSDias\GoogleCrawler\Exception\InvalidResultException;

class NoProxyGoogleUrlParser implements GoogleUrlParserInterface
{
    /** {@inheritdoc} */
    public function parseUrl(string $googleUrl): string
    {
        $urlParts = parse_url($googleUrl);
        parse_str($urlParts['query'], $queryStringParams);

        $resultUrl = filter_var($queryStringParams['q'], FILTER_VALIDATE_URL);
        if (!$resultUrl) {
            throw new InvalidResultException();
        }

        return $resultUrl;
    }
}
