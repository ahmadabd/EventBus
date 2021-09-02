<?php

namespace App;

class Client3 {
    private $event = "client3";

    public function client(Listener $type1, Publisher $type2){
        echo $type1->subscribe($this->event);

        echo $type2->publish($this->event);
    }
}