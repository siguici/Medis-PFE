<?php

namespace App\Entity;

class UserRole extends Role {
    public function __construct() {
        parent::__construct();
        $this->setName('ROLE_USER');
        $this->setDescription('guarantee every user at least has ROLE_USER');
    }
}