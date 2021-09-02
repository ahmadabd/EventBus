<?php

namespace App;

interface Publisher {
    public function publish($event);
}