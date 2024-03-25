<?php
// Fichier : src/Model/Table/StudentsTable.php

namespace App\Model\Table;

use Cake\ORM\Table;

class StudentsTable extends Table {
    
    public function getStudentsBirthday() {
        $url = "http://10.120.134.112:3002/getBirthday";
        $data = file_get_contents($url);
        $studentsBirthday = json_decode($data, true);
        return $studentsBirthday['students_birthday'];
    }
}
