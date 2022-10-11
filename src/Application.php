<?php

namespace App;

class Application {

    public function renderView($view) {
        include($view);
    }
}