<?php

namespace JurreOutlawz\Test\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    public $signature = 'test';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
