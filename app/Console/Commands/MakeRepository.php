<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeRepository extends Command
{
    protected $signature = 'make:repository {name}';
    protected $description = 'Create a new repository';

    public function handle()
    {
        $name = $this->argument('name');
        $path = app_path("Repositories/{$name}Repository.php");

        if (File::exists($path)) {
            $this->error('Repository already exists!');
            return;
        }

        $content = "<?php\n\nnamespace App\Repositories;\n\nclass {$name}Repository {\n    // Repository methods here\n}\n";
        File::put($path, $content);

        $this->info("Repository {$name}Repository created successfully.");
    }
}
