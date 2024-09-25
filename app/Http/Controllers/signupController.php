<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Kreait\Firebase\Database;
use Kreait\Firebase\Contract\Database;
//use Illuminate\Filesystem\Filesystem;

class signupController extends Controller
{
        protected $database;
        protected $ref_tabledata;
        public function __construct(Database $database)
        {
            $this->database = $database;
            $this->ref_tabledata ='register';

        }
        public function signup()
        {
                return view('signup');
        }

        public function store(Request $request)
        {
            // Validation des données
            $request->validate([
                'email' => 'required|email',
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'adresse' => 'required|string|max:255',
                'numero' => 'required|string|max:15',
                'password' => 'required|min:6|confirmed',
                'ville' => 'required|string|max:255',
            ]);

            // Vérifier si l'email existe déjà
            $existingUser = $this->database->getReference('register')
                ->orderByChild('email')
                ->equalTo($request->email)
                ->getSnapshot()
                ->getValue();

            if ($existingUser) {
                return redirect('/signup')->with('status', 'Cet e-mail est déjà utilisé.');
            }

            // Préparer les données
            $postData = [
                'email' => $request->email,
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'adresse' => $request->adresse,
                'numero' => $request->numero,
                'pass' => bcrypt($request->password), // Hachage du mot de passe
                'ville' => $request->ville,
            ];

            // Insérer les données dans Firebase
            try {
                $this->database->getReference('register')->push($postData);
                return redirect('/login')->with('status', 'Inscription réussie');
            } catch (\Exception $e) {
                return redirect('/signup')->with('status', 'Inscription échouée: ' . $e->getMessage());
            }
        }




}

