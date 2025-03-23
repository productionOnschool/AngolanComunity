<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Fedeisas\LaravelMailCssInliner\LaravelMailCssInliner;

class MemberRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Novo Registro de Membro')
            ->view('emails.member_registration')
            ->with(['data' => $this->data])
            ->withSwiftMessage(function ($message) {
                // Inline CSS using the package
                $inliner = new LaravelMailCssInliner();
                $inliner->inlineCss($message);
            });
    }
}