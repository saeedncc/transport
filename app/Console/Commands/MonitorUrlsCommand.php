<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Monitor;
use App\Jobs\MonitorUrlsJob;

class MonitorUrlsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monitor:urls';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'monitor each url base kind request and body';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
		$monitors=Monitor::whereRaw('`updated_at` <= (NOW()  - INTERVAL `interval` MINUTE) ')->cursor();
		foreach($monitors as $monitor){
		
			$monitor->updated_at=Carbon::now();
			$monitor->save();
			
			MonitorUrlsJob::dispatch($monitor)->onQueue('monitor');
		}
		
    }
}
