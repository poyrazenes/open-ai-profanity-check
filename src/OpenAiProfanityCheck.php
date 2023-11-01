<?php

namespace Poyrazenes\OpenAiProfanityCheck;

final class OpenAiProfanityCheck
{
    /**
     * Creates a new Open AI Client with the given API token.
     */
    public static function build(string $apiKey)
    {
        return new Client($apiKey);
    }
}