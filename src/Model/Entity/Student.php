<?php
// Fichier : src/Model/Entity/Student.php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Student extends Entity {
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    // Propriété pour stocker la date de naissance
    protected $birthday;

    // Setter pour la date de naissance
    public function setBirthday($a){
        $this->birthday = new \DateTime($a);
    }

    // Getter pour la date de naissance
    public function getBirthday($format = 'Y-m-d') {
        return $this->birthday ? $this->birthday->format($format) : null;
    }
}
