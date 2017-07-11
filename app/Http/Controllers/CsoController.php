<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\Car;
use App\Models\Counter;
use App\Models\Route;
use App\Models\Departure;
use App\Models\Seat;
use App\Models\Customer;
use App\Models\Reservation;
use App\Models\ListPassenger;

class CsoController extends Controller
{
    public function index()
    {
    	$schedules = Schedule::all();
    	$counters = Counter::all();
        $seats = Seat::all();
    	return view('pages/cso_reservasi', ['jadwal' => $schedules, 'counter' => $counters]);
    }
    public function search(Request $request)
    {
        
    	$data = Route::select('id_destination','counters.name')
        ->join('counters', 'routes.id_destination', 'counters.id')
        ->where('id_origin',$request->id)
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
                 $searchShedule = Schedule::select('id')
                ->where('id_route', '=' , $rute)
                ->where('sunday', '=', '1')
                ->where('onsite' , 'yes')
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
                        $list[] = Schedule::select('schedules.id','time','jumlah as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();
                    }
                    else
                    {
                        $list[] = schedule::select('schedules.id','time','available as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();
                    }
                }

                //Return data to view
                 return ($list);
            } 
            elseif ($lower_day == 'monday') 
            {

                $searchShedule = Schedule::select('id')
                ->where('id_route', '=' , $rute)
                ->where('monday', '=', '1')
                ->where('onsite' , 'yes')
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
                        $list[] = Schedule::select('schedules.id','time','jumlah as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();
                    }
                    else
                    {
                        $list[] = schedule::select('schedules.id','time','available as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();

                    }
                }

                //Return data to view
                 return ($list);


            } 
            elseif ($lower_day == 'tuesday') 
            {

                 $searchShedule = Schedule::select('id')
                ->where('id_route', '=' , $rute)
                ->where('tuesday', '=', '1')
                ->where('onsite' , 'yes')
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
                        $list[] = Schedule::select('schedules.id','time','jumlah as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();
                    }
                    else
                    {
                        $list[] = schedule::select('schedules.id','time','available as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();

                    }
                }

                //Return data to view
                 return ($list);
            } 
            elseif ($lower_day == 'wednesday') 
            {
                 $searchShedule = Schedule::select('id')
                ->where('id_route', '=' , $rute)
                ->where('wednesday', '=', '1')
                ->where('onsite' , 'yes')
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
                        $list[] = Schedule::select('schedules.id','time','jumlah as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();
                    }
                    else
                    {
                        $list[] = schedule::select('schedules.id','time','available as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();
                    }
                }

                //Return data to view
                 return ($list);
            } 
            elseif ($lower_day == 'thursday') 
            {
                 $searchShedule = Schedule::select('id')
                ->where('id_route', '=' , $rute)
                ->where('thursday', '=', '1')
                ->where('onsite' , 'yes')
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
                        $list[] = Schedule::select('schedules.id','time','jumlah as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();
                    }
                    else
                    {
                        $list[] = schedule::select('schedules.id','time','available as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();

                    }
                }

                //Return data to view
                 return ($list);

            } 
            elseif ($lower_day == 'friday') 
            {
                 $searchShedule = Schedule::select('id')
                ->where('id_route', '=' , $rute)
                ->where('friday', '=', '1')
                ->where('onsite' , 'yes')
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
                        $list[] = Schedule::select('schedules.id','time','jumlah as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();
                    }
                    else
                    {
                        $list[] = schedule::select('schedules.id','time','available as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();

                    }
                }

                //Return data to view
                 return ($list);

            } 
            elseif ($lower_day == 'saturday') 
            {

                 $searchShedule = Schedule::select('id')
                ->where('id_route', '=' , $rute)
                ->where('saturday', '=', '1')
                ->where('onsite' , 'yes')
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
                        $list[] = Schedule::select('schedules.id','time','jumlah as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->leftjoin('seats', 'seats.id', '=', 'schedules.id_seat')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();
                    }
                    else
                    {
                        $list[] = schedule::select('schedules.id','time','available as seat','ticket')
                        ->leftjoin('routes', 'routes.id', '=', 'schedules.id_route')
                        ->leftjoin('departures', 'departures.id_schedule', '=', 'schedules.id')
                        ->where ('schedules.id', '=' , $id_schedule)
                        ->get();

                    }
                }

