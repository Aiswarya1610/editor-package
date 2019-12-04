<?php
    // lilac\editor\src\EditorServiceProvider.php
    namespace lilac\editor;
    use Illuminate\Support\ServiceProvider;
    class EditorServiceProvider extends ServiceProvider {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/resources/views', 'editor');
        }
        public function register()
        {
        }
    }
    ?>