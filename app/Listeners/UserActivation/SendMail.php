<?php

namespace App\Listeners\UserActivation;

use App\Events\UserActivation;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\MailWithMarkdown;
use App\Mail\SendActivationCode;

class SendMail
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
     * @param  UserActivation  $event
     * @return void
     */
    public function handle(UserActivation $event)
    {
        Mail::to($event->user->email)
            ->send(new SendActivationCode($event->user, $event->code));
    }
}
