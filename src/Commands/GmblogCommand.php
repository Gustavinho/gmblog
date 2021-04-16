<?php

namespace GmGmblog\Commands;

use Illuminate\Console\Command;

class GmblogCommand extends Command
{
    public $signature = 'gmblog';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
