<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientUserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'annonce_id' => 'required|exists:annonces,id',
            'date' => 'required|date',
        ]);

        $annonce = Annonce::find($request->annonce_id);

        $reservation = new Reservation;
        $reservation->annonce_id = $annonce->id;
        $reservation->user_id = Auth::id();
        $reservation->date = $request->date;
        $reservation->save();

        return redirect()->route('annonces.show', $annonce->id)->with('success', 'Réservation créée avec succès');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('annonces.show', $reservation->annonce->id)->with('success', 'Réservation supprimée avec succès');
    }
}