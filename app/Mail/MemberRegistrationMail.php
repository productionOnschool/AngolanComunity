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
        $subject = 'Novo Registro de Membro - ' . $this->data['nome'];

        return $this->subject($subject)
            ->view('emails.member_registration')
            ->with(['data' => $this->data])
            ->withSwiftMessage(function ($message) {
                $inliner = new LaravelMailCssInliner();
                $inliner->inlineCss($message);
            });
    }
}