<?php

class ChatController
{
    public function chat(): string
    {
        return BaseView::generate('Chat', 'index');
    }
}