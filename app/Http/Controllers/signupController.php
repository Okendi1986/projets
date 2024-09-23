<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Kreait\Firebase\Database;
use Kreait\Firebase\Contract\Database;
//use Illuminate\Filesystem\Filesystem;

class signupController extends Controller
{
        protected $database;
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
                $ref_tabledata = 'register';
                $postData = [
                        'email' => $request -> email,
                        'nom' => $request -> nom,
                        'prenom' => $request -> prenom,
                        'adresse' => $request -> adresse,
                        'numero' => $request -> numero,
                        'pass' => $request -> password,
                        'confpass' => $request -> confpass,
                        'ville' => $request -> ville,
                ];
                $postRef = $this->database->getReference($this->ref_tabledata)->push($postData);

                if ($postRef) {
                        # code...
                        return redirect('/login')->with('status','inscription reussie');
                }
                else {
                        # code...
                        return redirect('/login')->with('status','inscription echoue');
                }
        }
        
    
}

