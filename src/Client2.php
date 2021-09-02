<?php

namespace App;

class Client2 {

    private $event = "client2";

    public function client(Listener $type1, Publisher $type2){
        echo $type1->subscribe($this->event);
    }
}