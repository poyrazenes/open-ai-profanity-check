<?php

namespace Poyrazenes\OpenAiProfanityCheck\Providers;

use Illuminate\Support\ServiceProvider as LServiceProvider;

class ServiceProvider extends LServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/open-ai-profanity-check.php' => config_path('open-ai-profanity-check.php'),
        ], 'open-ai-profanity-check-config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/open-ai-profanity-check.php', 'open-ai-profanity-check'
        );
    }
}
