<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
    

class AnnoncesController extends Controller
{
    public function index()
    {
        $annonces = Annonce::all();
        return view('proprietor.annonces', compact('annonces'));
    }

    public function create()
    {
        return view('proprietor.annonces');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required|in:vente,location',
            'prix' => 'required|numeric',
        ]);

        $annonce = new Annonce;
        $annonce->title = $request->title;
        $annonce->description = $request->description;
        $annonce->type = $request->type;
        $annonce->prix = $request->prix;
        $annonce->user_id = Auth::id();
        $annonce->save();

        // return redirect()->route('proprietor.annonces')->with('success', 'Annonce créée avec succès');
        return $this->index();
    }

    public function edit(Annonce $annonce)
    {
        return view('proprietor.edit', compact('annonce'));
    }

    public function update(Request $request, Annonce $annonce)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required|in:vente,location',
            'prix' => 'required|numeric',
        ]);

        $annonce->title = $request->title;
        $annonce->description = $request->description;
        $annonce->type = $request->type;
        $annonce->prix = $request->prix;
        $annonce->save();

        // return redirect()->route('proprietor.annonces')->with('success', 'Annonce modifiée avec succès');
        return $this->index();
    }

    public function destroy(Annonce $annonce)
    {
        $annonce->delete();

        return $this->index();
    }
}