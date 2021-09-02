<?php

namespace App;

interface EventSubscriber {
    public function subscribe($event);
    public function unsubscribe($event);
}