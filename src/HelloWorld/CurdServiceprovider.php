<?php
    // MyVendor\contactform\src\ContactFormServiceProvider.php
    namespace vendor\thilagaraja;
    use Illuminate\Support\ServiceProvider;
    class CurdServiceprovider extends ServiceProvider {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        }
        public function register()
        {
        }
    }
    ?>