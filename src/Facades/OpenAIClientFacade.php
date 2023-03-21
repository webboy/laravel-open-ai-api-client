<?php

namespace Webboy\LaravelOpenAiApiClient\Facades;

use Illuminate\Support\Facades\Facade;

class OpenAIClientFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'open-ai-api-client';
    }
}