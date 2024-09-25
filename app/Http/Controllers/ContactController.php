<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Gère l'envoi d'un email via le formulaire de contact.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Envoi de l'email
        Mail::to('leonelyapi699@gmail.com')->send(new ContactFormMail($data));

        // Redirection avec message de succès
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
