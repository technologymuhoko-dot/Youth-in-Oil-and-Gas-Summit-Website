<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('registration.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'         => 'required|string|max:255',
            'last_name'          => 'required|string|max:255',
            'email'              => 'required|email',
            'title'              => 'nullable|string',
            'gender'             => 'nullable|string',
            'participation_type' => 'required|string',
        ]);

        // 1. Find by email, but provide defaults ONLY if creating a new record
        $user = Attendee::updateOrCreate(
            ['email' => $validated['email']], // Only search by email
            $validated
        );

        session(['reg_email' => $user->email]);

        if (!$user->uuid) {
            $user->update(['uuid' => (string) Str::uuid()]);
        }

        // 3. Redirect with the token instead of the email
        return match ($validated['participation_type']) {
            'Attendee'  => redirect()->route('attendee.create', $user->uuid),
            'Sponsor'   => redirect()->route('sponsor.create', $user->uuid),
            default     => redirect()->back(),
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}