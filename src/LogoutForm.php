<?php

class LogoutForm extends Form {
    public function __construct(string $path, string $verb = 'POST') {
        parent::__construct('logout', $path, $verb);
    }
}
