<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class HyPMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('osvaldote3@gmail.com', 'Osvaldo'),
            subject: 'HyP Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail',
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

    public function sendEmail(Request $request) {
        //Datos del formulario
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'file' => 'file',
            'msg' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'file' => $request->file,
            'msg' => $request->msg,
        ];

        Mail::send('emails.contact', $data, function($message) use ($request) {
            $message->to('example@example.com') // Destinatario
                    ->subject('Nuevo Mensaje de Contacto');
        });

        return back()->with('success', 'Correo enviado con éxito.');

    //     Mail::to('mail@example.com')->send(new HyPMail());

    // return 'enviado!!';
    }
}
