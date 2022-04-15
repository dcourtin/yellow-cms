<?php

namespace Dcourtin\YellowCms\Commands;

use Illuminate\Console\Command;

class YellowCmsCommand extends Command
{
    public $signature = 'yellow-cms';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
