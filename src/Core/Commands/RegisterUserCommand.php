<?php namespace Flarum\Core\Commands;

class RegisterUserCommand
{
    public $forum;

    public $user;

    public $data;

    public function __construct($user, $forum, $data)
    {
        $this->user = $user;
        $this->forum = $forum;
        $this->data = $data;
    }
}
