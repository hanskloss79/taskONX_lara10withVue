<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;
use Inertia\Inertia;


class ClientCRUDController extends Controller
{
        /**
     * Display all records in table 'clients'.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*
        $data['clients'] = Client::all()->sortBy('id');
        return view('clients.index', $data);
        */
        $clients = Client::all();

        return Inertia::render('Clients', [
            'clients' => $clients
        ]);
    }

    /**
     * Show the form to enter the new client into database.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Save a newly created client in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'birth_date' => 'required'
        ]);
        $client = new Client();
        $client->firstname = $request->firstname;
        $client->lastname = $request->lastname;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->birth_date = $request->birth_date;
        $client->save();
        // send email notification to admin mail
        // it must by user in database
        $admin=User::firstOrFail();

        $infoForAdmin = [
            'id' => $client->id,
            'firstname' => $client->firstname,
            'lastname' => $client->lastname,
            'email' => $client->email,
        ];

        Notification::send($admin, new EmailNotification($infoForAdmin));

        // go to the list of Clients
        return redirect()->route('clients.index')
            ->with('success', 'Klient został dodany do bazy.');
    }

    /**
     * Display the specified client.
     *
     * @param  App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'birth_date' => 'required'
        ]);
        $client = Client::find($id);
        $client->firstname = $request->firstname;
        $client->lastname = $request->lastname;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->birth_date = $request->birth_date;
        $client->save();
        return redirect()->route('clients.index')
            ->with('success', 'Dane klienta zostały zaktualizowane');
    }

    /**
     * Remove the specified client from database.
     *
     * @param  App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client  $client)
    {
        $client->delete();
        return redirect()->route('clients.index')
            ->with('success', 'Klient został usunięty z bazy');
    }
}

