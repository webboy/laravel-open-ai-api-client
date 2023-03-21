<?php

namespace Webboy\LaravelOpenAiApiClient\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use Webboy\LaravelOpenAiApiClient\Adapters\OpenAIClientAdapter;

class OpenAIClientServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('open-ai-api-client', function ($app) {
            return new OpenAIClientAdapter(config('openai.api_key'),config('openai.base_url'));
        });
        // Merge the default package configuration with the user's configuration
        $this->mergeConfigFrom(
            __DIR__.'/../../config/openai.php', 'openai'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Publish the configuration file
        $this->publishes([
            __DIR__.'/../../config/openai.php' => config_path('openai.php'),
        ], 'openai-config');
    }
}