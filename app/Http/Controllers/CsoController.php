<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\Car;
use App\Models\Counter;
use App\Models\ROute;
use App\Models\Departure;

class CsoController extends Controller
{
    public function index()
    {
    	$schedules = Schedule::all();
    	$counters = Counter::all();
    	return view('pages/cso_reservasi', ['jadwal' => $schedules, 'counter' => $counters]);
    }
    public function search(Request $request)
    {
        
    	$data = Route::select('id_destination','counters.name', 'routes.id')
        ->join('counters', 'routes.id_destination', '=', 'counters.id')
        ->where('id_origin','=',$request->id)
        ->where('routes.stat','aktif')
        ->get();

    	return response()->json($data);
    }
    public function search_list(Request $request)
    {
        $stats  = $request->stats;
        $rute   = $request->rute;
        $depart_date = $request->depart_date;
        if ($stats == 'sk') {
            $day = date('l', strtotime($depart_date));
            $format_departure = date('Y-m-d', strtotime($depart_date));
            $format = $format_departure.'%';

            // Lowercase day
            $lower_day = strtolower($day);

            if ($lower_day == 'sunday') 
            {

                dd('minggu');
            } 
            elseif ($lower_day == 'monday') 
            {

                $searchShedule = Schedule::select('id')
                ->where('id_route', '=' , $rute)
                ->where('monday', '<>', '0')
                ->get();


                foreach ($searchShedule as $value) 
                {
                    $id_schedule  = $value['id'];

                    $ticket = Departure::select()
                    ->where('departures.id_schedule','=', $id_schedule)
                    ->where('departure_date','like', $format)
                    ->count();
                    
                    if ($ticket == 0 )
                    {
                        $list[] = Schedule::select('schedules.id','time','jumlah','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();
                    }
                    else if ($ticket>0)
                    {
                        $list[] = Departure::select()
                        ->where ('id_schedule', '=' , $id_schedule)
                        ->get();
                    }
                }

                //Return data to view
                 return ($list);


            } elseif ($lower_day == 'tuesday') 
            {

                dd('selasa');
            } 
            elseif ($lower_day == 'wednesday') 
            {

                dd('rabu');
            } 
            elseif ($lower_day == 'thrusday') 
            {
                dd('kamis');

            } 
            elseif ($lower_day == 'friday') 
            {
                dd('jumat');

            } 
            elseif ($lower_day == 'saturday') 
            {

                dd('sabtu');
            }
        } 
        elseif ($stats == 'pp') 
        {
            dd($depart_date, $round_trip_date);
        }
    }
}
