<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;
use App\Models\Route;
use App\Models\Schedule;
use App\Models\Departure;
use App\Models\Seat;
use Session;

class ReservationController extends Controller
{
    public function index()
    {
        $counter = Counter::all();
        // dd($counter;
    	return view('customer/reservasi',['counter'=>$counter]);
    }

    public function search_destination(Request $request)
    {
        $datas = Counter::select('routes.id as id_route', 'counters.name as counter_name')
        ->join('routes', 'counters.id', '=', 'routes.id_destination')
        ->where('routes.id_origin','=',$request->id)
        ->get();
        // dd($datas);
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
            $format = $format_departure.'%';

            // Lowercase day
            $lower_day = strtolower($day);

            if ($lower_day == 'sunday') {

                //Get ID Route berdasarkan id_origin dan id_destination
                // $route = Route::where('id_origin', $id_origin)->where('id_destination', $id_destination)->firstOrFail();
                // $id_route = $route->id;

                $searchShedule = Schedule::select('id')
                ->where('id_route', '=' , $id_destination)
                ->where('sunday', '<>', '0')
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
                        $list= Schedule::select()
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();
                    }
                    else if ($ticket > 0)
                    {
                        $list= Departure::select()
                        ->where ('id_schedule', '=' , $id_schedule)
                        ->get();
                    }
                }

                //Return data to view
                 // return ($list);

                //Return data to view
                // return view('customer/pilihjadwal', ['ticket' => $list]);
                dd($list);

            } elseif ($lower_day == 'monday') {

                //Get ID Route berdasarkan id_origin dan id_destination
                // $route = Route::where('id_origin', $id_origin)->where('id_destination', $id_destination)->firstOrFail();
                // $id_route = $route->id;

                $searchShedule = Schedule::select('id')
                ->where('id_route', '=' , $id_destination)
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
                        $list = Schedule::select('schedules.id as id_sche','ticket','time','jumlah')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        // ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                        ->where ('schedules.id_route', '=' , $id_destination)
                        ->get();
                    }
                    else if ($ticket > 0)
                    {
                        // $list= Departure::select()
                        // ->where ('id_schedule', '=' , $id_schedule)
                        // ->get();
                        dd("lala");
                    }
                }


                //Return data to view
                return view('customer/pilihjadwal', ['ticket' => $list]);


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

    public function save_id_schedule(Request $request)
    {
        $value=$request->input();

        if (!empty($value['time'])) {
            Session::put('time',$value['time']);
        }

        if (!empty($value['available'])) {
            Session::put('available',$value['available']);
        }

        if (!empty($value['price'])) {
            Session::put('price',$value['price']);
        }

        if (!empty($value['id_schedule'])) {
            Session::put('id_schedule',$value['id_schedule']);
        }

        return view('customer/datapenumpang');
    }

    public function save_passanger(Request $request)
    {
        $value=$request->input();

        if (!empty($value['nama_pemesan'])) {
            Session::put('nama_pemesan',$value['nama_pemesan']);
        }

        if (!empty($value['phone'])) {
            Session::put('phone',$value['phone']);
        }

        if (!empty($value['email'])) {
            Session::put('email',$value['email']);
        }

        if (!empty($value['nama_penumpang_1'])) {
            Session::put('nama_penumpang_1',$value['nama_penumpang_1']);
        }

        if (!empty($value['nama_penumpang_2'])) {
            Session::put('nama_penumpang_2',$value['nama_penumpang_2']);
        }

        if (!empty($value['nama_penumpang_3'])) {
            Session::put('nama_penumpang_3',$value['nama_penumpang_3']);
        }

        if (!empty($value['nama_penumpang_4'])) {
            Session::put('nama_penumpang_4',$value['nama_penumpang_4']);
        }

        $id_schedule = Session::get('id_schedule');
        $depart_date = Session::get('depart_date');

        $departure = Departure::select('id')
        ->where('departures.id_schedule', $id_schedule)
        ->where('departures.departure_date', $depart_date)
        ->count();

        if ($departure == 0) {
            $id_seat = Schedule::select('id_seat')
            ->where('schedules.id', $id_schedule)
            ->firstOrFail();

            $id_seat->id_seat;
            $seat = Seat::select()->where('id', $id_seat->id_seat)->firstOrFail();

        }

        return view('customer/pilihkursi',['seat'=>$seat]);
    }

    public function save_seat(Request $request)
    {
        $value=$request->input();

        // dd($value['seat']);

        if (!empty($value['seat'])) {
            Session::put('seat',$value['seat']);
        }

        return view('customer/pilihpembayaran');
    }

}
