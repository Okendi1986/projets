<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    protected $database;
    protected $ref_tabledata;


    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->ref_tabledata = 'register';

    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        try {
            // Validation des données
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            // Rechercher l'utilisateur par email dans Firebase
            $user = $this->database->getReference($this->ref_tabledata)
                ->orderByChild('email')
                ->equalTo($request->email)
                ->getSnapshot()
                ->getValue();

            // Si l'utilisateur existe, vérifier le mot de passe
            if ($user) {
                $userData = reset($user); // Récupérer les données de l'utilisateur
                if (Hash::check($request->password, $userData['pass'])) {
                    // Authentification réussie, rediriger vers la page d'accueil
                    return redirect()->route('master')->with('status', 'Connexion réussie');
                } else {
                    // Mot de passe incorrect
                    return redirect()->route('login')->with('status', 'Mot de passe incorrect');
                }
            } else {
                // Utilisateur non trouvé
                return redirect()->route('login')->with('status', 'Utilisateur non trouvé');
            }

        } catch (\Exception $e) {
            // Capture et renvoie de l'erreur
            return redirect()->route('login')->with('status', 'Erreur : ' . $e->getMessage());
        }
    }
}
