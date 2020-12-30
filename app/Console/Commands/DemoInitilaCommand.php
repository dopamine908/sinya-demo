<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class DemoInitilaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'initial demo env and database';

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
        Artisan::call('migrate:refresh');
        Artisan::call('db:seed');
        $this->info('initialize done, please run `php artisan serve` and open 127.0.0.1:8000 on browser');
    }
}
