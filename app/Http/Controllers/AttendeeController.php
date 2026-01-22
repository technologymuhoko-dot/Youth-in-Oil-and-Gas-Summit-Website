<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendeeRequest;
use App\Models\Attendee;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Attendee $attendee)
    {
        //
        return view('registration.attendee', compact('attendee'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttendeeRequest $request)
    {
        //
        $validated = $request->validated();

        $search = ['email' => $validated['email']];

        $dataToUpdate = collect($validated)->except(['email', 'ticket_number'])->toArray();

        $attendee = Attendee::updateOrCreate($search, $dataToUpdate);

        return redirect()->route('payment.create', compact('attendee'))->with('success', 'Successfully saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendee $attendee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendee $attendee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendee $attendee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendee $attendee)
    {
        //
    }
}