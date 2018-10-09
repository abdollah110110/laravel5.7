<?php

namespace App\Listeners\UserResetPassword;

use App\Events\ResetPasswordEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\MailWithMarkdown;
use App\Mail\SendMailResetPassword;

class ResetPasswordMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ResetPasswordEvent  $event
     * @return void
     */
    public function handle(ResetPasswordEvent $event)
    {
        Mail::to($event->email)
            ->send(new SendMailResetPassword($event->name, $event->url));
    }
}
