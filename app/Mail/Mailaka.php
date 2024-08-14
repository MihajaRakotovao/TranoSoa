<?php

namespace App\Mail;

use App\Models\Logement;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Mailaka extends Mailable
{
    use Queueable, SerializesModels;


    public $title;
    public $content;
    public $someso;
    public $phone;
    public $mail;

    /**
     * Create a new message instance.
     */
    public function __construct(public $id,$title,$content,$someso,$phone,$mail)
    {
        $this -> id = Logement::find($id);
        $this -> title = $title;
        $this -> phone = $phone;
        $this -> mail = $mail;
        $this -> content = $content;
        $this -> someso = $someso;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mailaka',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'viewUsers.mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
