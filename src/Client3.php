<?php

namespace App;

class Client3 {
    private $event = "client3";

    public function client(EventSubscriber $type1, EventPublisher $type2){
        echo $type1->subscribe($this->event);

        echo $type2->publishe($this->event);
    }
}