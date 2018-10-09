<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailResetPassword extends Mailable
{
    use Queueable, SerializesModels;
    
    public $name;
    public $url;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($name, $url)
    {
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('درخواست تغییر رمز عبور')
                    ->markdown('emails.reset-password-mail');
    }
}
