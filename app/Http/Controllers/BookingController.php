<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $booking=Booking::all();
        return view("booking.index",compact("booking"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $booking=Booking::all();
        return view("booking.create",compact("booking"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            Booking::GUEST => ['required'],
            Booking::CLOCK => ['required'],
            Booking::CHECK_IN => ['required']
        ]);
        $valid = array_merge($valid,[Booking::USER_ID => Auth::id()]);
        $booking = Booking::create($valid);
        return redirect(route("booking.index"))->with("msg", "Your table reserved successfully.!");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {

        return view("booking.edit",compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Booking $booking)
    {
        $valid = $request->validate([
            Booking::GUEST => ['required'],
            Booking::CLOCK => ['required'],
            Booking::CHECK_IN => ['required']
        ]);
            $booking->update($valid);
        return redirect(route("booking.index"))->with("msg","Your reservation updated successfully.");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return back()->with("msg","Your reservation deleted.");
    }
}
