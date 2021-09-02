<?php

namespace App;

class EventBus implements EventPublisher, EventSubscriber {
    public function subscribe($event){
        return "{$event} Can Subscribe :))\n";
    }

    public function unsubscribe($event){
        return "{$event} Can not Subscribe :((\n";
    }

    public function publishe($event){
        return "{$event} Can Publish :))\n";
    }
}