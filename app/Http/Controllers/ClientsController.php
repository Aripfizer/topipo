<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function AddEntreprise()
    {
        $data = request()->validate([
            "name" => "required|min:5",
        ]);
        Entreprise::create($data);
        return back();
    }
    public function index()
    {
        $clients = Client::all();

        return view('Clients.Clients', compact("clients"));
    }
    public function create()
    {
        $entreprises = Entreprise::all();
        return view('Clients.create', compact("entreprises"));
    }
    public function AddClient()
    {
        $data = request()->validate([
            "name" => "required|min:5",
            "email" => "required|email",
            "entreprise_id" => "required|integer",
        ]);
        Client::create($data);
        return back();
    }
}
