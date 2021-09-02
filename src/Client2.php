<?php

namespace App;

class Client2 {

    private $event = "client2";

    public function client(EventSubscriber $type1, EventPublisher $type2){
        echo $type1->subscribe($this->event);
    }
}