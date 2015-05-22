<?php namespace Zwarthoorn\Blog;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use App;
use Zwarthoorn\Blog\Models\Blog;
use Zwarthoorn\Blog\Models\Response;


class ServiceProvider extends LaravelServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {

        //$this->handleConfigs();
        $this->handleMigrations();
         $this->handleViews();
        // $this->handleTranslations();
         $this->handleRoutes();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        App::bind('blog', function()
        {
            return new Blog;
        });
        App::bind('response', function()
        {
            return new Response;
        });

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {

        return [];
    }

    private function handleConfigs() {

        $configPath = __DIR__ . '/../config/blog.php';

        $this->publishes([$configPath => config_path('blog.php')]);

        $this->mergeConfigFrom($configPath, 'blog');
    }

    private function handleTranslations() {

        $this->loadTranslationsFrom('packagename', __DIR__.'/../lang');
    }

    private function handleViews() {

        $this->loadViewsFrom( __DIR__.'/../views','Blog');

        //$this->publishes([__DIR__.'/../views' => base_path('resources/views/vendor/packagename')]);
    }

    private function handleMigrations() {

        $this->publishes([__DIR__ . '/../migrations' => base_path('database/migrations')]);
    }

    private function handleRoutes() {

        include __DIR__.'/../routes.php';
    }
}
