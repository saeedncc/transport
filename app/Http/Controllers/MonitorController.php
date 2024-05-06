<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use App\Models\Monitor;
use App\Http\Requests\MonitorRequest;
use App\Http\Resources\Monitor\MonitorCollection;
use App\Http\Resources\Monitor\MonitorHistoryCollection;
use Carbon\Carbon;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : MonitorCollection 
    {
		
		$monitors=Monitor::all();
		
        return (new MonitorCollection($monitors));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(MonitorRequest $request) : Response
    {
	   $monitor=new Monitor;
	   
	   $monitor->name=$request->name;
	   $monitor->url=$request->url;
	   $monitor->interval=$request->interval;
	   $monitor->method=$request->method_request ? $request->method_request : 'get';
	   $monitor->body=$request->body ? $request->body : null;
	   
	   $monitor->save();
		   
		   
	   return response([
            'status' => true,
            'message' => 'اطلاعات با موفقیت ثبت گردید',
       ]);
		   
    }

    /**
     * Display the specified resource.
     */
    public function history(int $monitor_id,Request $request) : MonitorHistoryCollection
    {
		$monitor=Monitor::find($monitor_id);
		
		if($monitor==null){
		   return response([
				'status' => false,
				'message' => 'رکوردی یافت نشد',
		   ]);
		}
		
		$monitorHistory=$monitor->history()
		->when($request->filled('status_code'),function($query) use($request){
			  $query->where('status', $request->status_code);
		})
		->when($request->filled('date_start'),function($query) use($request){
			  $query->whereDate('created_at','>=', Carbon::parse($request->date_start));
		})
		->when($request->filled('date_end'),function($query) use($request){
			  $query->whereDate('created_at','<=', Carbon::parse($request->date_end));
		})
		
		->orderBy('created_at','asc')
		
		->get();
		
		
       return (new MonitorHistoryCollection($monitorHistory));
    }


}