                //Return data to view
                 return ($list);
            }
        } 
        elseif ($stats == 'pp') 
        {
            dd($depart_date, $round_trip_date);
        }
    }
    public function search_customer(Request $request)
    {
        $searchCust = Customer::select()
        ->where('phone' , $request->phone)
        ->get();
        return response()->json($searchCust);
    }
    public function search_seat(Request $request)
    {
       $depart_date = $request->depart_date;
        $format_departure = date('Y-m-d', strtotime($depart_date));
        $format = $format_departure.'%';

        $id_sce = $request->schedule;
        $departure = Departure::select()
            ->where('departures.id_schedule', $id_sce)
            ->where('departure_date','like', $format)
            ->count();
        if ($departure == '0')
        {
            $searchSeat = Schedule::select()
            ->where('schedules.id' , $id_sce)
            ->join('seats', 'seats.id', '=', 'schedules.id_seat')
            ->get();
        } else 
        {
            $searchSeat = Schedule::select()
            ->where('schedules.id' , $id_sce)
            ->join('seats', 'seats.id', '=', 'schedules.id_seat')
            ->join('departures', 'departures.id_schedule', '=', 'schedules.id')
            ->join('reservations', 'reservations.id_departure', '=', 'departures.id')
            ->join('list_passenger','list_passenger.id_reservation','=','reservations.id')
            ->get();
        }
        return response()->json($searchSeat);
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $jumlah = $request->jumlah;
        $price = $request->price;
        $times = $request->time;
        $time= date('H:i', strtotime($times));
        $total_passanger = count($request->seat_passanger);
        $total_price = $price * $total_passanger;
        $id_origin = $request->origin;
        $origin = Counter::select('name')
        ->where('id',$id_origin)
        ->firstOrFail();

        $today = date('Ymd');
        $today2 = substr($today, 2);
        $today1 = $id_origin.$today2.'%';
        $searchtiket = Reservation::select('ticket_number')
            ->where('ticket_number', 'like', $today1)
            ->orderBy('id', 'desc')
            ->first();
        $last_no = substr($searchtiket->ticket_number, 7, 3);
        $NewID1 = $last_no  + 1;
        $ticketnumber = $id_origin.$today2.sprintf('%03s', $NewID1);
            

        $id_routes = $request->counter_tujuan;
        $destination = Route::select('counters.name as name')
        ->join('counters', 'routes.id_destination', 'counters.id')
        ->where('routes.id', '=' ,$id_routes)
        ->firstOrFail();

        $seat_passanger = $request->seat_passanger;
        $depart_date = $request->departure_date;
        $format_departure = date('Y-m-d', strtotime($depart_date));
        $format = $format_departure.'%';
        $search_customer = Customer::select('id')
            ->where('phone' , $phone)
            ->count();
        
            if ($search_customer == 0)
            {
                $customer = new Customer;
                $customer->name = $name;
                $customer->phone = $phone;
                $customer->save();

                $id_customer =  Customer::select('id')
                    ->where('phone' , $phone)
                    ->firstOrFail();
            } 
            else
            {
                $id_customer =  Customer::select('id')
                    ->where('phone' , $phone)
                    ->firstOrFail();
            }

        $id_schedule = $request->schedule;
        $departure = Departure::select()
            ->where('departures.id_schedule', $id_schedule)
            ->where('departure_date','=', $format_departure)
            ->count();
        if ($departure == '0')
        {
            $departure = new Departure;
            $departure->id_schedule = $id_schedule;
            $departure->total_passenger = $total_passanger;
            $departure->departure_date = $format_departure;
            $departure->available = $jumlah-$total_passanger;
            $departure->save();

            $id_departure = Departure::select('id')
                ->orderBy('id', 'desc')
                ->firstOrFail();

            $reservation = new Reservation;
            $reservation->id_departure = $id_departure->id;
            $reservation->id_customer = $id_customer->id;
            $reservation->total_passengers = $total_passanger;
            $reservation->ticket_number = $ticketnumber;
            $reservation->type_reservation = 'onsite';
            $reservation->save();

            $reservation = Reservation::select('id')
                ->orderBy('id', 'desc')
                ->firstOrFail();
            $id_reservation = $reservation->id;

            for ($i=0; $i < $total_passanger ; $i++) { 
                $listpass = new ListPassenger;
                $listpass->id_reservation = $id_reservation;
                $listpass->name_passanger = $name;
                $listpass->seat_number = $seat_passanger[$i];
                $listpass->save();
            }
            
        }
        else
        {
            $id_departure = Departure::select('id','available','total_passenger')
                ->where('departures.id_schedule', $id_schedule)
                ->where('departure_date','=', $format_departure)
                ->get();

            $available = $id_departure[0]->available;
            $total_passenger = $id_departure[0]->total_passenger;

            $departure = Departure::find($id_departure[0]->id);
            $departure->total_passenger = $total_passanger+$total_passenger;
            $departure->available = $available-$total_passanger;
            $departure->save();

            $reservation = new Reservation;
            $reservation->id_departure = $id_departure[0]->id;
            $reservation->id_customer = $id_customer->id;
            $reservation->total_passengers = $total_passanger;
            $reservation->ticket_number = $ticketnumber;
            $reservation->type_reservation = 'onsite';
            $reservation->save();

            $reservation = Reservation::select('id')
                ->orderBy('id', 'desc')
                ->firstOrFail();
            $id_reservation = $reservation->id;

            for ($i=0; $i < $total_passanger ; $i++) { 
                $listpass = new ListPassenger;
                $listpass->id_reservation = $id_reservation;
                $listpass->name_passanger = $name;
                $listpass->seat_number = $seat_passanger[$i];
                $listpass->save();            
            }
        }
        $departure = Departure::select('id','available','total_passenger')
                ->where('departures.id_schedule', $id_schedule)
                ->where('departure_date','=', $format_departure)
                ->get();

        return view('pages/cso_pembayaran', ['id_reservation' => $id_reservation, 'origin' => $origin, 'destination' => $destination, 'depart_date' => $depart_date, 'name' => $name, 'phone' => $phone, 'jumlah' => $total_passanger, 'price' => $price, 'total_price' => $total_price,'seat' => $seat_passanger, 'time' => $time, 'ticketnumber' => $ticketnumber ]);
    }
    public function store_payment(Request $request)
    {
        $reservation_update= Reservation::find($request->id_reservation);
        $reservation_update->amount = $request->total_biaya;
        $reservation_update->discount = $request->discount;
        $reservation_update->type_payment = $request->type_payment;
        $reservation_update->save();

        return redirect('cso');
    }
}