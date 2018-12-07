<?php

namespace Modules\Auth\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Modules\Auth\Http\Middleware\LoggedInMiddleware;
use Illuminate\Routing\Router;

use Modules\Auth\Repositories\ActivationRepository;
use Modules\Auth\Repositories\ReminderRepository;

use Modules\User\Entities\User;
use Modules\User\Repositories\UserRepository;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    protected $middleware = [
        'logged.in' => LoggedInMiddleware::class,
    ];

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {

        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->registerMiddleware();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //dd($this->app);
        $this->app->register(RouteServiceProvider::class);
        //$this->registerUsers();
        $this->registerActivations();
        //$this->registerReminders();
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('auth.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'auth'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/auth');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/auth';
        }, \Config::get('view.paths')), [$sourcePath]), 'auth');
    }

    private function registerMiddleware()
    {
        foreach ($this->middleware as $name => $class) {
            $this->app['router']->aliasMiddleware($name, $class);
        }
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/auth');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'auth');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'auth');
        }
    }

    /**
     * Register an additional directory of factories.
     * 
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production')) {
            app(Factory::class)->load(__DIR__ . '/../Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'duyog.activations',
            'duyog.reminders'
        ];
    }

    /**
     * Registers the users.
     *
     * @return void
     */
    protected function registerUsers()
    {
        $this->registerHasher();

        $this->app->singleton('duyog.users', function ($app) {
            $config = $app['config']->get('duyog.auth.users');

            return new UserRepository(
                $app['sentinel.hasher'], $app['events'], $config['model']
            );
        });
    }

    /**
     * Registers the activations.
     *
     * @return void
     */
    protected function registerActivations()
    {
        $this->app->singleton('activation', function ($app) {
            $config = $app['config']->get('duyog.auth.activation');

            return new ActivationRepository($config['model'], $config['expires']);
        });

    }

    /**
     * Registers the reminders.
     *
     * @return void
     */
    protected function registerReminders()
    {
        $this->app->singleton('duyog.reminders', function ($app) {

            $config = $app['config']->get('duyog.auth.reminders');
            
            return new ReminderRepository(
                $app['auth'], $config['model'], $config['expires']
            );
        });
    }
}
