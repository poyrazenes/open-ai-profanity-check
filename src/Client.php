<?php

namespace Poyrazenes\OpenAiProfanityCheck;

final class Client
{
    protected $api_key;

    public function __construct(string $api_key)
    {
        $this->api_key = $api_key;
    }
}