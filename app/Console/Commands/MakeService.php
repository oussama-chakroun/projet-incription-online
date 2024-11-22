<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeService extends Command
{
    protected $signature = 'make:service {name}';
    protected $description = 'Create a new service';

    public function handle()
    {
        $name = $this->argument('name');
        $path = app_path("Services/{$name}Service.php");

        if (File::exists($path)) {
            $this->error('Service already exists!');
            return;
        }

        $content = "<?php\n\nnamespace App\Services;\n\nclass {$name}Service {\n    // Service methods here\n}\n";
        File::put($path, $content);

        $this->info("Service {$name}Service created successfully.");
    }
}
