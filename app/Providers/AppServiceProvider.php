<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use NumberFormatter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../../vendor/almasaeed2010/adminlte' => public_path('adminlte'),
        ], 'adminlte');

        Blade::directive('money', function ($expression) {
            return "<?php
                \$formatter = new NumberFormatter(config('app.locale'), NumberFormatter::CURRENCY);
                \$formatter->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, 0);
                echo \$formatter->formatCurrency($expression, config('app.currency'));
            ?>";
        });
    }
}
