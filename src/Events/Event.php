<?php

namespace Overtrue\LaravelFollow\Events;

use Overtrue\LaravelFollow\Followable;

class Event
{
    public int $followable_id;
    public int $followable_type;
    public int $follower_id;
    public int $user_id;

    protected Followable $relation;

    public function __construct(Followable $follower)
    {
        $this->follower_id = $this->user_id = $follower->{\config('follow.user_foreign_key', 'user_id')};
        $this->followable_id = $follower->followable_id;
        $this->followable_type = $follower->followable_type;
    }
}
