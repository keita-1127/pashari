<?php

declare(strict_types = 1);

namespace App\Services\Validation;

use Illuminate\Contracts\Translation\Translator;

/**
 * + ​* Class ServiceProvide
 *
 * @package App\Services\Validation
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app['validator']->resolver(
            function (Translator $translator, array $data, array $rules, array $messages = [], array $attributes = []) {
                return new Validator($translator, $data, $rules, $messages, $attributes);
            }
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
    }
}
