<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Departure;
use App\Models\Seat;
use App\Models\ScheduleRoute;
use Session;

class DepartureController extends Controller
{
    public function store($id)
    {

        // $departure_date = Session::get('depart_date');
        // $schedule = new Departure;
        // $schedule = Departure::where('id_schedule', $id)->where('departure_date', $departure_date)->count();

        // $format_departure = date('Y-m-d', strtotime($departure_date));

        // if ($schedule == 0) {

        //     $seat = Seat::select('jumlah','schedules.id as id_schedule')
        //     ->leftjoin('schedules', 'schedules.id_seat', '=', 'seats.id')
        //     ->where('schedules.id','=', $id)
        //     ->get();

        //     foreach ($seat as $value) {
        //         $available = $value['jumlah'];
        //         $id_schedule = $value['id_schedule'];
        //     }

        //     $departure = new Departure;
        //     $departure->id_schedule     = $id_schedule;
        //     $departure->available       = $available;
        //     $departure->departure_date  = $format_departure;
        //     $departure->save();

        //     return view('customer/datapenumpang');

        // } else{

        //     $schedule = new Departure;
        //     $schedule = Departure::where('id_schedule', $id)->count();

        // }


        Session::put('id_schedule',$id);
        return view('customer/datapenumpang');
    }
}
