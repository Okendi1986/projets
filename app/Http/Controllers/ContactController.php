<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Préparation des données à envoyer
        $data = [
            'name' => $request->name,
            'email' => $request->email, // Email expéditeur
            'message' => $request->message,
        ];

        // Tentative d'envoi de l'email
        try {
            Mail::to('leonely699@gmail.com')->send(new ContactFormMail($data));
            Log::info('Email envoyé à : ' . $data['email']);

            return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');


        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoi de l\'email de contact : ' . $e->getMessage());

            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer plus tard.');
        }
    }
}
