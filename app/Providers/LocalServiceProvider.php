<?php

declare(strict_types = 1);

namespace App\Providers;

use Barryvdh\Debugbar\Facade;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

/**
 * Class LocalServiceProvider
 *
 * @package App\Providers
 */
class LocalServiceProvider extends ServiceProvider
{
    /**
     * localでのみ設定したいサービスプロバイダー
     *
     * @var array
     */
    protected $providers = [
        IdeHelperServiceProvider::class,
        \Barryvdh\Debugbar\ServiceProvider::class,
    ];

    /**
     * localでのみ設定したいクラスエイリアス
     *
     * @var array
     */
    protected $aliases = [
        'Debugbar' => Facade::class,
    ];

    /**
     * アプリケーションサービスの初期化処理
     *
     * @return void
     */
    public function boot(): void
    {
    }

    /**
     * アプリケーションサービスの登録
     *
     * @return void
     */
    public function register(): void
    {
        if ($this->app->isLocal()) {
            $this->registerProviders();
            $this->registerAliases();
        }
    }

    /**
     * サービスプロバイダーの登録
     *
     * @return void
     */
    protected function registerProviders(): void
    {
        if (!empty($this->providers)) {
            foreach ($this->providers as $provider) {
                $this->app->register($provider);
            }
        }
    }

    /**
     * クラスエイリアスの登録
     *
     * @return void
     */
    protected function registerAliases(): void
    {
        if (!empty($this->aliases)) {
            $loader = AliasLoader::getInstance();

            foreach ($this->aliases as $alias => $facade) {
                $loader->alias($alias, $facade);
            }
        }
    }
}
