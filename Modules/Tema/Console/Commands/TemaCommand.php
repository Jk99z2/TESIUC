<?php

namespace Modules\Tema\Console\Commands;

use Illuminate\Console\Command;

class TemaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TemaCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tema Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
