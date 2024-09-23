<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('firebase', function ($app) {
            $serviceAccount = __DIR__ . '/../../' . env('FIREBASE_CREDENTIALS');
            
            return (new Factory)
                ->withServiceAccount($serviceAccount)
                ->withDatabaseUri(env('FIREBASE_DATABASE_URL'))
                ->createDatabase();
        });
    }
}
?>
