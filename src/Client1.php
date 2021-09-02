<?php

namespace App;

class Client1 {
    
    private $event = "Client1";

    public function client(EventSubscriber $type1, EventPublisher $type2){
        echo $type2->publishe($this->event);
    }
}