<?php
namespace controllers;
use Ubiquity\attributes\items\router\Route;
 /**
  * Controller ProjectController
  */
class ProjectController extends \controllers\ControllerBase{

	public function index(){
		
	}


	#[Route(path: "projets/info/{name}",name: "project.info")]
	public function Info($name){

        $infos = [
            ["route"=>"siteperso", "titre"=>"Siteperso", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"siteperso.png",
                "objectif"=>"Réaliser un site personnel de présentation à partir de nos connaissances.", "liencontenu"=>"https://app-louka-fauvel.herokuapp.com/",
                "liengithub"=>"https://github.com/Louka-Fauvel/siteperso",
                "lienconsigne"=>"https://slamwiki2.kobject.net/ateliers/missions/siteperso", "langages"=>"HTML, CSS, PHP", "outils"=>"Font Awesome, Adobe Photoshop, Serveur XAMPP",
                "competences"=>"Travailler en mode projet (analyser les objectifs et les modalités d’organisation d’un projet et planifier les activités)",
                "competences2"=>"Organiser son développement professionnel (gérer son identité professionnelle)", "date"=>"Octobre 2020"],

            ["route"=>"refonte-site-artiste", "titre"=>"Refonte-Site-Artiste", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"Refonte-Site-Artiste.png",
                "objectif"=>"Améliorer le site professionnel de Michèle Ratel.", "liengithub"=>"https://github.com/Louka-Fauvel/Refonte-Site-Artiste",
                "lienconsigne"=>"https://slamwiki2.kobject.net/ateliers/missions/refonte", "themes"=>"NatureSpace", "pluggins"=>"WPForms Lite - Envira Gallery", "outils"=>"Wordpress",
                "competences"=>"Gérer le patrimoine informatique (Exploiter des référentiels, normes et standards adoptés par le prestataire informatique, mettre en place et vérifier les niveaux d'habilitation associés à un service)",
                "competences2"=>"Répondre aux incidents et aux demandes d'assistance et d'évolution (traiter des demandes concernant les applications)",
                "competences3"=>"Développer la présence en ligne de l'organisation (participer à l'évolution d'un site web exploitant les données de l'organisation)",
                "competences4"=>"Travailler en mode projet (analyser les objectifs et les modalités de l'organisation d'un projet, planifier les activités, évaluer les indicateurs de suivi d'un projet et analyser les écarts)",
                "competences5"=>"Mettre à disposition des utilisateurs un service informatique (déployer un service, accompagner les utilisateurs dans la mise en place d'un service)", "date"=>"décembre 2020"],

            ["route"=>"crm", "titre"=>"CRM", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"agilecrm.png",
                "objectif"=>"Proposer à une cliente un logiciel pour l'aider à gérer son activité.", "liencontenu"=>"/assets/doc/Documentation_Client.pdf",
                "lienconsigne"=>"https://slamwiki2.kobject.net/ateliers/missions/artisan", "outils"=>"Agile CRM",
                "competences"=>"Gérer le patrimoine informatique (Exploiter des référentiels, normes et standards adoptés par le prestataire informatique, mettre en place et vérifier les niveaux d'habilitation associés à un service)",
                "competences2"=>"Répondre aux incidents et aux demandes d'assistance et d'évolution (traiter des demandes concernant les applications)",
                "competences3"=>"Travailler en mode projet (analyser les objectifs et les modalités de l'organisation d'un projet, planifier les activités, évaluer les indicateurs de suivi d'un projet et analyser les écarts)",
                "competences4"=>"Mettre à disposition des utilisateurs un service informatique (déployer un service, accompagner les utilisateurs dans la mise en place d'un service)", "date"=>"janvier - février 2021"],

            ["route"=>"webpoo", "titre"=>"WebPOO", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"WebPOO.png", "video"=>"https://www.youtube.com/embed/LMfGrRpgTtk",
                "objectif"=>"Réaliser un réseau social pour des étudiants", "liengithub"=>"https://github.com/Louka-Fauvel/WebPOO",
                "lienconsigne"=>"", "langages"=>"HTML, PHP, CSS", "outils"=>"Bootstrap, Serveur XAMPP",
                "competences"=>"Répondre aux incidents et aux demandes d'assistance et d'évolution (traiter des demandes concernant les applications)",
                "competences2"=>"Travailler en mode projet (analyser les objectifs et les modalités de l'organisation d'un projet, planifier les activités, évaluer les indicateurs de suivi d'un projet et analyser les écarts)",
                "competences3"=>"Mettre à disposition des utilisateurs un service informatique (déployer un service, accompagner les utilisateurs dans la mise en place d'un service)", "date"=>"Avril - Mai 2021"],


            ["route"=>"siteperso2", "titre"=>"Siteperso2", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"siteperso2.png",
                "objectif"=>"Réaliser un site personnel en utilisant des nouvelles connaissances.", "liengithub"=>"https://github.com/Louka-Fauvel/siteperso2",
                "lienconsigne"=>"", "langages"=>"HTML, PHP, CSS", "outils"=>"Bootstrap, Serveur XAMPP",
                "competences"=>"Organiser son développement professionnel (gérer son identité professionnelle)", "date"=>"Septembre - Novembre 2021"],

            ["route"=>"spanimals", "titre"=>"SpAnimals", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"spanimals.png",
                "objectif"=>"Créer une application Web pour refuge animalier.", "liengithub"=>"https://github.com/Louka-Fauvel/SpAnimals",
                "lienconsigne"=>"https://slamwiki2.kobject.net/ateliers/missions/spa", "langages"=>"HTML, Java", "outils"=>"Spring-boot, VueJS",
                "competences"=>"Gérer le patrimoine informatique (Exploiter des référentiels, normes et standards adoptés par le prestataire informatique, mettre en place et vérifier les niveaux d'habilitation associés à un service)",
                "competences2"=>"Répondre aux incidents et aux demandes d'assistance et d'évolution (traiter des demandes concernant les applications)",
                "competences3"=>"Travailler en mode projet (analyser les objectifs et les modalités de l'organisation d'un projet, planifier les activités, évaluer les indicateurs de suivi d'un projet et analyser les écarts)",
                "competences4"=>"Mettre à disposition des utilisateurs un service informatique (déployer un service, accompagner les utilisateurs dans la mise en place d'un service)", "date"=>"Octobre - Novembre 2021"],

            ["route"=>"proxmox-admin", "titre"=>"Proxmox-admin", "titreinfo"=>"", "tailleimg"=>"huge", "img"=>"proxmox-admin.jpg",
                "objectif"=>"Le projet Proxmox-admin est une application qui permet la gestion simplifiée et à distance de serveurs, groupes et VMs proxmox.", "liencontenu"=>"http://vm-1.sts-sio-caen.info/",
                "liengithub"=>"https://github.com/Nathannicolle/proxmox-admin",
                "lienconsigne"=>"https://slamwiki2.kobject.net/ateliers/missions/proxmox", "langages"=>"HTML, PHP, CSS, JavaScript", "outils"=>"Ubiquity, Semantic UI",
                "competences"=>"Gérer le patrimoine informatique (Exploiter des référentiels, normes et standards adoptés par le prestataire informatique, mettre en place et vérifier les niveaux d'habilitation associés à un service)",
                "competences2"=>"Répondre aux incidents et aux demandes d'assistance et d'évolution (traiter des demandes concernant les applications)",
                "competences3"=>"Travailler en mode projet (analyser les objectifs et les modalités de l'organisation d'un projet, planifier les activités, évaluer les indicateurs de suivi d'un projet et analyser les écarts)",
                "competences4"=>"Mettre à disposition des utilisateurs un service informatique (déployer un service, accompagner les utilisateurs dans la mise en place d'un service)", "date"=>"Décembre - Mars 2022"],

            ["route"=>"multi-timer", "titre"=>"Multi-timer", "titreinfo"=>"", "tailleimg"=>"medium", "img"=>"multi-timer.jpg",
                "objectif"=>"Créer une application mobile multi-timer.", "liencontenu"=>"http://vm-1-flutter.sts-sio-caen.info/", "liengithub"=>"https://github.com/Nathannicolle/multi-timer",
                "lienconsigne"=>"https://slamwiki2.kobject.net/ateliers/missions/timers", "langages"=>"Dart", "outils"=>"Flutter Dart",
                "competences"=>"Gérer le patrimoine informatique (Exploiter des référentiels, normes et standards adoptés par le prestataire informatique, mettre en place et vérifier les niveaux d'habilitation associés à un service)",
                "competences2"=>"Répondre aux incidents et aux demandes d'assistance et d'évolution (traiter des demandes concernant les applications)",
                "competences3"=>"Travailler en mode projet (analyser les objectifs et les modalités de l'organisation d'un projet, planifier les activités, évaluer les indicateurs de suivi d'un projet et analyser les écarts)",
                "competences4"=>"Mettre à disposition des utilisateurs un service informatique (déployer un service, accompagner les utilisateurs dans la mise en place d'un service)","date"=>"Avril - Juin 2022"],
        ];

        foreach ($infos as $info) {
            if ($name == $info["route"]) {

                $this->loadView('ProjectController/Info.html', ["info"=>$info]);
                break;

            }

        }

	}

}
