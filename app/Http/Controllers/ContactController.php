<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\ContactAdminNotification;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;

class ContactController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validatedData  =  $request->validate([
            'firstname' => ['required', 'string'],
            'lastname'  => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['required', 'string'],
             'subject' => ['required', 'string'],
             'message' => ['required', 'string'],
 
        ]);

        $admins = User::all();

        foreach($admins as $admin){

            $admin->notify(new ContactAdminNotification($admin, $validatedData));
        }
        
        ToastMagic::success('Contact form submitted successfully');
        return back();
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
