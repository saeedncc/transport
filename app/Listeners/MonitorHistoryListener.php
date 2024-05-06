<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\MonitorSendUrlEvent;
use App\Models\MonitorHistory;

class MonitorHistoryListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MonitorSendUrlEvent $event): void
    {
		
		$monitorHistory=new MonitorHistory;
		
		$monitorHistory->monitor_id = $event->monitor_id;
		$monitorHistory->status  = $event->status;
		$monitorHistory->save();
		
    }
}
