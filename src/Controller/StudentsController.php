<?php
// Chemin : /app/Controller/StudentsController.php

namespace App\Controller;

use App\Controller\AppController;

class StudentsController extends AppController {
    public function index() {
        // Instancier le modèle Students
        $studentsTable = $this->getTableLocator()->get('Students');

        // Récupérer les anniversaires des étudiants depuis l'API
        $studentsBirthday = $studentsTable->getStudentsBirthday();

        // Définir les données à passer à la vue
        $this->set(compact('studentsBirthday'));
        $this->set('_serialize', 'studentsBirthday');
    }
}
