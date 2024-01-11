<?php

namespace NotificationChannels\ClickSend;

class ClickSend
{
    public function __construct(protected ClickSendService $clickSendService, public ClickSendConfig $config) {}

    public function sendMessage(ClickSendMessage $message, ?string $to)
    {

    }
}