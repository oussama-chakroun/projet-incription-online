<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomModelCommand extends Command
{
    protected $signature = 'make:model:full {name}';
    protected $description = 'Create a model with migration, controller, repository, and service';

    public function handle()
    {
        $modelName = $this->argument('name');

        $this->call('make:model', ['name' => $modelName, '--migration' => true]);
        $this->call('make:controller', ['name' => "{$modelName}"]);
        
        // Ensure these commands exist
        $this->call('make:repository', ['name' => "{$modelName}"]);
        $this->call('make:service', ['name' => "{$modelName}"]);

        $this->info('Model, migration, controller, repository, and service created successfully.');
    }
}
