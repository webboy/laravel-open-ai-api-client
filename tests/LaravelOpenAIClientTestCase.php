<?php

namespace Webboy\LaravelOpenAiApiClient\Tests;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase;
use Webboy\LaravelOpenAiApiClient\ServiceProviders\OpenAIClientServiceProvider;

class LaravelOpenAIClientTestCase extends TestCase
{
    /**
     * Load the package service provider.
     *
     * @param  Application  $app
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [OpenAIClientServiceProvider::class];
    }
}