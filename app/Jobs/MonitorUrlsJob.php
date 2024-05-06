<?php

namespace App\Jobs;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Exception;

use App\Models\Monitor;
use  App\Events\MonitorSendUrlEvent;

class MonitorUrlsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(private Monitor $monitor)
    {
		
	}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
		$codes=collect([200,201,202,301,302,400,401,403,404,500]);
		
		Http::fake([
				'*' => Http::response('Fake Response', $codes->random(), ['Headers']),
		]);
		
		
		try{
			
			$params=$this->monitor->body ? $this->monitor->body : [];
			
			$response = match($this->monitor->method) {
				'get' => Http::get($this->monitor->url,$params),
				'post' => Http::post($this->monitor->url,$params),
				'put' => Http::put($this->monitor->url,$params),
				'delete' => Http::delete($this->monitor->url,$params),
				'patch' => Http::patch($this->monitor->url,$params),
			};
			
			MonitorSendUrlEvent::dispatch($this->monitor->id,$response->status());
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}

    }
}
