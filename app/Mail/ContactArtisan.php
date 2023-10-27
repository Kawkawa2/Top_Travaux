<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactArtisan extends Mailable
{
    use Queueable, SerializesModels;

    public $Nom_Complet;
    public $Telephone;
    public $reciever;
    public $Email;
    public $Sujet;
    public $Message;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->Nom_Complet = $data['Nom_Complet'];
        $this->Telephone = $data['Telephone'];
        $this->reciever = $data['reciever'];
        $this->Email = $data['Email'];
        $this->Sujet = $data['Sujet'];
        $this->Message = $data['Message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Visiteur.mailTemplate')
            ->subject('Contact Artisan');
    }
}
