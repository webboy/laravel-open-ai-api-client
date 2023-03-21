<?php

namespace Webboy\LaravelOpenAiApiClient\Tests\Facades;

use Webboy\LaravelOpenAiApiClient\Facades\OpenAIClientFacade;
use Webboy\LaravelOpenAiApiClient\Tests\LaravelOpenAIClientTestCase;
use Webboy\OpenAiApiClient\Endpoints\OpenAIAudio;
use Webboy\OpenAiApiClient\Endpoints\OpenAIChat;
use Webboy\OpenAiApiClient\Endpoints\OpenAICompletions;
use Webboy\OpenAiApiClient\Endpoints\OpenAIEdits;
use Webboy\OpenAiApiClient\Endpoints\OpenAIEmbeddings;
use Webboy\OpenAiApiClient\Endpoints\OpenAIFiles;
use Webboy\OpenAiApiClient\Endpoints\OpenAIFineTunes;
use Webboy\OpenAiApiClient\Endpoints\OpenAIImages;
use Webboy\OpenAiApiClient\Endpoints\OpenAIModels;
use Webboy\OpenAiApiClient\Endpoints\OpenAIModerations;

class OpenAIClientFacadeTest extends LaravelOpenAIClientTestCase
{
    /** @test */
    public function it_calls_the_facade_models_method()
    {
        // Add your facade method call and expected result
        $models = OpenAIClientFacade::models();

        $this->assertInstanceOf(OpenAIModels::class, $models);
    }

    /** @test */
    public function it_calls_the_facade_moderations_method()
    {
        // Add your facade method call and expected result
        $models = OpenAIClientFacade::moderations();

        $this->assertInstanceOf(OpenAIModerations::class, $models);
    }

    /** @test */
    public function it_calls_the_facade_images_method()
    {
        // Add your facade method call and expected result
        $models = OpenAIClientFacade::images();

        $this->assertInstanceOf(OpenAIImages::class, $models);
    }

    /** @test */
    public function it_calls_the_facade_fine_tunes_method()
    {
        // Add your facade method call and expected result
        $models = OpenAIClientFacade::fineTunes();

        $this->assertInstanceOf(OpenAIFineTunes::class, $models);
    }

    /** @test */
    public function it_calls_the_facade_files_method()
    {
        // Add your facade method call and expected result
        $models = OpenAIClientFacade::files();

        $this->assertInstanceOf(OpenAIFiles::class, $models);
    }

    /** @test */
    public function it_calls_the_facade_embeddings_method()
    {
        // Add your facade method call and expected result
        $models = OpenAIClientFacade::embeddings();

        $this->assertInstanceOf(OpenAIEmbeddings::class, $models);
    }

    /** @test */
    public function it_calls_the_facade_edits_method()
    {
        // Add your facade method call and expected result
        $models = OpenAIClientFacade::edits();

        $this->assertInstanceOf(OpenAIEdits::class, $models);
    }

    /** @test */
    public function it_calls_the_facade_completions_method()
    {
        // Add your facade method call and expected result
        $models = OpenAIClientFacade::completions();

        $this->assertInstanceOf(OpenAICompletions::class, $models);
    }

    /** @test */
    public function it_calls_the_facade_chat_method()
    {
        // Add your facade method call and expected result
        $models = OpenAIClientFacade::chat();

        $this->assertInstanceOf(OpenAIChat::class, $models);
    }

    /** @test */
    public function it_calls_the_facade_audio_method()
    {
        // Add your facade method call and expected result
        $models = OpenAIClientFacade::audio();

        $this->assertInstanceOf(OpenAIAudio::class, $models);
    }
}