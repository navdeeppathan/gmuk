<?php


namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMessageMail extends Mailable
{
    public $data;
    public $type;

    public function __construct($data, $type = 'admin')
    {
        $this->data = $data;
        $this->type = $type;
    }

    public function build()
    {
        if ($this->type === 'admin') {
            return $this->subject('New Contact Message')
                        ->view('emails.contact_admin');
        }

        return $this->subject('Thank you for contacting us')
                    ->view('emails.contact_user');
    }
}
