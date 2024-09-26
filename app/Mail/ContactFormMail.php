<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Crée une nouvelle instance du message.
     *
     * @param array $data
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;

    }

    /**
     * Construit le message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact') // Assurez-vous que la vue existe
            ->from($this->data['email']) // Utiliser l'email et le nom de l'expéditeur
            ->replyTo($this->data['email']) // Répondre à l'email de l'expéditeur
            ->subject('Message client AutoSaleCompany ');
    }
}
