<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KryptoniteFound extends Mailable
{
    use Queueable, SerializesModels;

    private $who = '';
    private $sujet = '';
    private $content = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->who = $request->email;
        $this->sujet = $request->subject;
        $this->content = $request->content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('email.kryptonite-found')
        ->from($this->who)
        ->subject('Nouvelle demande de contact : ' . $this->who)
        ->with([
            'who' => $this->who,
            'subject' => $this->sujet,
            'content' => $this->content
        ]);
    }
}
