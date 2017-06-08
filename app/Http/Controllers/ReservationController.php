<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;
use App\Models\Route;
use App\Models\Schedule;
use App\Models\Departure;
use Session;

class ReservationController extends Controller
{
    public function index()
    {
        $counter = Counter::all();

    	return view('customer/reservasi',['counter'=>$counter]);
    }

    public function search_destination(Request $request)
    {
        $datas = Counter::select()
        ->join('routes', 'counters.id', '=', 'routes.id_destination')
        ->where('routes.id_origin','=',$request->id)
        ->get();

        return response()->json($datas);
    }

    public function search_schedule(Request $request)
    {
        // dd($request);
        $value=$request->input();

        if (!empty($value['departure'])) {
            Session::put('departure',$value['departure']);
            $id_origin = $value['departure'];
        }

        if (!empty($value['destination'])) {
            Session::put('destination',$value['destination']);
            $id_destination = $value['destination'];
        }

        if (!empty($value['depart_date'])) {
            Session::put('depart_date',$value['depart_date']);
            $depart_date = $value['depart_date'];
        }

        if (!empty($value['round_trip_date'])) {
            Session::put('round_trip_date',$value['round_trip_date']);
            $round_trip_date = $value['round_trip_date'];
        }

        if (!empty($value['stats'])) {
            Session::put('stats',$value['stats']);
            $stats = $value['stats'];
        }

        if (!empty($value['person'])) {
            Session::put('person',$value['person']);
            $person = $value['person'];
        }

        if ($stats == 'sk') {
            $day = date('l', strtotime($depart_date));
            $format_departure = date('Y-m-d', strtotime($depart_date));

            // Lowercase day
            $lower_day = strtolower($day);

            if ($lower_day == 'sunday') {

                //Get ID Route berdasarkan id_origin dan id_destination
                $route = Route::where('id_origin', $id_origin)->where('id_destination', $id_destination)->firstOrFail();
                $id_route = $route->id;

                //Get ID Schedule berdasarkan hari
                $schedule = Schedule::where('sunday','1')->where('id_route', $id_route)->get();

                foreach ($schedule as $value) {
                    $id_schedule  = $value['id'];

                    $ticket = Departure::select()
                    ->where('departures.id_schedule','=', $id_schedule)
                    ->where('departure_date','=', $format_departure)
                    ->count();

                    if ($ticket == 0 ) {
                        //Get Jadwal
                        $schedule = Schedule::select('schedules.id','jumlah','ticket','total_passenger','time')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                        ->where('schedules.id_route','=', $id_route)
                        // ->where('departure_date','=', $depart_date)
                        ->get();

                    } else {
                        //Get Jadwal
                        $schedule = Departure::select('departures.id_schedule','available','total_passenger','ticket','time')
                        ->leftjoin('schedules', 'schedules.id', '=', 'departures.id_schedule')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                        ->where('schedules.id_route','=', $id_route)
                        // ->where('departure_date','=', $depart_date)
                        ->get();
                    }
                }

                //Get Jadwal
                // $ticket = Schedule::select('schedules.id','jumlah','available','ticket','time')
                // ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                // ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                // ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                // ->where('schedules.id','=', $id_schedule)
                // ->where('departure_date','=', $depart_date)
                // ->get();
                // dd($ticket);

                // $ticket = Departure::select()
                // ->where('departures.id_schedule','=', $id_schedule)
                // ->where('departure_date','=', $depart_date)
                // ->count();



                // dd($schedule);

                //Get Available Seat
                foreach ($schedule as $value) {

                    if (empty($value['total_passenger'])) {
                        $seat = $value['jumlah'];
                    } else {
                        $seat = $value['available'];
                    }

                    Session::put('ticket',$value['ticket']);
                    Session::put('time',$value['time']);
                }
                //Return data to view
                return view('customer/pilihjadwal', ['schedule' => $schedule, 'seat' => $seat]);

            } elseif ($lower_day == 'monday') {

                //Get ID Route berdasarkan id_origin dan id_destination
                $route = Route::where('id_origin', $id_origin)->where('id_destination', $id_destination)->firstOrFail();
                $id_route = $route->id;

                //Get ID Schedule berdasarkan hari
                $schedule = Schedule::where('monday','1')->where('id_route', $id_route)->firstOrFail();
                $id_schedule  = $schedule->id;

                //Get Jadwal
                $ticket = Schedule::select('schedules.id','jumlah','total_passenger','ticket','time')
                ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                ->where('schedules.id_route','=', $id_route)
                ->get();

                //Get Available Seat
                foreach ($ticket as $value) {

                    if (empty($value['total_passengers'])) {
                        $seat = $value['jumlah'];
                    } else {
                        $seat = $value['jumlah'] - $value['total_passengers'];
                    }

                    Session::put('ticket',$value['ticket']);
                    Session::put('time',$value['time']);
                }


                //Return data to view
                return view('customer/pilihjadwal', ['ticket' => $ticket, 'seat' => $seat]);

            } elseif ($lower_day == 'tuesday') {

                //Get ID Route berdasarkan id_origin dan id_destination
                $route = Route::where('id_origin', $id_origin)->where('id_destination', $id_destination)->firstOrFail();
                $id_route = $route->id;

                //Get ID Schedule berdasarkan hari
                $schedule = Schedule::where('tuesday','1')->where('id_route', $id_route)->firstOrFail();
                $id_schedule  = $schedule->id;

                //Get Jadwal
                $ticket = Schedule::select('schedules.id','jumlah','total_passenger','ticket','time')
                ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                ->where('schedules.id_route','=', $id_route)
                ->get();

                //Get Available Seat
                foreach ($ticket as $value) {

                    if (empty($value['total_passengers'])) {
                        $seat = $value['jumlah'];
                    } else {
                        $seat = $value['jumlah'] - $value['total_passengers'];
                    }

                    Session::put('ticket',$value['ticket']);
                    Session::put('time',$value['time']);
                }


                //Return data to view
                return view('customer/pilihjadwal', ['ticket' => $ticket, 'seat' => $seat]);

            } elseif ($lower_day == 'wednesday') {

                //Get ID Route berdasarkan id_origin dan id_destination
                $route = Route::where('id_origin', $id_origin)->where('id_destination', $id_destination)->firstOrFail();
                $id_route = $route->id;

                //Get ID Schedule berdasarkan hari
                $schedule = Schedule::where('wednesday','1')->where('id_route', $id_route)->firstOrFail();
                $id_schedule  = $schedule->id;

                //Get Jadwal
                $ticket = Schedule::select('schedules.id','jumlah','total_passenger','ticket','time')
                ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                ->where('schedules.id_route','=', $id_route)
                ->get();

                //Get Available Seat
                foreach ($ticket as $value) {

                    if (empty($value['total_passengers'])) {
                        $seat = $value['jumlah'];
                    } else {
                        $seat = $value['jumlah'] - $value['total_passengers'];
                    }

                    Session::put('ticket',$value['ticket']);
                    Session::put('time',$value['time']);
                }


                //Return data to view
                return view('customer/pilihjadwal', ['ticket' => $ticket, 'seat' => $seat]);

            } elseif ($lower_day == 'thrusday') {

                //Get ID Route berdasarkan id_origin dan id_destination
                $route = Route::where('id_origin', $id_origin)->where('id_destination', $id_destination)->firstOrFail();
                $id_route = $route->id;

                //Get ID Schedule berdasarkan hari
                $schedule = Schedule::where('thrusday','1')->where('id_route', $id_route)->firstOrFail();
                $id_schedule  = $schedule->id;

                //Get Jadwal
                $ticket = Schedule::select('schedules.id','jumlah','total_passenger','ticket','time')
                ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                ->where('schedules.id_route','=', $id_route)
                ->get();

                //Get Available Seat
                foreach ($ticket as $value) {

                    if (empty($value['total_passengers'])) {
                        $seat = $value['jumlah'];
                    } else {
                        $seat = $value['jumlah'] - $value['total_passengers'];
                    }

                    Session::put('ticket',$value['ticket']);
                    Session::put('time',$value['time']);
                }


                //Return data to view
                return view('customer/pilihjadwal', ['ticket' => $ticket, 'seat' => $seat]);

            } elseif ($lower_day == 'friday') {

                //Get ID Route berdasarkan id_origin dan id_destination
                $route = Route::where('id_origin', $id_origin)->where('id_destination', $id_destination)->firstOrFail();
                $id_route = $route->id;

                //Get ID Schedule berdasarkan hari
                $schedule = Schedule::where('friday','1')->where('id_route', $id_route)->firstOrFail();
                $id_schedule  = $schedule->id;

                //Get Jadwal
                $ticket = Schedule::select('schedules.id','jumlah','total_passenger','ticket','time')
                ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                ->where('schedules.id_route','=', $id_route)
                ->get();

                //Get Available Seat
                foreach ($ticket as $value) {

                    if (empty($value['total_passengers'])) {
                        $seat = $value['jumlah'];
                    } else {
                        $seat = $value['jumlah'] - $value['total_passengers'];
                    }

                    Session::put('ticket',$value['ticket']);
                    Session::put('time',$value['time']);
                }


                //Return data to view
                return view('customer/pilihjadwal', ['ticket' => $ticket, 'seat' => $seat]);

            } elseif ($lower_day == 'saturday') {

                //Get ID Route berdasarkan id_origin dan id_destination
                $route = Route::where('id_origin', $id_origin)->where('id_destination', $id_destination)->firstOrFail();
                $id_route = $route->id;

                //Get ID Schedule berdasarkan hari
                $schedule = Schedule::where('saturday','1')->where('id_route', $id_route)->firstOrFail();
                $id_schedule  = $schedule->id;

                //Get Jadwal
                $ticket = Schedule::select('schedules.id','jumlah','total_passenger','ticket','time')
                ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                ->where('schedules.id_route','=', $id_route)
                ->get();

                //Get Available Seat
                foreach ($ticket as $value) {

                    if (empty($value['pass'])) {
                        $seat = $value['jumlah'];
                    } else {
                        $seat = $value['jumlah'] - $value['pass'];
                    }

                    Session::put('ticket',$value['ticket']);
                    Session::put('time',$value['time']);
                }

                //Return data to view
                return view('customer/pilihjadwal', ['ticket' => $ticket, 'seat' => $seat]);

            }
        } 
        elseif ($stats == 'pp') 
        {
            dd($depart_date, $round_trip_date);
        }
    }
}
