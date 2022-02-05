<?php

namespace k_tith\BackupViewer;

use Illuminate\Support\ServiceProvider;

class BackupViewerServiceProvider extends ServiceProvider
{
    public function boot(){

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/views','backup-viewer');

        $this->mergeConfigFrom(
            __DIR__.'/config/backup_viewer.php',
            'backup_viewer'
        );

        $this->publishes([
            __DIR__.'/config/backup_viewer.php' => config_path('backup_viewer.php'),
        ]);
    }

    public function register(){

    }

}
