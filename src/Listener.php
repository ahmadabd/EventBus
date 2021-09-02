<?php

namespace App;

interface Listener {
    public function subscribe($event);
    public function unsubscribe($event);
}