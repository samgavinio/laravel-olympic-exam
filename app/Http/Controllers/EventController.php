<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;
use App;


class EventController extends Controller
{
    /**
     * Get available events
     *
     * @param string date_from Y-m-d H:i:s format
     * @param string date_to Y-m-d H:i:s format
     * @param int per_page
     * @param int page
     * @param int is_completed
     * @return JsonResponse
     */
    public function getEvents(Request $request)
    {
        $dateFrom = $request->input('date_from', null);
        $dateTo = $request->input('date_to', null);
        $perPage = $request->input('per_page', 15);
        $isCompleted = $request->input('is_completed', null);
       
        $dateError =  response()->json([
            'message'        => "Invalid Date Please use Y-m-d H:i:s format",
            'is_successful'  => false,
        ], 400);
        
        if($dateFrom !== null){
            try{
                $dateFrom = Carbon::createFromFormat("Y-m-d H:i:s", $dateFrom);
            }
            catch(Exception $e){
                return $dateError;	
            }
        }
        
        if(!is_null($dateTo)){
            try{
                $dateTo = Carbon::createFromFormat("Y-m-d H:i:s", $dateTo);
            }
            catch(Exception $e){
                return $dateError;	
            }
        }

        if($isCompleted !== null){
            $isCompleted = (int) $isCompleted === 1;
        }
        
        $eventRepository = App::make('repository.event');
        $events = $eventRepository->getEventsByEventTime(
            $dateFrom, $dateTo, $perPage, $isCompleted
        );

        $jsonData = array();
        foreach($events as $event){            
            $jsonData[] = $event->toArray();
        }

        return response()->json([
            'message'       => count($jsonData) > 0 ?
                              'Event successfully retrieved' : 'No records found',
            'is_successful' => true,
            'data'          => $jsonData,
        ], 200);
        
    }

}