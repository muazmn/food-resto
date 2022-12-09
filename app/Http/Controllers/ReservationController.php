<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Table;
use App\Enums\TableStatus;
use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $reservation = $request->session()->get('reservation');
        $tables = Table::where('status', TableStatus::Available)->get();
        return view('reservation.create', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $table = Table::findOrFail($request->table_id);
        // $request_date = Carbon::parse($request->res_date);

        // foreach ($table->reservations as $res) {
        //     if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
        //         return $res->res_date = "selected";
        //     }
        // }
        $reservation = $request->session()->get('reservation');
        $tables = Table::where('status', TableStatus::Available)->get();
        return view('reservation.create', compact('tables', 'reservation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReservationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReservationRequest $request)
    {
        // Reservation::create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'tel_number' => $request->tel_number,
        //     'email' => $request->email,
        //     'table_id' => $request->table_id,
        //     'res_date' => $request->res_date,
        // ]);
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'please choose the table base on guests.');
        }
        // $request_date = Carbon::parse($request->res_date);
        // foreach ($table->reservations as $res) {
        //     if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
        //         return back()->with('warning', "This table is reserved.");
        //     }
        // }
        Reservation::create($request->validated());
        $request = session();
        $request->flash('success', 'reserve added successfull');
        return view('thankyou', [
            "reservations" => Reservation::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }
    // 2022-12-07 18:18:00
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReservationRequest  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
