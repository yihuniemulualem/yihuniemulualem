<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class user extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'done:things';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'works done by the command of the artisan';

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
     return ' the command is done by the customer on the ground of artisan server';
    }
}
