<?php

namespace Mutane\VueTable\Commands;

use Illuminate\Console\Command;

class VueTableCommand extends Command
{
    public $signature = 'vue-inertia-tables';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
