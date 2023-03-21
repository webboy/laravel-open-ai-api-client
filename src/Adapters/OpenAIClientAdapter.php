<?php

namespace Webboy\LaravelOpenAiApiClient\Adapters;

use GuzzleHttp\Client;
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

class OpenAIClientAdapter
{
    protected Client|null $client;
    public function __construct(protected string $apiKey, protected string $baseUrl, $client = null)
    {
        $this->client = $client;
    }

    /**
     * @param Client|null $client
     * @return void
     */
    public function setClient(Client|null $client): void
    {
        $this->client = $client;
    }

    /**
     * @param string $apiKey
     * @return void
     */
    public function setApiKey(string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return OpenAIAudio
     */
    public function audio(): OpenAIAudio
    {
        return new OpenAIAudio($this->apiKey,$this->client,$this->baseUrl);
    }

    /**
     * @return OpenAIChat
     */
    public function chat(): OpenAIChat
    {
        return new OpenAIChat($this->apiKey,$this->client,$this->baseUrl);
    }

    /**
     * @return OpenAICompletions
     */
    public function completions(): OpenAICompletions
    {
        return new OpenAICompletions($this->apiKey,$this->client,$this->baseUrl);
    }

    /**
     * @return OpenAIEdits
     */
    public function edits(): OpenAIEdits
    {
        return new OpenAIEdits($this->apiKey,$this->client,$this->baseUrl);
    }

    /**
     * @return OpenAIEmbeddings
     */
    public function embeddings(): OpenAIEmbeddings
    {
        return new OpenAIEmbeddings($this->apiKey,$this->client,$this->baseUrl);
    }

    /**
     * @return OpenAIFiles
     */
    public function files(): OpenAIFiles
    {
        return new OpenAIFiles($this->apiKey,$this->client,$this->baseUrl);
    }

    /**
     * @return OpenAIFineTunes
     */
    public function fineTunes(): OpenAIFineTunes
    {
        return new OpenAIFineTunes($this->apiKey,$this->client,$this->baseUrl);
    }

    /**
     * @return OpenAIImages
     */
    public function images(): OpenAIImages
    {
        return new OpenAIImages($this->apiKey,$this->client,$this->baseUrl);
    }

    /**
     * @return OpenAIModels
     */
    public function models(): OpenAIModels
    {
        return new OpenAIModels($this->apiKey,$this->client,$this->baseUrl);
    }

    /**
     * @return OpenAIModerations
     */
    public function moderations(): OpenAIModerations
    {
        return new OpenAIModerations($this->apiKey,$this->client,$this->baseUrl);
    }
}