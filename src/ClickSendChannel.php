<?php

namespace NotificationChannels\ClickSend;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Notifications\Notification;

class ClickSendChannel
{
    public function __construct(protected ClickSend $clickSend, protected Dispatcher $events) {}

    /**
     * Send the given notification.
     *
     *
     */
    public function send(mixed $notifiable, Notification $notification)
    {

        //$response = [a call to the api of your notification send]

//        if ($response->error) { // replace this by the code need to check for errors
//            throw CouldNotSendNotification::serviceRespondedWithAnError($response);
//        }
    }
}
