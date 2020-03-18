<?php

declare(strict_types = 1);

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ('production' !== config('app.env')) {
            // 「production」環境以外だった場合、SQLログを出力する。
            DB::listen(static function ($query): void {
                Log::info("Query Time:{$query->time}s] {$query->sql}");
            });
        }
    }
}
