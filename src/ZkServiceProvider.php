<?php
namespace Saroj\BiometricDevice;
use Illuminate\Support\ServiceProvider;

class ZkServiceProvider extends ServiceProvider
{
    public  function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public  function register()
    {
        
    }
}