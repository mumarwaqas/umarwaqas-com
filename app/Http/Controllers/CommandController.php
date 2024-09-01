<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class CommandController extends Controller
{

    public function routeList()
    {
        // Get all routes
        $routes = Route::getRoutes();
        

        // Pass routes to the Blade view
        dd($routes);
        // return view('routes.index', compact('routes'));
    }
    public function writerSeed()
    {
        $exitCode = Artisan::call('db:seed --class=WriterSeeder');
        $output = Artisan::output();
         
        if ($exitCode === 0) {
            return response()->json(['message' => 'Writer Seed successfully.']);
        } else {
            return response()->json(['message' => 'Writer Seed failed.', 'error' => $output], 500);
        }
    }
    public function orderSeeder()
    {
        $exitCode = Artisan::call('db:seed --class=OrderSeeder');
        $output = Artisan::output();
         
        if ($exitCode === 0) {
            return response()->json(['message' => 'Order Seed successfully.']);
        } else {
            return response()->json(['message' => 'Order Seed failed.', 'error' => $output], 500);
        }
    }
    public function seed()
    {
        $exitCode = Artisan::call('db:seed');
        $output = Artisan::output();
         
        if ($exitCode === 0) {
            return response()->json(['message' => 'Seed successfully.']);
        } else {
            return response()->json(['message' => 'Seed failed.', 'error' => $output], 500);
        }
    }
    public function migrate()
    {
        $exitCode = Artisan::call('migrate:status');
        $output = Artisan::output();
        
        if (strpos($output, 'No migrations found') !== false) {
            return response()->json(['message' => 'No migrations to run.']);
        }
        
        $exitCode = Artisan::call('migrate');
        $output = Artisan::output();
        
        if ($exitCode === 0) {
            return response()->json(['message' => 'Migrate successfully.']);
        } else {
            return response()->json(['message' => 'Migration failed.', 'error' => $output], 500);
        }
    }
    public function migrateFresh()
    {
        $exitCode = Artisan::call('migrate:status');
        $output = Artisan::output();
        
        if (strpos($output, 'No migrations Fresh found') !== false) {
            return response()->json(['message' => 'No migrations Fresh to run.']);
        }
        
        $exitCode = Artisan::call('migrate:fresh');
        $output = Artisan::output();
        
        if ($exitCode === 0) {
            return response()->json(['message' => 'Migrate Fresh successfully.']);
        } else {
            return response()->json(['message' => 'Migration failed.', 'error' => $output], 500);
        }
    }
    public function migrateInstall()
    {
        $exitCode = Artisan::call('migrate:install');
        $output = Artisan::output();
        
        if (strpos($output, 'No migrations Install found') !== false) {
            return response()->json(['message' => 'No migrations to install.']);
        }
        
        $exitCode = Artisan::call('migrate:fresh');
        $output = Artisan::output();
        
        if ($exitCode === 0) {
            return response()->json(['message' => 'Migrate Install successfully.']);
        } else {
            return response()->json(['message' => 'Migration failed.', 'error' => $output], 500);
        }
    }
    public function migrateRllback()
    {
        $exitCode = Artisan::call('migrate:rollback');
        $output = Artisan::output();
        
        if ($exitCode === 0) {
            return response()->json(['message' => 'Migrate Rollback successfully.']);
        } else {
            return response()->json(['message' => 'Migrate Rollback failed.', 'error' => $output], 500);
        }
    }
    public function clearAllCache()
    {
        // Clear application cache
        Artisan::call('cache:clear');

        // Clear route cache
        Artisan::call('route:clear');

        // Clear configuration cache
        Artisan::call('config:clear');

        // Clear view cache
        Artisan::call('view:clear');
    
        return response()->json(['message' => 'Cache cleared successfully.']);
    }
    public function clearCache()
    {
        Artisan::call('cache:clear');
        return response()->json(['message' => 'Cache cleared successfully.']);
    }
    public function clearConfigCache()
    {
        Artisan::call('config:clear');
        return response()->json(['message' => 'Configuration cache cleared successfully.']);
    }
    public function clearRouteCache()
    {
        Artisan::call('route:clear');
        return response()->json(['message' => 'Route cache cleared successfully.']);
    }
    public function clearViewCache()
    {
        Artisan::call('view:clear');
        return response()->json(['message' => 'View cache cleared successfully.']);
    }
    public function cacheConfig()
    {
        Artisan::call('config:cache');
        return response()->json(['message' => 'Configuration cached successfully.']);
    }
    public function cacheRoutes()
    {
        Artisan::call('route:cache');
        return response()->json(['message' => 'Routes cached successfully.']);
    }
    public function cacheViews()
    {
        Artisan::call('view:cache');
        return response()->json(['message' => 'Views cached successfully.']);
    }
    public function cacheStatus()
    {
        $cache = Cache::get('cache_status');
        if (!$cache) {
            // If cache status is not set, set it to a default value
            $cache = [
                'config' => 'Not Cached',
                'routes' => 'Not Cached',
                'views' => 'Not Cached'
            ];
        }
        return response()->json(['cache_status' => $cache]);
    }
}
