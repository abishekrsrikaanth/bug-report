<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ScheduleCommand2Command extends Command
{
    protected $signature = 'app:schedule-command-2';

    protected $description = 'Command description';

    public function handle()
    {
        $this->comment('Running ScheduleCommand2Command');
    }
}
