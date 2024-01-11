<?php

namespace NotificationChannels\ClickSend;

class ClickSendService {
    public function __construct(private readonly string $username, private readonly string $password) {}

}