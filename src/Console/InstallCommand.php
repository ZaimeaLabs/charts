<?php

declare(strict_types=1);

namespace Zaimea\Charts\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'charts:install';

    protected $description = 'Install Charts component';

    public function handle()
    {
        $this->call('vendor:publish', ['--tag' => 'charts:public']);
    }
}
