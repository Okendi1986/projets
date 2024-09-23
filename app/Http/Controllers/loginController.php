<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
//use Kreait\Firebase\Auth;
use Kreait\Firebase\Contract\Auth;

class LoginController extends Controller
{
   /* protected $auth;

    public function __construct()
    {
        // Initialiser Firebase Auth avec le fichier JSON des informations d'identification
        $this->auth = (new Factory)
            ->withServiceAccount(config("/home/rs/Desktop/projetlaravel/projets/storage/app/firebase/auto-sale-df036-firebase-adminsdk-nn04h-227efa44b1.json"))
            ->createAuth();
    }

    /**
     * Affiche le formulaire de connexion
     */
   /* public function login()
    {
        return view('login');  // Vue qui contient le formulaire de connexion
    }

    /**
     * Authentification de l'utilisateur
     
    public function authenticate(Request $request)
    {
        // Valider les données d'entrée
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        try {
            // Tente d'authentifier l'utilisateur avec email et mot de passe
            $signInResult = $this->auth->signInWithEmailAndPassword($request->email, $request->password);
            
            // Si l'authentification est réussie, vous pouvez obtenir l'ID utilisateur (UID)
            $user = $signInResult->firebaseUserId();
            
            // Vous pouvez également stocker des informations dans la session Laravel
            session(['uid' => $user]);

            return redirect('/dashboard')->with('status', 'Connexion réussie');
        } catch (\Kreait\Firebase\Exception\Auth\InvalidPassword $e) {
            return redirect()->back()->with('error', 'Mot de passe incorrect');
        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            return redirect()->back()->with('error', 'Utilisateur non trouvé');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erreur lors de la connexion : ' . $e->getMessage());
        }
    }

    /**
     * Déconnexion de l'utilisateur
     
    public function logout()
    {
        // Supprimer l'utilisateur de la session
        session()->forget('uid');

        return redirect('/login')->with('status', 'Déconnexion réussie');
    }
    */
}
