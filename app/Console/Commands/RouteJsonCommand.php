<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class RouteJsonCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'route:json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate routes json for vue,react apps.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filename = \resource_path('js\Helpers\LaravelRoutes.json');

        $this->info("Preparing registered Routes for \"{$filename}\".");

        $routes = collect(Route::getRoutes()->getRoutes())->map(function ($route) {
            return [
                'name' => isset($route->action['as']) ? $route->action['as'] : "",
                'uri' => \join('', ["/", \ltrim($route->uri, '/')]),
                "methods" => $route->methods
            ];
        })->toJson();

        $this->info("Adding content to \"{$filename}\".");

        \file_put_contents($filename, $routes);

        $this->info('Finished...');
    }
}
