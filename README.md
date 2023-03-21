# Laravel OpenAi API Client
Community-maintained Laravel package adapting [PHP OpenAI API Client](https://github.com/webboy/open-ai-api-client)

Note: This is not an official Laravel Package

## Installation
Intsall the package using composer
```text
composer require webboy/laravel-open-ai-api-client
```
Then publish the configuration file
```text
php artisan vendor:publish --tag=openai-config
```

Add `OPENAI_API_KEY={your OpenAI api key}` to the `.env` file

That's it, you are all set up
## Usage examples
An example Laravel Artisan command that uses OpenAIChat library:
```php
<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use OpenAIClient;

class OpenAIChatCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'open-ai:chat-answer {question}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Answers a question using ChatGPT Chat API endpoint';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $question = $this->argument('question');

        $data['model']      = 'gpt-3.5-turbo';
        $data['messages'] = [
            [
                'role'      => 'system',
                'content'   => 'You are a good and all knowing assistant'
            ],
            [
                'role'      => 'user',
                'content'   => $question
            ]
        ];

        $response = OpenAIClient::chat()->create($data);

        $this->info($response['choices'][0]['message']['content']);
    }
}
```

Use the facade `OpenAIClient` static methods to access all endpoints of thh OpenAI:

```text
OpenAIClient::audio(): OpenAIAudio
OpenAIClient::chat(): OpenAIChat
OpenAIClient::completions(): OpenAICompletions
OpenAIClient::edits(): OpenAIEdits
OpenAIClient::embeddings(): OpenAIEmbeddings
OpenAIClient::files(): OpenAIFiles
OpenAIClient::fineTunes(): OpenAIFineTunes
OpenAIClient::images(): OpenAIImages
OpenAIClient::models(): OpenAIModels
OpenAIClient::moderations(): OpenAIModerations

```

Refer to the [official API reference](https://platform.openai.com/docs/api-reference) for more details.