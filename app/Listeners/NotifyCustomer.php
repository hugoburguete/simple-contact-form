<?php

namespace App\Listeners;

use App\Events\ContactSubmitted;
use App\Notifications\ContactNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Notification;

class NotifyCustomer
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
     * @param  ContactSubmitted  $event
     * @return void
     */
    public function handle(ContactSubmitted $event)
    {
        $contactMessage = $event->contactMessage;
        Notification::route('mail', $contactMessage->email)->notify(new ContactNotification($contactMessage));
        Notification::route('mail', 'enquiries@example.com')->notify(new ContactNotification($contactMessage));
    }
}
