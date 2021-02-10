<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PokeMonCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pokemon:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'pokemon cron excuted and it will update the pokemon in db';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('commands excuted');
    }
}
