<?php

namespace App;

class EventBus implements Publisher, Listener {
    public function subscribe($event){
        return "{$event} Can Subscribe :))\n";
    }

    public function unsubscribe($event){
        return "{$event} Can not Subscribe :((\n";
    }

    public function publish($event){
        return "{$event} Can Publish :))\n";
    }
}