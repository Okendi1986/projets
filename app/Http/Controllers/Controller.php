<?php

namespace App\Http\Controllers;
use Kreait\Firebase\users\Database;

abstract class Controller
{

   /* public function __construct(Database $database)
    {
        $this->database = $database;
        $this->$ref_dataname = 'users';
    }

    public function store(Request $request)
    {
        
        $postData = [
            'email' => $request ->email,
            'nom' => $request ->nom,
            'prenom' => $request ->prenom,
            'adresse' => $request ->adresse,
            'numero' => $request ->numero,
            'password' => $request ->password,
            'confirme-password' => $request ->confpass,
            'ville' => $request ->ville,
        ];
        $postRef = $this->database->getReference($this->$ref_dataname)->push($postData);

        if ($postRef) {
            # code...
            return 'users enregistrer';
        }
        else {
            # code...
            return 'users nos enregiste';
        }
    }
        */
}
