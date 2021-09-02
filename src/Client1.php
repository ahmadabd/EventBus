<?php

namespace App;

class Client1 {
    
    private $event = "Client1";

    public function client(Listener $type1, Publisher $type2){
        echo $type2->publish($this->event);
    }
}