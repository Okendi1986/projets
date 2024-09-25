<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Contract\Database;

class VehicleController extends Controller
{
    protected $database;

    public function __construct()
    {
        $factory = (new Factory)
            ->withServiceAccount(config('services.firebase.credentials'))
            ->withDatabaseUri(config('services.firebase.database_url'));

        $this->database = $factory->createDatabase();
    }

    public function index(Request $request)
    {
        try {
            $query = $request->get('query');
            $vehiclesRef = $this->database->getReference('vehicles');
            $vehicles = $vehiclesRef->getValue() ?? [];

            // Filtrer les véhicules si une requête de recherche est fournie
            if ($query) {
                $vehicles = array_filter($vehicles, function ($vehicle) use ($query) {
                    return stripos($vehicle['model'], $query) !== false;
                });
            }

            return view('works', ['vehicles' => $vehicles]);
        } catch (\Exception $e) {
            \Log::error('Erreur dans VehicleController@index: ' . $e->getMessage());
            return response()->view('errors.500', [], 500);
        }
    }

}
