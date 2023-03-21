<?php

namespace Webboy\LaravelOpenAiApiClient\Tests\ServiceProviders;

use Webboy\LaravelOpenAiApiClient\Tests\LaravelOpenAIClientTestCase;

class OpenAIClientServiceProviderTest extends LaravelOpenAIClientTestCase
{
    /** @test */
    public function it_registers_the_service_provider()
    {
        $this->assertTrue($this->app->bound('open-ai-api-client'));
    }
}