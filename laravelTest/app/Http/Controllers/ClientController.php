<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $client = Client::all();
        //dd($client);
        return view('clientEntreprise.index',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entreprise = Entreprise::all();
        return view('clientEntreprise.create',compact('entreprise'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $save = Client::create($data);
        return redirect()->route('clientEntreprise.index');
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
        $client = Client::find($id);
        $entreprise = Entreprise::all();
        return view('clientEntreprise.edit',compact('client','entreprise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::find($id);
        $client->update($request->all());
        return redirect()
        ->route('clientEntreprise.index')
        ->with('succes','Modification effectuee avec succes'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::findOrfail($id)->delete();
        return redirect()
            ->route('clientEntreprise.index')
            ->with('success','Supression effectuee avec succes');
    }
}
