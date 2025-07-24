<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeIconComponents extends Command
{
    protected $signature = 'make:icon-components
                            {--source=resources/icons : Path to the SVG icons}
                            {--target=resources/views/components/icons : Path to save Blade components}';

    protected $description = 'Generate Blade icon components from SVG files';

    public function handle()
    {
        $source = base_path($this->option('source') ?: 'resources/icons');
        $target = base_path($this->option('target') ?: 'resources/views/components/icons');


        if (!File::exists($source)) {
            return $this->error("Source folder does not exist: $source");
        }

        File::ensureDirectoryExists($target);

        $files = File::files($source);

        foreach ($files as $file) {
            if ($file->getExtension() !== 'svg') continue;

            $name = Str::kebab($file->getFilenameWithoutExtension());
            $componentPath = "$target/$name.blade.php";

            $svg = File::get($file->getRealPath());

            File::put($componentPath, $svg);
            $this->info("Created: $name");
        }

        $this->info('All icons have been generated!');
    }
}
