<?php

namespace App\Controller;

use Portfolio\Controller\AbstractController;

class MainController extends AbstractController {

    public function home() {
		return $this->renderView('main/home.php', ['title' => 'Accueil']);
	}

    public function contact() {
		// Imaginons ici traiter la soumission d'un formulaire de contact et envoyer un mail...
		return $this->renderView('main/contact.php', ['title' => 'Contact']);
	}

    public function parcours() {
        return $this->renderView('main/parcours.php', ['title' => 'Parcours']);
    }

    public function competences() {
        return $this->renderView('main/competences.php', ['title' => 'Competences']);
    }

}