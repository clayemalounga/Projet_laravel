<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produit = Produit::all();
        return view('produits.index',compact('produit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produit = new Produit;
        $produit->libelle = $request->libelle;
        $produit->prix = $request->prix;
        $produit->quantite = $request->quantite;
        $produit->description = $request->description;
        $produit->save();
        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $p = Produit::findOrfail($id);
        return view('produits.show',compact('p'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produit = Produit::find($id);
        return view('produits.edit',compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produit = Produit::findOrfail($id);
        $produit->libelle = $request->libelle;
        $produit->prix = $request->prix;
        $produit->quantite = $request->quantite;
        $produit->description = $request->description;
        $produit->save();
        return redirect()
            ->route('produits.index')
            ->with('success','Produit modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produit::findOrfail($id)->delete();
        return redirect()->route('produits.index');
    }
}
